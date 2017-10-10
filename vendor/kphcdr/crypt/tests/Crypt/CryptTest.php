<?php

class CryptTest extends \PHPUnit_Framework_TestCase
{
    public function testString()
    {
        $string = md5(time());
        $encode = \Crypt\Crypt::encrypt($string);
        $decode = \Crypt\Crypt::decrypt($encode);
        $this->assertTrue($string === $decode);
    }

    public function testNumber()
    {
        $int = mt_rand(0, 9999999999);
        $encode = \Crypt\Crypt::encrypt($int);
        $decode = \Crypt\Crypt::decrypt($encode);
        $this->assertTrue($int === (integer)$decode);
    }

    public function testChar()
    {
        $string = $this->getRndWords(mt_rand(1, 18));
        $encode = \Crypt\Crypt::encrypt($string);
        $decode = \Crypt\Crypt::decrypt($encode);
        $this->assertTrue($string === $decode);
    }

    private function getRndWords($giveStr = "", $num = 18)
    {
        $str = "主要产品是听见啦金玉良缘冰清玉洁继往开来锦绣山河冰雪聪明功成名就桃花潭水深千尺不及汪伦送我情先帝创业未半而中道今天下三分益州疲弊此诚危急存亡之秋也然侍卫之臣不懈于内忠志之士忘身于外者盖追先帝之殊遇欲报之于陛下也诚宜开张圣听";# 字库
        $newStr = "";       # 随机生成的包含答案的字符串
        $anLo = array();  # 设定的答案所在的位置。
        $bit = 3;        # 位数，在本系统中是utf-8编码，一个中文长度为3
        $anLenth = floor(strlen($giveStr) / $bit); # 答案长度,在UTF编码中，
        # 这些汉字在18个汉字中的位置
        $i = 0;
        while ($i < $anLenth) {
            $rd = rand(0, $num - 1);
            if (in_array($rd, $anLo)) continue; # 保证了不重复。
            $anLo[] = $rd;
            $i++;
        }
        for ($j = 0; $j < $num; $j++) {
            if (in_array($j, $anLo)) {
                $k = array_search($j, $anLo);
                $newStr .= mb_substr($giveStr, $k * $bit, $bit); #echo $newStr."<br>";
            } else {
                $rd = rand(0, (strlen($str) - 1) / $bit);
                $wd = mb_substr($str, $rd * $bit, $bit);
                $str = str_replace($wd, '', $str);
                $newStr .= $wd;
            }
        }
        return $newStr;
    }
}
