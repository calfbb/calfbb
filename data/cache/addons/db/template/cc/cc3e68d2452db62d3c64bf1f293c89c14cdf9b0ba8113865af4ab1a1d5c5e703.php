<?php

/* common/header.html */
class __TwigTemplate_93ab15f30e40eb851b97b4f352d09f015e92e8c74e1b21d9ba66a61c865525a1 extends Twig_Template
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
    <script src=\"./resource/chart/js/jquery.min.js\"></script>
    <script src=\"./resource/chart/js/echarts.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "common/header.html";
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
        return new Twig_Source("
    <script src=\"./resource/chart/js/jquery.min.js\"></script>
    <script src=\"./resource/chart/js/echarts.js\"></script>

", "common/header.html", "C:\\wamp\\www\\lnmpbao\\addons\\db\\template\\common\\header.html");
    }
}
