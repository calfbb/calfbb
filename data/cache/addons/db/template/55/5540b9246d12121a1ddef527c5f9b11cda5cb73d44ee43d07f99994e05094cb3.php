<?php

/* index/index.html */
class __TwigTemplate_efefa919eb278dc6098fe940e3ce9f21a6e57483ec64d12ccbe5c0b8da0bc616 extends Twig_Template
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
        echo twig_include($this->env, $context, "niubaobao/headerLayui.html");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "niubaobao/nav.html");
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "common/header.html");
        echo "

<style>
    .width{width:89%;}
</style>
<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">


";
        // line 11
        echo twig_include($this->env, $context, "common/nav.html");
        echo "

<div class=\"big-right-icon\" style=\"display: block;\">
    <div class=\"mt\" id=\"mt\">
          <span class=\"fl\">
            <i class=\"big-i4\"></i>
          </span>

    </div>
</div>
<div class=\"big-right\" style=\"display:block;\">
    <div class=\"scroll-wrap\">

        <div class=\"setting\" >
            <div class=\"mt\">
                <h3 class=\"tt\">
                    图表列表
                </h3>
            </div>

        </div>
    </div>
</div>
";
        // line 34
        echo twig_include($this->env, $context, "niubaobao/footerLayui.html");
        echo "
<script src=\"../addons/mysql/resource/js/app.js\"></script>";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  38 => 11,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('niubaobao/headerLayui.html') }}
{{ include(\"niubaobao/nav.html\")}}
{{ include(\"common/header.html\")}}

<style>
    .width{width:89%;}
</style>
<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">


{{ include(\"common/nav.html\")}}

<div class=\"big-right-icon\" style=\"display: block;\">
    <div class=\"mt\" id=\"mt\">
          <span class=\"fl\">
            <i class=\"big-i4\"></i>
          </span>

    </div>
</div>
<div class=\"big-right\" style=\"display:block;\">
    <div class=\"scroll-wrap\">

        <div class=\"setting\" >
            <div class=\"mt\">
                <h3 class=\"tt\">
                    图表列表
                </h3>
            </div>

        </div>
    </div>
</div>
{{ include('niubaobao/footerLayui.html') }}
<script src=\"../addons/mysql/resource/js/app.js\"></script>", "index/index.html", "/data/test/calfbb/addons/db/template/index/index.html");
    }
}
