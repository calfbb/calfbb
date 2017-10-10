<?php

/* data/index.html */
class __TwigTemplate_7722cfacde7e589da8b7d6628620d4ad43a886639855fecbe24a8d0ec7b03bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index/index.html", "data/index.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<style>
    /*css*/
    .left{margin-left:1rem;}
    .border{border:0px solid #FF5722;margin-top:1rem;}
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
</style>
<ul class=\"layui-tab left\">
    <li class=\"layui-this\">我的可视化数据 | 已经创建0个</li>


</ul>
<div class=\"layui-row layui-col-space10 left \">
    <div class=\"layui-col-md3 border\">
       <a class=\"datalist\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=data&a=newData\" target=\"blank\" >

           <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
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
        return "data/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"index/index.html\" %}

{% block body %}
<style>
    /*css*/
    .left{margin-left:1rem;}
    .border{border:0px solid #FF5722;margin-top:1rem;}
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
</style>
<ul class=\"layui-tab left\">
    <li class=\"layui-this\">我的可视化数据 | 已经创建0个</li>


</ul>
<div class=\"layui-row layui-col-space10 left \">
    <div class=\"layui-col-md3 border\">
       <a class=\"datalist\" href=\"{{ _G['APP_URL'] }}?m=web&c=data&a=newData\" target=\"blank\" >

           <img class=\"img\"  src=\"./resource/layui/images/newdata.png\" alt=\"\">
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
{% endblock %}", "data/index.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\data\\index.html");
    }
}
