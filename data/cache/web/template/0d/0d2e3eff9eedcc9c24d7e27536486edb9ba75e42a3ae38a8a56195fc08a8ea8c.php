<?php

/* user/register.html */
class __TwigTemplate_cc492c808ad46fc31bc30ebb749935aa1b2ae4bcdc92146fe0146a1c32222951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"zh-CN\"><head>
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"robots\" content=\"index,follow\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\">
    <meta name=\"renderer\" content=\"ie-stand\">
    <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\">
    <title>京东云</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://uc.jcloud.com/assets/css/login.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://uc.jcloud.com/assets/css/style.css\">

    <script type=\"text/javascript\" async=\"\" src=\"https://wlssl.jd.com/joya.js\"></script>
    <script async=\"\" src=\"https://www.google-analytics.com/analytics.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery-1.8.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery.form.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery.validate.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/additional-method.js\"></script>
    <script src=\"./resource/layui/layui.js\"></script>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\" >
    <link rel=\"stylesheet\" href=\"https://passport.jd.com/new/misc/skin/df/commonLogin.css\" >


    <style>
        #entry .btn-entry{width:100%;height:36px;margin-bottom:10px;font-family:\"微软雅黑\";line-height:36px;color:white; font-size:medium;font-weight: bold; background:#55bcf9; overflow:hidden;}
        *{font-family:\"微软雅黑\";}
    </style>
</head>

<body>
<!-- S header -->
<header class=\"login-h\">
    <div class=\"s-area\">
        <a href=\"//www.jcloud.com\" class=\"jcd-logo\"><img src=\"https://uc.jcloud.com/assets/images/jcd_logo.png\" alt=\"\"></a>
        <span>注册</span>
    </div>
</header>
<!-- E header -->

<!-- S 登录欢迎页 content-->
<div class=\"login-content\">
    <div class=\"s-area\">
        <div class=\"login-form\">
            <h3>账户注册</h3>
            <div class=\"login-wrap\">
                <div class=\"layui-form\">
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">用户名</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"username\" required  lay-verify=\"required\" placeholder=\"请输入用户名\" autocomplete=\"off\" class=\"layui-input \">
                        </div>
                    </div>
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">密码</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">重复密码</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"password\" name=\"repassword\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-form-item\">
                        <div class=\"layui-input-block\">
                            <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">注册</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"login-type\">
                <ul class=\"cl\">
                    <li class=\"fr link-reg\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=user&a=login\"><i></i><span>立即登陆</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- E 登录欢迎页 content-->

<!-- S footer-->
<div class=\"s-area\">
    <div id=\"footer\">
        <div class=\"links\">

        </div>
        <div class=\"copyright c5d5e66 mt0\">
            Copyright&nbsp;©&nbsp;2012-2017&nbsp;&nbsp;Jcloud.com&nbsp;&nbsp;版权所有&nbsp;&nbsp;京ICP备11041704号-6&nbsp;&nbsp;京ICP证070359号
        </div>
    </div>





</div>
<script>
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){



            if(data.field.password !=data.field.repassword){
             //   layer.msg('两次密码输入不一致');
                layer.alert('两次密码输入不一致', {
                    skin: 'layui-layer-molv'
                    ,closeBtn: 0
                    ,anim: 4 //动画类型
                });
                return false;
            }

            \$.ajax({
                //脚本地址
                url:\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=user&a=confirm\",
                type:'get',
                data:{nickname:data.field.username,password:data.field.password},
                dataType:'json',
                success:function(data){

                    if(data.code==8001){
                        layer.alert('注册成功,点击进入控制台', {
                            skin: 'layui-layer-molv' //样式类名
                            ,closeBtn: 0
                        }, function(){
                            location.href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=project\"
                        });
                    }else{
                        layer.alert(data.msg, {
                            skin: 'layui-layer-molv'
                            ,closeBtn: 0
                            ,anim: 4 //动画类型
                        });
                    }
                }
            })



            return false;
        });
        //各种基于事件的操作，下面会有进一步介绍
    });


</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "user/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 131,  143 => 120,  96 => 76,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"zh-CN\"><head>
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"robots\" content=\"index,follow\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\">
    <meta name=\"renderer\" content=\"ie-stand\">
    <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\">
    <title>京东云</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://uc.jcloud.com/assets/css/login.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://uc.jcloud.com/assets/css/style.css\">

    <script type=\"text/javascript\" async=\"\" src=\"https://wlssl.jd.com/joya.js\"></script>
    <script async=\"\" src=\"https://www.google-analytics.com/analytics.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery-1.8.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery.form.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/jquery.validate.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://uc.jcloud.com/assets/js/additional-method.js\"></script>
    <script src=\"./resource/layui/layui.js\"></script>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\" >
    <link rel=\"stylesheet\" href=\"https://passport.jd.com/new/misc/skin/df/commonLogin.css\" >


    <style>
        #entry .btn-entry{width:100%;height:36px;margin-bottom:10px;font-family:\"微软雅黑\";line-height:36px;color:white; font-size:medium;font-weight: bold; background:#55bcf9; overflow:hidden;}
        *{font-family:\"微软雅黑\";}
    </style>
</head>

<body>
<!-- S header -->
<header class=\"login-h\">
    <div class=\"s-area\">
        <a href=\"//www.jcloud.com\" class=\"jcd-logo\"><img src=\"https://uc.jcloud.com/assets/images/jcd_logo.png\" alt=\"\"></a>
        <span>注册</span>
    </div>
</header>
<!-- E header -->

<!-- S 登录欢迎页 content-->
<div class=\"login-content\">
    <div class=\"s-area\">
        <div class=\"login-form\">
            <h3>账户注册</h3>
            <div class=\"login-wrap\">
                <div class=\"layui-form\">
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">用户名</label>
                        <div class=\"layui-input-block\">
                            <input type=\"text\" name=\"username\" required  lay-verify=\"required\" placeholder=\"请输入用户名\" autocomplete=\"off\" class=\"layui-input \">
                        </div>
                    </div>
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">密码</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>
                    <div class=\"layui-form-item\">
                        <label class=\"layui-form-label\">重复密码</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"password\" name=\"repassword\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                    </div>

                    <div class=\"layui-form-item\">
                        <div class=\"layui-input-block\">
                            <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">注册</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"login-type\">
                <ul class=\"cl\">
                    <li class=\"fr link-reg\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=user&a=login\"><i></i><span>立即登陆</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- E 登录欢迎页 content-->

<!-- S footer-->
<div class=\"s-area\">
    <div id=\"footer\">
        <div class=\"links\">

        </div>
        <div class=\"copyright c5d5e66 mt0\">
            Copyright&nbsp;©&nbsp;2012-2017&nbsp;&nbsp;Jcloud.com&nbsp;&nbsp;版权所有&nbsp;&nbsp;京ICP备11041704号-6&nbsp;&nbsp;京ICP证070359号
        </div>
    </div>





</div>
<script>
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){



            if(data.field.password !=data.field.repassword){
             //   layer.msg('两次密码输入不一致');
                layer.alert('两次密码输入不一致', {
                    skin: 'layui-layer-molv'
                    ,closeBtn: 0
                    ,anim: 4 //动画类型
                });
                return false;
            }

            \$.ajax({
                //脚本地址
                url:\"{{ _G['APP_URL'] }}?m=web&c=user&a=confirm\",
                type:'get',
                data:{nickname:data.field.username,password:data.field.password},
                dataType:'json',
                success:function(data){

                    if(data.code==8001){
                        layer.alert('注册成功,点击进入控制台', {
                            skin: 'layui-layer-molv' //样式类名
                            ,closeBtn: 0
                        }, function(){
                            location.href=\"{{ _G['APP_URL'] }}?m=web&c=project&a=project\"
                        });
                    }else{
                        layer.alert(data.msg, {
                            skin: 'layui-layer-molv'
                            ,closeBtn: 0
                            ,anim: 4 //动画类型
                        });
                    }
                }
            })



            return false;
        });
        //各种基于事件的操作，下面会有进一步介绍
    });


</script>
</body>
</html>", "user/register.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\user\\register.html");
    }
}
