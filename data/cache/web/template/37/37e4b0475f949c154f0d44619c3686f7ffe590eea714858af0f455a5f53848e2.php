<?php

/* index/project.html */
class __TwigTemplate_f5846c528e5ec7a9d033e941d7d7941b52bd6a568e67493cce61d8b79fe8aed3 extends Twig_Template
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


";
        // line 8
        echo twig_include($this->env, $context, "common/leftNav.html");
        echo "


<!-- 内容主体区域 -->


";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>

";
        // line 26
        echo twig_include($this->env, $context, "common/footer.html");
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "123
";
    }

    public function getTemplateName()
    {
        return "index/project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  55 => 26,  44 => 17,  42 => 14,  33 => 8,  27 => 5,  20 => 1,);
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


{{ include(\"common/leftNav.html\")}}


<!-- 内容主体区域 -->


{% block body %}
123
{% endblock %}
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
</div>

<div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 技术支持 - 牛宝宝团队
</div>
</div>

{{ include(\"common/footer.html\")}}", "index/project.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\index\\project.html");
    }
}
