<?php

/* niubaobao/nav.html */
class __TwigTemplate_17ed50fd25d87ec7136cc5a480a5e659fbce99becb3731dfca56f24883598f77 extends Twig_Template
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
        echo "<div class=\"layui-layout layui-layout-admin\">
    <div class=\"layui-header\">
        <div class=\"layui-logo\">牛宝宝 后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class=\"layui-nav layui-layout-left\">
            <li class=\"layui-nav-item\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=index&a=index\">控制台</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">模板</a></li>
            <!--<li class=\"layui-nav-item\"><a href=\"\">扩展</a></li>-->
            <li class=\"layui-nav-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=addons&a=index\">应用</a></li>
            <li class=\"layui-nav-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=index\">设置</a></li>

        </ul>
        <ul class=\"layui-nav layui-layout-right\">
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">帮助</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=project\">切换项目</a></dd>
                    <dd><a href=\"\">消息管理</a></dd>
                    <dd><a href=\"\">授权管理</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">
                    <img src=\"http://t.cn/RCzsdCq\" class=\"layui-nav-img\">
                    贤心
                </a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"\">基本资料</a></dd>
                    <dd><a href=\"\">安全设置</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=user&a=signOut\">退出</a></li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "niubaobao/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 32,  46 => 17,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"layui-layout layui-layout-admin\">
    <div class=\"layui-header\">
        <div class=\"layui-logo\">牛宝宝 后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class=\"layui-nav layui-layout-left\">
            <li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=index&a=index\">控制台</a></li>
            <li class=\"layui-nav-item\"><a href=\"\">模板</a></li>
            <!--<li class=\"layui-nav-item\"><a href=\"\">扩展</a></li>-->
            <li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=addons&a=index\">应用</a></li>
            <li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=index\">设置</a></li>

        </ul>
        <ul class=\"layui-nav layui-layout-right\">
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">帮助</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=project&a=project\">切换项目</a></dd>
                    <dd><a href=\"\">消息管理</a></dd>
                    <dd><a href=\"\">授权管理</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">
                    <img src=\"http://t.cn/RCzsdCq\" class=\"layui-nav-img\">
                    贤心
                </a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"\">基本资料</a></dd>
                    <dd><a href=\"\">安全设置</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\"><a href=\"{{_G['APP_URL']}}?m=web&c=user&a=signOut\">退出</a></li>
        </ul>
    </div>", "niubaobao/nav.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\nav.html");
    }
}
