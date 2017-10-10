<?php

/* niubaobao/footerLayui.html */
class __TwigTemplate_1b61a2a4c56a82b8bcab106403f45ce1d31364b0a31e35952249a6356ecc160c extends Twig_Template
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
        echo "<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
<script src=\"./resource/chart/js/jquery.min.js\"></script>
<script src=\"./resource/chart/js/chart.js\"></script>
<script>
    \$(document).ready(function(){

        var \$nav = \$(\"nav dl\");

        \$(\"article\").each(function(){
            var \$el = \$(this);
            var \$h1 = \$el.find(\"h1\");
            var sectionTitle = \$h1.html();
            var articleId = \$el.attr(\"id\");
            var \$dt = \$(\"<dt><a href=\\\"#\"+articleId +\"\\\">\"+sectionTitle+\"</a></dt>\");

            \$dt.find(\"a\").on(\"click\",function(e){
                e.preventDefault();
                \$('html,body').animate({scrollTop: \$h1.offset().top},400);
            });

            \$nav.append(\$dt);

            var \$subtitles = \$el.find(\"h2\");

            \$subtitles.each(function(){
                var \$h2 = \$(this);
                var title = \$h2.text();
                var newID = articleId + \"-\" +camelCase(title);
                \$h2.attr(\"id\",newID);
                var \$dd = \$(\"<dd><a href=\\\"#\" +newID + \"\\\">\" + title + \"</a></dd>\");

                \$dd.find(\"a\").on(\"click\",function(e){
                    e.preventDefault();
                    \$('html,body').animate({scrollTop: \$h2.offset().top},400);
                })
                \$nav.append(\$dd);

            });

            var \$articles = \$el.find(\"article\");

        });

        \$(\"canvas\").each(function(){
            var \$canvas = \$(this);
            var ctx = this.getContext(\"2d\");



            eval(\$(\"code[data-for='\" + \$canvas.attr(\"id\") + \"']\").text());


            var evalString = \"new Chart(ctx).\" + \$canvas.data(\"type\") + \"(data);\";

            eval(evalString);

        });


    });
</script>";
    }

    public function getTemplateName()
    {
        return "niubaobao/footerLayui.html";
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
        return new Twig_Source("<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
<script src=\"./resource/chart/js/jquery.min.js\"></script>
<script src=\"./resource/chart/js/chart.js\"></script>
<script>
    \$(document).ready(function(){

        var \$nav = \$(\"nav dl\");

        \$(\"article\").each(function(){
            var \$el = \$(this);
            var \$h1 = \$el.find(\"h1\");
            var sectionTitle = \$h1.html();
            var articleId = \$el.attr(\"id\");
            var \$dt = \$(\"<dt><a href=\\\"#\"+articleId +\"\\\">\"+sectionTitle+\"</a></dt>\");

            \$dt.find(\"a\").on(\"click\",function(e){
                e.preventDefault();
                \$('html,body').animate({scrollTop: \$h1.offset().top},400);
            });

            \$nav.append(\$dt);

            var \$subtitles = \$el.find(\"h2\");

            \$subtitles.each(function(){
                var \$h2 = \$(this);
                var title = \$h2.text();
                var newID = articleId + \"-\" +camelCase(title);
                \$h2.attr(\"id\",newID);
                var \$dd = \$(\"<dd><a href=\\\"#\" +newID + \"\\\">\" + title + \"</a></dd>\");

                \$dd.find(\"a\").on(\"click\",function(e){
                    e.preventDefault();
                    \$('html,body').animate({scrollTop: \$h2.offset().top},400);
                })
                \$nav.append(\$dd);

            });

            var \$articles = \$el.find(\"article\");

        });

        \$(\"canvas\").each(function(){
            var \$canvas = \$(this);
            var ctx = this.getContext(\"2d\");



            eval(\$(\"code[data-for='\" + \$canvas.attr(\"id\") + \"']\").text());


            var evalString = \"new Chart(ctx).\" + \$canvas.data(\"type\") + \"(data);\";

            eval(evalString);

        });


    });
</script>", "niubaobao/footerLayui.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\footerLayui.html");
    }
}
