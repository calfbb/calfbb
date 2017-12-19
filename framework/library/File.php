<?php
namespace framework\library;
/**
 * 文件操作   牛宝宝技术团队
 *
 *
 */
class File
{

    /**
     * 将数据写入文件
     *
     * @param string $filename
     *            文件名称
     * @param string $data
     *            写入数据
     * @return boolean
     */
    public  function file_write($filename, $data)
    {
        global $_W;
        $filename = CALFBB . '/' . $filename;
        $this->mkdirs(dirname($filename));
        file_put_contents($filename, $data);
        @chmod($filename, $_W['config']['setting']['filemode']);
        return is_file($filename);
    }

    public  function file_read($filename)
    {
        global $_W;
        $filename = ATTACHMENT_ROOT . '/' . $filename;
        if (!is_file($filename)) {
            return false;
        }
        return file_get_contents($filename);
    }

    /**
     * 将文件移动至目标位置
     *
     * @param string $filename
     *            移动的文件
     * @param string $dest
     *            移动的目标位置
     * @return boolean
     */
    public  function file_move($filename, $dest)
    {
        global $_W;
        $this->mkdirs(dirname($dest));
        if (is_uploaded_file($filename)) {
            move_uploaded_file($filename, $dest);
        } else {
            rename($filename, $dest);
        }
        @chmod($filename, $_W['config']['setting']['filemode']);
        return is_file($dest);
    }

    /**
     * 获取指定目录下所有文件路径
     *
     * @param string $path
     *            文件夹目录
     * @param array $include
     *            指定获取子目录
     * @return array
     */
    public  function file_tree($path, $include = array())
    {
        $files = array();
        if (!empty($include)) {
            $ds = glob($path . '/{' . implode(',', $include) . '}', GLOB_BRACE);
        } else {
            $ds = glob($path . '/*');
        }
        if (is_array($ds)) {
            foreach ($ds as $entry) {
                if (is_file($entry)) {
                    $files[] = $entry;
                }
                if (is_dir($entry)) {
                    $rs = file_tree($entry);
                    foreach ($rs as $f) {
                        $files[] = $f;
                    }
                }
            }
        }
        return $files;
    }

    /**
     * 递归创建目录
     *
     * @param string $path
     *            目录
     * @return boolean
     */
    public  function mkdirs($path)
    {
        if (!is_dir($path)) {
            $this->mkdirs(dirname($path));
            mkdir($path);
        }
        return is_dir($path);
    }

    /**
     * 复制指定目录下所有文件到新目录
     *
     * @param string $src
     *            原始文件夹
     * @param string $des
     *            目标文件夹
     * @param array $filter
     *            需要过滤的文件类型
     * @param array $type
     *            复制文件类型 1目录 2文件
     */
    public  function file_copy($src, $des, $filter,$type=1)
    {
        @mkdir($des);
        if($type==1){
            $dir = opendir($src);
            while (false !== ($file = readdir($dir))) {
                if (($file != '.') && ($file != '..')) {
                    if (is_dir($src . '/' . $file)) {
                        file_copy($src . '/' . $file, $des . '/' . $file, $filter);
                    } elseif (!in_array(substr($file, strrpos($file, '.') + 1), $filter)) {
                        copy($src . '/' . $file, $des . '/' . $file);
                    }
                }
            }
            closedir($dir);
        }else{
            if (is_dir($src)) {
                file_copy($src , $des , $filter,1);
            } elseif (!in_array(substr($src, strrpos($src, '.') + 1), $filter)) {
                $dir=dirname($des); // 取得当前文件所在的绝对目录，结果：D:\www\
                if(!file_exists($dir)){
                    $this->mkdirs($dir);
                    @chmod($dir, 755);
                }

                copy($src, $des);
            }
        }

        return true;
    }

    /**
     * 删除目录
     *
     * @param string $path
     *            目录位置
     * @param bool $clean
     *            true: 不删除目录，仅删除目录内文件; false: 整个目录全部删除
     * @return boolean
     */
    public  function rmdirs($path, $clean = false)
    {
        if (!is_dir($path)) {
            return false;
        }
        $files = glob($path . '/*');
        if ($files) {
            foreach ($files as $file) {
                is_dir($file) ? rmdirs($file) : @unlink($file);
            }
        }
        return $clean ? true : @rmdir($path);
    }

    /**
     * 上传文件到附件目录
     *
     * @param array $file
     *            上传的文件信息
     * @param string $type
     *            文件保存类型
     * @param string $name
     *            保存的文件名,不含后缀.(未指定则自动生成文件名，指定则是从附件目录开始的完整相对路径)
     * @param int $i
     *            用于sass系统中，多个服务应用时，指定应用的id,单个服务应用时可不设置
     * @return array 错误信息 error 或 array('success' => bool，'path' => 保存路径（从附件目录开始的完整相对路径）)
     */
    public  function file_upload($file, $type = 'image', $name = '',$i='')
    {
        global $_G;
        $fileConf=\Framework\library\conf::G('file');

        $harmtype = array('asp', 'php', 'jsp', 'js', 'css', 'php3', 'php4', 'php5', 'ashx', 'aspx', 'exe', 'cgi');
        if (empty($file)) {
            return error(-1, '没有上传内容');
        }
        if (!in_array($type, array('image', 'thumb', 'voice', 'video', 'audio'))) {
            return error(-2, '未知的上传类型');
        }

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $ext = strtolower($ext);

        switch ($type) {
            case 'image' :
            case 'thumb' :
                $allowExt = array('gif', 'jpg', 'jpeg', 'bmp', 'png', 'ico');
                $limit = $fileConf['image']['limit'];
                break;
            case 'voice' :
            case 'audio' :
                $allowExt = array('mp3', 'wma', 'wav', 'amr');
                $limit = $fileConf['audio']['limit'];
                break;
            case 'video' :
                $allowExt = array('rm', 'rmvb', 'wmv', 'avi', 'mpg', 'mpeg', 'mp4');
                $limit = $fileConf['audio']['limit'];
                break;
        }
        $setting = $fileConf[$type];
        if (!empty($setting)) {
            $allowExt = array_merge($setting['extentions'], $allowExt);
        }
        if (!in_array(strtolower($ext), $allowExt) || in_array(strtolower($ext), $harmtype)) {
            return error(-3, '不允许上传此类文件');
        }
        if (!empty($limit) && $limit * 1024 < filesize($file['tmp_name'])) {
            return error(-4, "上传的文件超过大小限制，请上传小于 {$limit}k 的文件");
        }

        if (empty($name) || $name == 'auto') {
            if(!empty($i)){
                $i = "/".$i;
            }
            $path = "{$type}s{$i}/" . date('Y/m/');
            $this->mkdirs(ATTACHMENT_ROOT . '/' . $path);
            $filename = $this->file_random_name(ATTACHMENT_ROOT . '/' . $path, $ext);

            $result = $path . $filename;
        } else {
            $this->mkdirs(dirname(ATTACHMENT_ROOT . '/' . $name));
            if (!strexists($name, $ext)) {
                $name .= '.' . $ext;
            }
            $result = $name;
        }

        if (! $this->file_move($file['tmp_name'], ATTACHMENT_ROOT . '/' . $result)) {
            return error(-1, '保存上传文件失败');
        }

        return success(1,$result);
    }

    /*public  function file_wechat_upload($file, $type = 'image', $name = '')
    {
        $harmtype = array('asp', 'php', 'jsp', 'js', 'css', 'php3', 'php4', 'php5', 'ashx', 'aspx', 'exe', 'cgi');
        if (empty($file)) {
            return error(-1, '没有上传内容');
        }
        if (!in_array($type, array('image', 'thumb', 'voice', 'video', 'audio'))) {
            return error(-2, '未知的上传类型');
        }

        global $_W;
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        if (in_array(strtolower($ext), $harmtype)) {
            return error(-3, '不允许上传此类文件');
        }

        $result = array();
        if (empty($name) || $name == 'auto') {
            $uniacid = intval($_W['uniacid']);
            $path = "{$type}s/{$uniacid}/" . date('Y/m/');
            mkdirs(ATTACHMENT_ROOT . '/' . $path);
            $filename = file_random_name(ATTACHMENT_ROOT . '/' . $path, $ext);
            $result['path'] = $path . $filename;
        } else {
            mkdirs(dirname(ATTACHMENT_ROOT . '/' . $name));
            if (!strexists($name, $ext)) {
                $name .= '.' . $ext;
            }
            $result['path'] = $name;
        }

        if (!file_move($file['tmp_name'], ATTACHMENT_ROOT . '/' . $result['path'])) {
            return error(-1, '保存上传文件失败');
        }
        $result['success'] = true;
        return $result;
    }*/

    /**
     * 上传图片到远程服务器，需要外部自行处理成功和失败时删除原图的操作
     *
     * @param string $filename
     *            图片的相对路径从attachment开始
     * @return boolean|error
     */
    /* public  function file_remote_upload($filename, $auto_delete_local = true)
     {
         global $_W;
         if (empty($_W['setting']['remote']['type'])) {
             return false;
         }
         if ($_W['setting']['remote']['type'] == '1') {
             require_once(IA_ROOT . '/framework/library/ftp/ftp.php');
             $ftp_config = array(
                 'hostname' => $_W['setting']['remote']['ftp']['host'],
                 'username' => $_W['setting']['remote']['ftp']['username'],
                 'password' => $_W['setting']['remote']['ftp']['password'],
                 'port' => $_W['setting']['remote']['ftp']['port'],
                 'ssl' => $_W['setting']['remote']['ftp']['ssl'],
                 'passive' => $_W['setting']['remote']['ftp']['pasv'],
                 'timeout' => $_W['setting']['remote']['ftp']['timeout'],
                 'rootdir' => $_W['setting']['remote']['ftp']['dir']
             );
             $ftp = new Ftp($ftp_config);
             if (true === $ftp->connect()) {
                 $response = $ftp->upload(ATTACHMENT_ROOT . '/' . $filename, $filename);
                 if ($auto_delete_local) {
                     file_delete($filename);
                 }
                 if (!empty($response)) {
                     return true;
                 } else {
                     return error(1, '远程附件上传失败，请检查配置并重新上传');
                 }
             } else {
                 return error(1, '远程附件上传失败，请检查配置并重新上传');
             }
         } elseif ($_W['setting']['remote']['type'] == '2') {
             require_once(IA_ROOT . '/framework/library/alioss/autoload.php');
             load()->model('attachment');
             $buckets = attachment_alioss_buctkets($_W['setting']['remote']['alioss']['key'], $_W['setting']['remote']['alioss']['secret']);
             $endpoint = 'http://' . $buckets[$_W['setting']['remote']['alioss']['bucket']]['location'] . '.aliyuncs.com';
             try {
                 $ossClient = new \OSS\OssClient($_W['setting']['remote']['alioss']['key'], $_W['setting']['remote']['alioss']['secret'], $endpoint);
                 $ossClient->uploadFile($_W['setting']['remote']['alioss']['bucket'], $filename, ATTACHMENT_ROOT . $filename);
             } catch (\OSS\Core\OssException $e) {
                 return error(1, $e->getMessage());
             }
             if ($auto_delete_local) {
                 file_delete($filename);
             }
         } elseif ($_W['setting']['remote']['type'] == '3') {
             require_once(IA_ROOT . '/framework/library/qiniu/autoload.php');
             $auth = new Qiniu\Auth($_W['setting']['remote']['qiniu']['accesskey'], $_W['setting']['remote']['qiniu']['secretkey']);
             $config = new Qiniu\Config();
             $uploadmgr = new Qiniu\Storage\UploadManager($config);
             // 构造上传策略，覆盖已有文件
             $putpolicy = Qiniu\base64_urlSafeEncode(json_encode(array(
                 'scope' => $_W['setting']['remote']['qiniu']['bucket'] . ':' . $filename
             )));
             $uploadtoken = $auth->uploadToken($_W['setting']['remote']['qiniu']['bucket'], $filename, 3600, $putpolicy);
             list($ret, $err) = $uploadmgr->putFile($uploadtoken, $filename, ATTACHMENT_ROOT . '/' . $filename);
             if ($auto_delete_local) {
                 file_delete($filename);
             }
             if ($err !== null) {
                 return error(1, '远程附件上传失败，请检查配置并重新上传');
             } else {
                 return true;
             }
         } elseif ($_W['setting']['remote']['type'] == '4') {
             if (!empty($_W['setting']['remote']['cos']['local'])) {
                 require(IA_ROOT . '/framework/library/cosv4.2/include.php');
                 qcloudcos\Cosapi::setRegion($_W['setting']['remote']['cos']['local']);
                 $uploadRet = qcloudcos\Cosapi::upload($_W['setting']['remote']['cos']['bucket'], ATTACHMENT_ROOT . $filename, '/' . $filename, '', 3 * 1024 * 1024, 0);
             } else {
                 require(IA_ROOT . '/framework/library/cos/include.php');
                 $uploadRet = \Qcloud_cos\Cosapi::upload($_W['setting']['remote']['cos']['bucket'], ATTACHMENT_ROOT . $filename, '/' . $filename, '', 3 * 1024 * 1024, 0);
             }
             if ($uploadRet['code'] != 0) {
                 switch ($uploadRet['code']) {
                     case -62 :
                         $message = '输入的appid有误';
                         break;
                     case -79 :
                         $message = '输入的SecretID有误';
                         break;
                     case -97 :
                         $message = '输入的SecretKEY有误';
                         break;
                     case -166 :
                         $message = '输入的bucket有误';
                         break;
                 }
                 return error(-1, $message);
             }
             if ($auto_delete_local) {
                 file_delete($filename);
             }
         }
     }*/

    /**
     * 获取指定某目录下指定后缀的随机文件名
     *
     * @param string $dir
     *            目录的绝对路径
     * @param string $ext
     *            文件后缀名
     * @return string 随机文件名称
     */
    public  function file_random_name($dir, $ext)
    {
        do {
            $filename = random(30) . '.' . $ext;
        } while (file_exists($dir . $filename));

        return $filename;
    }

    /**
     * 删除系统附件
     *
     * @param string $file
     * @return boolean
     */
    function file_delete($file)
    {
        if (empty($file)) {
            return FALSE;
        }
        if (file_exists($file)) {
            @unlink($file);
            return TRUE;
        }
        if (file_exists(ATTACHMENT_ROOT . '/' . $file)) {
            @unlink(ATTACHMENT_ROOT . '/' . $file);
            return TRUE;
        }
        return FALSE;
    }
    /*
    public  function file_remote_delete($file)
    {
        global $_W;
        if (empty($file)) {
            return true;
        }
        if ($_W['setting']['remote']['type'] == '1') {
            require_once(IA_ROOT . '/framework/library/ftp/ftp.php');
            $ftp_config = array(
                'hostname' => $_W['setting']['remote']['ftp']['host'],
                'username' => $_W['setting']['remote']['ftp']['username'],
                'password' => $_W['setting']['remote']['ftp']['password'],
                'port' => $_W['setting']['remote']['ftp']['port'],
                'ssl' => $_W['setting']['remote']['ftp']['ssl'],
                'passive' => $_W['setting']['remote']['ftp']['pasv'],
                'timeout' => $_W['setting']['remote']['ftp']['timeout'],
                'rootdir' => $_W['setting']['remote']['ftp']['dir']
            );
            $ftp = new Ftp($ftp_config);
            if (true === $ftp->connect()) {
                if ($ftp->delete_file($file)) {
                    return true;
                } else {
                    return error(1, '删除附件失败，请检查配置并重新删除');
                }
            } else {
                return error(1, '删除附件失败，请检查配置并重新删除');
            }
        } elseif ($_W['setting']['remote']['type'] == '2') {
            load()->model('attachment');
            require_once(IA_ROOT . '/framework/library/alioss/autoload.php');
            $buckets = attachment_alioss_buctkets($_W['setting']['remote']['alioss']['key'], $_W['setting']['remote']['alioss']['secret']);
            $endpoint = 'http://' . $buckets[$_W['setting']['remote']['alioss']['bucket']]['location'] . '.aliyuncs.com';
            try {
                $ossClient = new \OSS\OssClient($_W['setting']['remote']['alioss']['key'], $_W['setting']['remote']['alioss']['secret'], $endpoint);
                $ossClient->deleteObject($_W['setting']['remote']['alioss']['bucket'], $file);
            } catch (\OSS\Core\OssException $e) {
                return error(1, '删除oss远程文件失败');
            }
        } elseif ($_W['setting']['remote']['type'] == '3') {
            require_once IA_ROOT . '/framework/library/qiniu/autoload.php';
            $auth = new Qiniu\Auth($_W['setting']['remote']['qiniu']['accesskey'], $_W['setting']['remote']['qiniu']['secretkey']);
            $bucketMgr = new Qiniu\Storage\BucketManager($auth);
            $error = $bucketMgr->delete($_W['setting']['remote']['qiniu']['bucket'], $file);
            if ($error instanceof Qiniu\Http\Error) {
                if ($error->code() == 612) {
                    return true;
                }
                return error(1, '删除七牛远程文件失败');
            } else {
                return true;
            }
        } elseif ($_W['setting']['remote']['type'] == '4') {
            $bucketName = $_W['setting']['remote']['cos']['bucket'];
            $path = "/" . $file;
            if (!empty($_W['setting']['remote']['cos']['local'])) {
                require(IA_ROOT . '/framework/library/cosv4.2/include.php');
                qcloudcos\Cosapi::setRegion($_W['setting']['remote']['cos']['local']);
                $result = qcloudcos\Cosapi::delFile($bucketName, $path);
            } else {
                require(IA_ROOT . '/framework/library/cos/include.php');
                $result = Qcloud_cos\Cosapi::delFile($bucketName, $path);
            }
            if (!empty($result['code'])) {
                return error(-1, '删除cos远程文件失败');
            } else {
                return true;
            }
        }
        return true;
    }*/

    /**
     * 图像缩略处理
     * 可处理图像类型jpg和png
     * 如果原图像宽度小于指定宽度, 直接复制到目标地址
     * 如果原图像宽度大于指定宽度, 按比例缩放至指定宽度后保存至目标地址
     *
     * @param string $srcfile
     *            原图像地址
     * @param string $desfile
     *            新图像地址
     * @param int $width
     *            缩放宽度
     * @return mixed string:缩略图地址; error:调用缩略方法失败;
     */
    public  function file_image_thumb($srcfile, $desfile = '', $width = 0)
    {
        global $_G;

        if (!file_exists($srcfile)) {
            return error('-1', '原图像不存在');
        }
        if (!$this->file_is_image($srcfile)) {
            return error('-1', '原图像不存在');
        }
        if (intval($width) == 0) {
            $fileConf=\Framework\library\conf::G('file');
            $width = intval($fileConf['image']['width']);
        }
        if (intval($width) < 0) {
            return error('-1', '缩放宽度无效');
        }

        if (empty($desfile)) {
            $ext = pathinfo($srcfile, PATHINFO_EXTENSION);
            $srcdir = dirname($srcfile);
            do {
                $desfile = $srcdir . '/' . random(30) . ".{$ext}";
            } while (file_exists($desfile));
        }

        $des = dirname($desfile);
        // 创建存放目录
        if (!file_exists($des)) {
            if (!mkdirs($des)) {
                return error('-1', '创建目录失败');
            }
        } elseif (!is_writable($des)) {
            return error('-1', '目录无法写入');
        }

        // 原图像信息
        $org_info = @getimagesize($srcfile);
        if ($org_info) {
            if ($width == 0 || $width > $org_info[0]) {
                copy($srcfile, $desfile);
                return  success(1,str_replace(ATTACHMENT_ROOT . '/', '', $desfile));
            }
            if ($org_info[2] == 1) { // gif不处理
                if (function_exists("imagecreatefromgif")) {
                    $img_org = imagecreatefromgif($srcfile);
                }
            } elseif ($org_info[2] == 2) {
                if (function_exists("imagecreatefromjpeg")) {
                    $img_org = imagecreatefromjpeg($srcfile);
                }
            } elseif ($org_info[2] == 3) {
                if (function_exists("imagecreatefrompng")) {
                    $img_org = imagecreatefrompng($srcfile);
                    imagesavealpha($img_org, true);
                }
            }
        } else {
            return error('-1', '获取原始图像信息失败');
        }
        // 源图像的宽高比
        $scale_org = $org_info[0] / $org_info[1];
        // 缩放后的高
        $height = $width / $scale_org;
        if (function_exists("imagecreatetruecolor") && function_exists("imagecopyresampled") && @$img_dst = imagecreatetruecolor($width, $height)) {
            imagealphablending($img_dst, false);
            imagesavealpha($img_dst, true);
            imagecopyresampled($img_dst, $img_org, 0, 0, 0, 0, $width, $height, $org_info[0], $org_info[1]);
        } else {
            return error('-1', 'PHP环境不支持图片处理');
        }
        if ($org_info[2] == 2) {
            if (function_exists('imagejpeg')) {
                imagejpeg($img_dst, $desfile);
            }
        } else {
            if (function_exists('imagepng')) {
                imagepng($img_dst, $desfile);
            }
        }

        imagedestroy($img_dst);
        imagedestroy($img_org);
        return success(1,str_replace(ATTACHMENT_ROOT . '/', '', $desfile));

    }

    /**
     * 图像裁切处理
     * 可处理图像类型jpg和png
     * 如果原图像宽度小于指定宽度(高度), 不处理宽度(高度)
     * 如果原图像宽度大于指定宽度(高度), 则按照裁剪位置裁切指定宽度(高度)
     * 将裁切成功的图像保存至目标地址
     *
     * @param string $src
     *            原图像地址
     * @param string $desfile
     *            新图像地址
     * @param int $width
     *            要裁切的宽度
     * @param int $height
     *            要裁切的高度
     * @param int $position
     *            开始裁切的位置, 按照九宫格1-9指定位置
     * @return boolean|array 指示裁切成功或裁切失败原因
     */
    public function file_image_crop($src, $desfile, $width = 400, $height = 300, $position = 1)
    {
        if (!file_exists($src)) {
            return error('-1', '原图像不存在');
        }
        if (intval($width) <= 0 || intval($height) <= 0) {
            return error('-1', '裁剪尺寸无效');
        }
        if (intval($position) > 9 || intval($position) < 1) {
            return error('-1', '裁剪位置无效');
        }

        $des = dirname($desfile);
        // 创建存放目录
        if (!file_exists($des)) {
            if (!mkdirs($des)) {
                return error('-1', '创建目录失败');
            }
        } elseif (!is_writable($des)) {
            return error('-1', '目录无法写入');
        }
        // 原图像信息
        $org_info = @getimagesize($src);
        if ($org_info) {
            if ($org_info[2] == 1) { // gif不处理
                if (function_exists("imagecreatefromgif")) {
                    $img_org = imagecreatefromgif($src);
                }
            } elseif ($org_info[2] == 2) {
                if (function_exists("imagecreatefromjpeg")) {
                    $img_org = imagecreatefromjpeg($src);
                }
            } elseif ($org_info[2] == 3) {
                if (function_exists("imagecreatefrompng")) {
                    $img_org = imagecreatefrompng($src);
                }
            }
        } else {
            return error('-1', '获取原始图像信息失败');
        }

        // 处理裁剪的宽高
        if ($width == '0' || $width > $org_info[0]) {
            $width = $org_info[0];
        }
        if ($height == '0' || $height > $org_info[1]) {
            $height = $org_info[1];
        }
        // 获取裁剪的起点坐标
        switch ($position) {
            case 0 :
            case 1 :
                $dst_x = 0;
                $dst_y = 0;
                break;
            case 2 :
                $dst_x = ($org_info[0] - $width) / 2;
                $dst_y = 0;
                break;
            case 3 :
                $dst_x = $org_info[0] - $width;
                $dst_y = 0;
                break;
            case 4 :
                $dst_x = 0;
                $dst_y = ($org_info[1] - $height) / 2;
                break;
            case 5 :
                $dst_x = ($org_info[0] - $width) / 2;
                $dst_y = ($org_info[1] - $height) / 2;
                break;
            case 6 :
                $dst_x = $org_info[0] - $width;
                $dst_y = ($org_info[1] - $height) / 2;
                break;
            case 7 :
                $dst_x = 0;
                $dst_y = $org_info[1] - $height;
                break;
            case 8 :
                $dst_x = ($org_info[0] - $width) / 2;
                $dst_y = $org_info[1] - $height;
                break;
            case 9 :
                $dst_x = $org_info[0] - $width;
                $dst_y = $org_info[1] - $height;
                break;
            default :
                $dst_x = 0;
                $dst_y = 0;
        }
        if ($width == $org_info[0]) {
            $dst_x = 0;
        }
        if ($height == $org_info[1]) {
            $dst_y = 0;
        }

        if (function_exists("imagecreatetruecolor") && function_exists("imagecopyresampled") && @$img_dst = imagecreatetruecolor($width, $height)) {
            imagecopyresampled($img_dst, $img_org, 0, 0, $dst_x, $dst_y, $width, $height, $width, $height);
        } else {
            return error('-1', 'PHP环境不支持图片处理');
        }
        if (function_exists('imagejpeg')) {
            imagejpeg($img_dst, $desfile);
        } elseif (function_exists('imagepng')) {
            imagepng($img_dst, $desfile);
        }
        imagedestroy($img_dst);
        imagedestroy($img_org);
        return success();
    }

    /**
     * 文件扫描
     *
     * @param string $filepath
     *            目录名称
     * @param int $subdir
     *            是否搜索子目录
     * @param string $ex
     *            搜索扩展
     * @param int $isdir
     *            是否只搜索目录
     * @param int $md5
     *            是否生成MD5验证码
     * @param int $enforcement
     * @return array
     */
    public function file_lists($filepath, $subdir = 1, $ex = '', $isdir = 0, $md5 = 0, $enforcement = 0)
    {
        static $file_list = array();
        if ($enforcement)
            $file_list = array();
        $flags = $isdir ? GLOB_ONLYDIR : 0;
        $list = glob($filepath . '*' . (!empty($ex) && empty($subdir) ? '.' . $ex : ''), $flags);
        if (!empty($ex))
            $ex_num = strlen($ex);
        foreach ($list as $k => $v) {
            $v = str_replace('\\', '/', $v);
            $v1 = str_replace(IA_ROOT . '/', '', $v);
            if ($subdir && is_dir($v)) {
                file_lists($v . '/', $subdir, $ex, $isdir, $md5);
                continue;
            }
            if (!empty($ex) && strtolower(substr($v, -$ex_num, $ex_num)) == $ex) {

                if ($md5) {
                    $file_list[$v1] = md5_file($v);
                } else {
                    $file_list[] = $v1;
                }
                continue;
            } elseif (!empty($ex) && strtolower(substr($v, -$ex_num, $ex_num)) != $ex) {
                unset($list[$k]);
                continue;
            }
        }
        return $file_list;
    }

    /**
     * 获取远程素材
     *
     * @param string $url
     *            文件地址
     * @param int $limit
     *            文件大小限制（单位：KB）。默认为：系统的图片大小设置
     * @param string $path
     *            文件保存路径。默认为：系统附件目录 "images/{$uniacid}/Y/m/文件名";
     * @return string 文件path
     *
     */
    public function file_remote_attach_fetch($url, $limit = 0, $path = '')
    {
        global $_W;
        $url = trim($url);
        if (empty($url)) {
            return error(-1, '文件地址不存在');
        }
        load()->func('communication');
        $resp = ihttp_get($url);
        if (is_error($resp)) {
            return error(-1, '提取文件失败, 错误信息: ' . $resp['message']);
        }
        if (intval($resp['code']) != 200) {
            return error(-1, '提取文件失败: 未找到该资源文件.');
        }
        $ext = $type = '';
        switch ($resp['headers']['Content-Type']) {
            case 'application/x-jpg' :
            case 'image/jpg' :
            case 'image/jpeg' :
                $ext = 'jpg';
                $type = 'images';
                break;
            case 'image/png' :
                $ext = 'png';
                $type = 'images';
                break;
            case 'image/gif' :
                $ext = 'gif';
                $type = 'images';
                break;
            case 'video/mp4' :
            case 'video/mpeg4' :
                $ext = 'mp4';
                $type = 'videos';
                break;
            case 'video/x-ms-wmv' :
                $ext = 'wmv';
                $type = 'videos';
                break;
            case 'audio/mpeg' :
                $ext = 'mp3';
                $type = 'audios';
                break;
            case 'audio/mp4' :
                $ext = 'mp4';
                $type = 'audios';
                break;
            case 'audio/x-ms-wma' :
                $ext = 'wma';
                $type = 'audios';
                break;
            default :
                return error(-1, '提取资源失败, 资源文件类型错误.');
                break;
        }
        if (empty($path)) {
            $path = $type . "/{$_W['uniacid']}/" . date('Y/m/');
        } else {
            $path = parse_path($path);
        }
        if (!$path) {
            return error(-1, '提取文件失败: 上传路径配置有误.');
        }
        if (!file_exists(ATTACHMENT_ROOT . $path) && mkdirs(ATTACHMENT_ROOT . $path, 0700, true)) {
            return error(-1, '提取文件失败: 权限不足.');
        }
        /* 文件大小过滤 */
        if (!$limit) {
            if ($type == 'images') {
                $limit = $_W['setting']['upload']['image']['limit'] * 1024;
            } else {
                $limit = $_W['setting']['upload']['audio']['limit'] * 1024;
            }
        } else {
            $limit = $limit * 1024;
        }
        if (intval($resp['headers']['Content-Length']) > $limit) {
            return error(-1, '上传的媒体文件过大(' . sizecount($resp['headers']['Content-Length']) . ' > ' . sizecount($limit));
        }
        $filename = file_random_name(ATTACHMENT_ROOT . $path, $ext);
        $pathname = $path . $filename;
        $fullname = ATTACHMENT_ROOT . $pathname;
        if (file_put_contents($fullname, $resp['content']) == false) {
            return error(-1, '提取失败.');
        }
        return $pathname;
    }

    /** 判断url是否是图片
     * @param $url
     *
     * @return bool
     */
    public function file_is_image($url)
    {
        if (!$this->parse_path($url)) {
            return false;
        }
        $pathinfo = pathinfo($url);
        $extension = strtolower($pathinfo['extension']);
        return !empty($extension) && in_array($extension, array('jpg', 'jpeg', 'gif', 'png'));
    }

    /** 检查url是否有特殊符号
     * @param $path
     *
     * @return bool
     */
    public function parse_path($path) {
        $danger_char = array('../', '{php', '<?php', '<%', '<?', '..\\', '\\\\' ,'\\', '..\\\\', '%00', '\0', '\r');
        foreach ($danger_char as $char) {
            if (strexists($path, $char)) {
                return false;
            }
        }
        return $path;
    }

    /**判断目录文件大小
     * @param $dir
     *
     * @return int
     */
    public function dir_size($dir) {
        $size = 0;
        if(is_dir($dir)) {
            $handle = opendir($dir);
            while (false !== ($entry = readdir($handle))) {
                if($entry != '.' && $entry != '..') {
                    if(is_dir("{$dir}/{$entry}")) {
                        $size += dir_size("{$dir}/{$entry}");
                    } else {
                        $size += filesize("{$dir}/{$entry}");
                    }
                }
            }
            closedir($handle);
        }
        return $size;
    }


}