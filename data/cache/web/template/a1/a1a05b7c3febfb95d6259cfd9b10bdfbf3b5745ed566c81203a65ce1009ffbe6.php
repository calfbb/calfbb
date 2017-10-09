<?php

/* common/leftNav.html */
class __TwigTemplate_ffcdae5a905f6ad3ff7d976f0ee7925fbf20a6e2cdd1f9c43fe66b0c84c5e90b extends Twig_Template
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
        echo "<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">屏幕管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=index\">屏幕列表</a></dd>
                    <dd><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=screen\" target= _blank>新建屏幕</a></dd>
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

<div class=\"layui-body\">";
    }

    public function getTemplateName()
    {
        return "common/leftNav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">屏幕管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=index\">屏幕列表</a></dd>
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=screen\" target= _blank>新建屏幕</a></dd>
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

<div class=\"layui-body\">", "common/leftNav.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\leftNav.html");
    }
}
