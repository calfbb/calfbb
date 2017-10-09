<?php

/* addons/index.html */
class __TwigTemplate_c52e90aec1a84da95d900a3083e1842dd2a2e8c8ff5fc8dbe2f3bbf1a8ee1678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        echo twig_include($this->env, $context, "common/headerLayui.html");
        echo "



";
        // line 7
        echo twig_include($this->env, $context, "common/nav.html");
        echo "


<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">


            <li class=\"layui-nav-item\"><a href=\"\">数据库运维&(1)</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">电商运营</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">服务器监控</a></li>


        </ul>
    </div>
</div>
";
        // line 24
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
<div class=\"layui-body\">


    <!-- 内容主体区域 -->

    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "    <!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    <style>
        /*css*/
        .left{margin-left:1rem;}
        .border{border:0px solid #FF5722;margin-top:1rem;}
        .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
        .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
        .dataListTwo{display:block;text-align:center;;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
        .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
        .dataListTwo img{width:100%;height:70%;}
        .dataListTwo p{font-size:2rem;}
    </style>

    <blockquote class=\"layui-elem-quote\">所有应用 | 当前分类应用10个</blockquote>

    <div class=\"layui-row layui-col-space10 left \">
        <div class=\"layui-col-md3 border\">
            <a class=\"dataListTwo\" href=\"./index.php?m=db&c=index&a=index\" target=\"blank\" >

                <img class=\"img\"  src=\"./resource/layui/images/wKgNdlQMdKSAU2ZUAAFWVGyTT5Y270.jpg\" alt=\"\">
                <p>mysql</p>
            </a>
        </div>

    </div>
    <div class=\"layui-row layui-col-space10 left \">
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "addons/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  74 => 30,  62 => 83,  60 => 30,  51 => 24,  31 => 7,  24 => 3,  20 => 1,);
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

{{ include(\"common/headerLayui.html\")}}



{{ include(\"common/nav.html\")}}


<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">


            <li class=\"layui-nav-item\"><a href=\"\">数据库运维&(1)</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">电商运营</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">服务器监控</a></li>


        </ul>
    </div>
</div>
{{ include(\"common/footer.html\")}}
<div class=\"layui-body\">


    <!-- 内容主体区域 -->

    {% block body %}
    <style>
        /*css*/
        .left{margin-left:1rem;}
        .border{border:0px solid #FF5722;margin-top:1rem;}
        .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
        .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
        .dataListTwo{display:block;text-align:center;;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
        .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
        .dataListTwo img{width:100%;height:70%;}
        .dataListTwo p{font-size:2rem;}
    </style>

    <blockquote class=\"layui-elem-quote\">所有应用 | 当前分类应用10个</blockquote>

    <div class=\"layui-row layui-col-space10 left \">
        <div class=\"layui-col-md3 border\">
            <a class=\"dataListTwo\" href=\"./index.php?m=db&c=index&a=index\" target=\"blank\" >

                <img class=\"img\"  src=\"./resource/layui/images/wKgNdlQMdKSAU2ZUAAFWVGyTT5Y270.jpg\" alt=\"\">
                <p>mysql</p>
            </a>
        </div>

    </div>
    <div class=\"layui-row layui-col-space10 left \">
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
        <div class=\"layui-col-md3 border\">
            <div class=\"datalist\" align=\"center\">

                <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
            </div>
        </div>
    </div>

    {% endblock %}
    <!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>
", "addons/index.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\addons\\index.html");
    }
}
