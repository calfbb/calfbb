<?php

/* niubaobao/headerLayui.html */
class __TwigTemplate_665bb29265b01751534babfc7d3fa54af24aa0c86f15a681806b5957b2e83687 extends Twig_Template
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
</head>
<body>

<!-- 你的HTML代码 -->

";
    }

    public function getTemplateName()
    {
        return "niubaobao/headerLayui.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
</head>
<body>

<!-- 你的HTML代码 -->

", "niubaobao/headerLayui.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\headerLayui.html");
    }
}
