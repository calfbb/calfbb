<?php

/* data/newdata.html */
class __TwigTemplate_ecf4684ac46983e54c7a15115d67e2a06ff0766ac1f56665aaf4664eb79bf179 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>开始使用Layui</title>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\">
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/main.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery.gridster.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/style.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery-ui.css\">-->
    <script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
    <!--<script src=\"./resource/screen/js/jquery-ui.min.js\"></script>-->

</head>
<body >


<ul class=\"layui-nav layui-bg-black main_header_nav\" >
    <!--<button class=\"layui-btn layui-btn-small layui-btn\"><i class=\"layui-icon\"></i></button>-->
    <li class=\"layui-nav-item\"><a href=\"\">隐藏</a></li>

    <li class=\"layui-nav-item\"><a id=\"showLeftNav\" href=\"javascipt:viod(0)\">扩展</a></li>
    <li class=\"layui-nav-item layui-this\">
        <a href=\"\">图片</a>
        <dl class=\"layui-nav-child main-nav-images layui-row\">
            <dd class=\"layui-row\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
            </dd>
            <dd class=\"layui-row\">
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
            </dd>
            <dd class=\"layui-row\">
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
            </dd>
            <dd class=\"layui-row\">
                <!--<div class=\"\" id=\"demo0\"></div>-->

            </dd>




        </dl>
    </li>
    <li class=\"layui-nav-item \"><a href=\"\">基础设置</a></li>
    <li class=\"layui-nav-item \"><a href=\"\">基础</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">组件</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">保存</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">预览</a></li>

</ul>
<div class=\"layui-side layui-bg-black\" style=\"margin-top:60px;display: block;float: left;\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">mysql</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=index\">柱状图</a></dd>
                    <dd><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=newData\" target=\"blank\">线性图</a></dd>
                    <!--<dd><a href=\"javascript:;\">列表三</a></dd>-->
                    <!--<dd><a href=\"\">超链接</a></dd>-->
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">解决方案</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"javascript:;\">列表一</a></dd>
                    <dd><a href=\"javascript:;\">列表二</a></dd>
                    <dd><a href=\"\">超链接</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\"><a href=\"\">云市场</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">发布商品</a></li>
        </ul>
    </div>
</div>


<script src=\"./resource/layui/layui.js\"></script>

<script src=\"./resource/screen/js/main.js\"></script>

<script>
    \$(function(){



        /*左侧导航 显示隐藏*/
        var LeftNav=true;
        \$('#showLeftNav').click(function(){
            if(LeftNav){
                \$('.layui-side').show(500);
                LeftNav=false;
            }else{
                \$('.layui-side').hide(500);
                LeftNav=true;
            }
        })



        /**拉大缩小*/
        \$( \".draggable3\" ).resizable({
            alsoResize: \"#also\"
        });


        /**拖动*/
        \$( \".draggable3\" ).draggable({cursor: \"move\", containment: \".mian\", scroll: false });

    });

</script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>

</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "data/newdata.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 79,  98 => 78,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>开始使用Layui</title>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\">
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/main.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery.gridster.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/style.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery-ui.css\">-->
    <script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
    <!--<script src=\"./resource/screen/js/jquery-ui.min.js\"></script>-->

</head>
<body >


<ul class=\"layui-nav layui-bg-black main_header_nav\" >
    <!--<button class=\"layui-btn layui-btn-small layui-btn\"><i class=\"layui-icon\"></i></button>-->
    <li class=\"layui-nav-item\"><a href=\"\">隐藏</a></li>

    <li class=\"layui-nav-item\"><a id=\"showLeftNav\" href=\"javascipt:viod(0)\">扩展</a></li>
    <li class=\"layui-nav-item layui-this\">
        <a href=\"\">图片</a>
        <dl class=\"layui-nav-child main-nav-images layui-row\">
            <dd class=\"layui-row\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
            </dd>
            <dd class=\"layui-row\">
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
            </dd>
            <dd class=\"layui-row\">
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
                <div>
                    <img  class=\"layui-col-md4\" src=\"http://cdn.layoutit.com/img/ico128.png\" alt=\"\">
                </div>
            </dd>
            <dd class=\"layui-row\">
                <!--<div class=\"\" id=\"demo0\"></div>-->

            </dd>




        </dl>
    </li>
    <li class=\"layui-nav-item \"><a href=\"\">基础设置</a></li>
    <li class=\"layui-nav-item \"><a href=\"\">基础</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">组件</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">保存</a></li>
    <li class=\"layui-nav-item\"><a href=\"\">预览</a></li>

</ul>
<div class=\"layui-side layui-bg-black\" style=\"margin-top:60px;display: block;float: left;\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">mysql</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=index\">柱状图</a></dd>
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=newData\" target=\"blank\">线性图</a></dd>
                    <!--<dd><a href=\"javascript:;\">列表三</a></dd>-->
                    <!--<dd><a href=\"\">超链接</a></dd>-->
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">解决方案</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"javascript:;\">列表一</a></dd>
                    <dd><a href=\"javascript:;\">列表二</a></dd>
                    <dd><a href=\"\">超链接</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\"><a href=\"\">云市场</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">发布商品</a></li>
        </ul>
    </div>
</div>


<script src=\"./resource/layui/layui.js\"></script>

<script src=\"./resource/screen/js/main.js\"></script>

<script>
    \$(function(){



        /*左侧导航 显示隐藏*/
        var LeftNav=true;
        \$('#showLeftNav').click(function(){
            if(LeftNav){
                \$('.layui-side').show(500);
                LeftNav=false;
            }else{
                \$('.layui-side').hide(500);
                LeftNav=true;
            }
        })



        /**拉大缩小*/
        \$( \".draggable3\" ).resizable({
            alsoResize: \"#also\"
        });


        /**拖动*/
        \$( \".draggable3\" ).draggable({cursor: \"move\", containment: \".mian\", scroll: false });

    });

</script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>

</body>
</html>


", "data/newdata.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\data\\newdata.html");
    }
}
