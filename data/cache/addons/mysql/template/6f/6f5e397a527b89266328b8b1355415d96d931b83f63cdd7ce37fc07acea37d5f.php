<?php

/* common/nav.html */
class __TwigTemplate_5ebb5fda90a6c3898916c41bbf4fe4bbd48fb8379bb1cd766a498c2118d9e815 extends Twig_Template
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
        echo "<div class=\"layui-tab layui-tab-brief width\" lay-filter=\"docDemoTabBrief\">
    <ul class=\"layui-tab-title width\">
        <li  ";
        // line 3
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "a", array(), "array") == "index")) {
            echo " class=\"layui-this\" ";
        }
        echo ">已建图表列表</li>
        <li>柱状图</li>
        <li>统计图</li>
        <li>商品管理</li>
        <li>订单管理</li>
        <li>保存</li>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=mysql&c=index&a=setting\"><li ";
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "a", array(), "array") == "setting")) {
            echo " class=\"layui-this\" ";
        }
        echo ">配置</li></a>
    </ul>
    <div class=\"layui-tab-content\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"layui-tab layui-tab-brief width\" lay-filter=\"docDemoTabBrief\">
    <ul class=\"layui-tab-title width\">
        <li  {% if _GPC['a']=='index' %} class=\"layui-this\" {% endif %}>已建图表列表</li>
        <li>柱状图</li>
        <li>统计图</li>
        <li>商品管理</li>
        <li>订单管理</li>
        <li>保存</li>
        <a href=\"{{ _G['APP_URL'] }}?m=mysql&c=index&a=setting\"><li {% if _GPC['a']=='setting' %} class=\"layui-this\" {% endif %}>配置</li></a>
    </ul>
    <div class=\"layui-tab-content\"></div>
</div>
", "common/nav.html", "C:\\wamp\\www\\lnmpbao\\addons\\mysql\\template\\common\\nav.html");
    }
}
