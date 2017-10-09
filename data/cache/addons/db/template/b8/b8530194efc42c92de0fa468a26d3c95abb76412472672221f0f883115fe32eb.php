<?php

/* common/nav.html */
class __TwigTemplate_e0e01a09a3eaaac4cd3d4c725e29f8ec2ea870ff79018c17f97e9473753d101e extends Twig_Template
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
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=db&c=index&a=index\"> <li  ";
        if ((($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "c", array(), "array") == "index") && ($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "a", array(), "array") == "index"))) {
            echo " class=\"layui-this\" ";
        }
        echo ">图表列表</li></a>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=db&c=columnar&a=index\"> <li  ";
        if ((($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "c", array(), "array") == "columnar") && ($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "a", array(), "array") == "index"))) {
            echo " class=\"layui-this\" ";
        }
        echo ">柱状图</li></a>


        <li>统计图</li>


        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=db&c=index&a=setting\"><li ";
        if ((($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "c", array(), "array") == "index") && ($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "a", array(), "array") == "setting"))) {
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
        return array (  44 => 10,  31 => 4,  23 => 3,  19 => 1,);
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
        <a href=\"{{ _G['APP_URL'] }}?m=db&c=index&a=index\"> <li  {% if  _GPC['c']=='index' and _GPC['a']=='index' %} class=\"layui-this\" {% endif %}>图表列表</li></a>
        <a href=\"{{ _G['APP_URL'] }}?m=db&c=columnar&a=index\"> <li  {% if _GPC['c']=='columnar' and _GPC['a']=='index' %} class=\"layui-this\" {% endif %}>柱状图</li></a>


        <li>统计图</li>


        <a href=\"{{ _G['APP_URL'] }}?m=db&c=index&a=setting\"><li {% if   _GPC['c']=='index' and _GPC['a']=='setting' %} class=\"layui-this\" {% endif %}>配置</li></a>
    </ul>
    <div class=\"layui-tab-content\"></div>
</div>
", "common/nav.html", "C:\\wamp\\www\\lnmpbao\\addons\\db\\template\\common\\nav.html");
    }
}
