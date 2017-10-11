<?php

/* common/message.html */
class __TwigTemplate_e7732e25b8ee99dc27e46454dc4e4c767aede166fc5510c187e426c2eab4098d extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>message</title>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />


    <link rel=\"stylesheet\" href=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/css/matrix-media.css\" />
    <link href=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/css/css/font-awesome.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"http://demo.zhoupengyu.cn/cms/include/js/layui/css/layui.css\" />
</head>
<body>
<script src=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/js/jquery.min.js\"></script>
<script language=\"Javascript\">
    var second=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "\";
    if(second<1)
        second = 0;

    function f1start()
    {

        if(second==0)
        {
            var use_script = 0;

            if(use_script==1)
            {
            }else{

                if(\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"==\"\"){
                    history.go(-3);
                }else{
                    window.location.href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\";

                }
            }

        }else if(second<0)
        {

            window.location.href=\"/index.php\";
        }else{

            document.getElementById(\"timer\").innerHTML=second--;
            setTimeout('f1start()',1000);
        }


    }


    setTimeout('f1start()',1000);




</script>

<div class=\"row-fluid\" style=\"width:50%; margin:150px auto;\">
    <blockquote class=\"layui-elem-quote\"><i class=\"layui-icon\" style=\"font-size: 30px; color:#00BCD4 \">&#xe611;</i> <span style='margin-left:10px;font-size:25px'>温馨提示</span><br><br>

        <div align=\"center\"> <h4>";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</h4>
            <p><span id=\"timer\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "</span>秒后自动跳转，如没有跳转功能请点</p>

            <a id=\"href\"  __href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" style='margin-top: 10px; margin-bottom: 5px;' class=\"layui-btn  layui-btn-radius\" >直接跳转</a>
        </div>
    </blockquote>

</div>

<script>
    \$('#href').click(function(){
        var url=\$(this).attr(\"__href\");
        if(url==\"\"){
            history.go(-3);
        }else{
            window.location.href=url;
        }
    })

</script>
<!--end-Footer-part-->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "common/message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 67,  97 => 65,  93 => 64,  61 => 35,  55 => 32,  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>message</title>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />


    <link rel=\"stylesheet\" href=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/css/matrix-media.css\" />
    <link href=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/css/css/font-awesome.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"http://demo.zhoupengyu.cn/cms/include/js/layui/css/layui.css\" />
</head>
<body>
<script src=\"http://demo.zhoupengyu.cn/cms/application/template/default/zh-cn//admin/js/jquery.min.js\"></script>
<script language=\"Javascript\">
    var second=\"{{time}}\";
    if(second<1)
        second = 0;

    function f1start()
    {

        if(second==0)
        {
            var use_script = 0;

            if(use_script==1)
            {
            }else{

                if(\"{{url}}\"==\"\"){
                    history.go(-3);
                }else{
                    window.location.href=\"{{url}}\";

                }
            }

        }else if(second<0)
        {

            window.location.href=\"/index.php\";
        }else{

            document.getElementById(\"timer\").innerHTML=second--;
            setTimeout('f1start()',1000);
        }


    }


    setTimeout('f1start()',1000);




</script>

<div class=\"row-fluid\" style=\"width:50%; margin:150px auto;\">
    <blockquote class=\"layui-elem-quote\"><i class=\"layui-icon\" style=\"font-size: 30px; color:#00BCD4 \">&#xe611;</i> <span style='margin-left:10px;font-size:25px'>温馨提示</span><br><br>

        <div align=\"center\"> <h4>{{message}}</h4>
            <p><span id=\"timer\">{{time}}</span>秒后自动跳转，如没有跳转功能请点</p>

            <a id=\"href\"  __href=\"{{url}}\" style='margin-top: 10px; margin-bottom: 5px;' class=\"layui-btn  layui-btn-radius\" >直接跳转</a>
        </div>
    </blockquote>

</div>

<script>
    \$('#href').click(function(){
        var url=\$(this).attr(\"__href\");
        if(url==\"\"){
            history.go(-3);
        }else{
            window.location.href=url;
        }
    })

</script>
<!--end-Footer-part-->

</body>
</html>
", "common/message.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\message.html");
    }
}
