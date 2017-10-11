<?php

/* common/footer.html */
class __TwigTemplate_9f86545c17c78a9d622b870acd8049b7c3cc48aea046946d68a021c79638fdf7 extends Twig_Template
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
<!--<div class=\"layui-footer\" style=\"position: absolute;bottom: 0;margin: 0 auto;border:1px solid red;width:20%;\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->

<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>";
    }

    public function getTemplateName()
    {
        return "common/footer.html";
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
<!--<div class=\"layui-footer\" style=\"position: absolute;bottom: 0;margin: 0 auto;border:1px solid red;width:20%;\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->

<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>", "common/footer.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\common\\footer.html");
    }
}
