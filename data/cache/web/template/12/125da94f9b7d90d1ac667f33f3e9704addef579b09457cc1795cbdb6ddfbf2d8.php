<?php

/* common/footerScreen.html */
class __TwigTemplate_0beeb1ec7cb19806f87f8e5a9c3a43329dd5dd5fca47949247d6277cac5b470e extends Twig_Template
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
        echo "</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "common/footerScreen.html";
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
        return new Twig_Source("</body>
</html>

", "common/footerScreen.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\footerScreen.html");
    }
}
