<?php

/* system/index.html */
class __TwigTemplate_f6bb74056c3ae1d1579a4c253182a526f2f85beb298e8f0378a28a1b8841db5c extends Twig_Template
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
        echo twig_include($this->env, $context, "common/headerLayui.html");
        echo "



";
        // line 5
        echo twig_include($this->env, $context, "common/nav.html");
        echo "


<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">用户管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=userList\">用户列表</a></dd>
                    <dd><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=screen\" target= _blank>新建用户</a></dd>

                </dl>
            </li>
            <!--<li class=\"layui-nav-item\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=userList\">用户列表</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=assemblesList\">套餐管理</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=appList\">应用管理</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=templetList\">模板管理</a></li>-->


            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">套餐管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=assemblesList\">套餐列表</a></dd>
                    <dd><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=addAssembles\">新建套餐</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">应用管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=appList\">已安装应用</a></dd>
                    <dd><a href=\"javascript:;\">未安装应用</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">模板管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=templetList\">已安装模板</a></dd>
                    <dd><a href=\"javascript:;\">未安装模板</a></dd>
                </dl>
            </li>
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\">系统管理</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"javascript:;\">账户管理</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">系统信息</a></dd>-->
                <!--</dl>-->
            <!--</li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"\">系统配置</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"\">账户管理</a></li>-->
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\">应用商城</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"javascript:;\">前往应用商城</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">应用购买记录</a></dd>-->
                <!--</dl>-->
            <!--</li>-->

        </ul>
    </div>
</div>
";
        // line 67
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
<div class=\"layui-body\">


<!-- 内容主体区域 -->

";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>

";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "

";
    }

    public function getTemplateName()
    {
        return "system/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 74,  146 => 73,  133 => 77,  131 => 73,  122 => 67,  95 => 43,  85 => 36,  76 => 30,  72 => 29,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  44 => 16,  40 => 15,  27 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"common/headerLayui.html\")}}



{{ include(\"common/nav.html\")}}


<div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
            <li class=\"layui-nav-item layui-nav-itemed\">
                <a class=\"\" href=\"javascript:;\">用户管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=userList\">用户列表</a></dd>
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=screen\" target= _blank>新建用户</a></dd>

                </dl>
            </li>
            <!--<li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=userList\">用户列表</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=assemblesList\">套餐管理</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=appList\">应用管理</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=templetList\">模板管理</a></li>-->


            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">套餐管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=assemblesList\">套餐列表</a></dd>
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=addAssembles\">新建套餐</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">应用管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=appList\">已安装应用</a></dd>
                    <dd><a href=\"javascript:;\">未安装应用</a></dd>
                </dl>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"javascript:;\">模板管理</a>
                <dl class=\"layui-nav-child\">
                    <dd><a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=templetList\">已安装模板</a></dd>
                    <dd><a href=\"javascript:;\">未安装模板</a></dd>
                </dl>
            </li>
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\">系统管理</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"javascript:;\">账户管理</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">系统信息</a></dd>-->
                <!--</dl>-->
            <!--</li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"\">系统配置</a></li>-->
            <!--<li class=\"layui-nav-item\"><a href=\"\">账户管理</a></li>-->
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\">应用商城</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"javascript:;\">前往应用商城</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">应用购买记录</a></dd>-->
                <!--</dl>-->
            <!--</li>-->

        </ul>
    </div>
</div>
{{ include(\"common/footer.html\")}}
<div class=\"layui-body\">


<!-- 内容主体区域 -->

{% block body %}


{% endblock %}
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>

", "system/index.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\index.html");
    }
}
