<?php

/* user/newproject.html */
class __TwigTemplate_875425e7d387fffa3887a71e9f9a57017a3fc6a8101a417194ff277b2ee1bdbe extends Twig_Template
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





<!-- 内容主体区域 -->


";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->

<!--<div class=\"layui-footer\">-->
<!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
<!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--</div>-->

";
        // line 48
        echo twig_include($this->env, $context, "common/footer.html");
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
<style>
    /*css*/
    .left{width:90%;margin:0 auto;}
    .border{border:0px solid #FF5722;margin-top:1rem;float: left;margin-left:23px; }
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo{background-color:#F8F8F8;display:block;text-align:center;;border:1px solid  #d2d2d2;width:200px;height:230px;margin: 0 auto;}
    .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo img{width:100%;height:70%;}
    .dataListTwo p{font-size:1.5rem;}
    .site-demo-button{padding-bottom: 150px;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"/doc/modules/form.html#render\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:98%;margin:0 auto;\">
    <legend>选择项目</legend>
   123

</fieldset>

";
    }

    public function getTemplateName()
    {
        return "user/newproject.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  56 => 14,  52 => 48,  41 => 39,  39 => 14,  27 => 5,  20 => 1,);
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





<!-- 内容主体区域 -->


{% block body %}

<style>
    /*css*/
    .left{width:90%;margin:0 auto;}
    .border{border:0px solid #FF5722;margin-top:1rem;float: left;margin-left:23px; }
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo{background-color:#F8F8F8;display:block;text-align:center;;border:1px solid  #d2d2d2;width:200px;height:230px;margin: 0 auto;}
    .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo img{width:100%;height:70%;}
    .dataListTwo p{font-size:1.5rem;}
    .site-demo-button{padding-bottom: 150px;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"/doc/modules/form.html#render\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:98%;margin:0 auto;\">
    <legend>选择项目</legend>
   123

</fieldset>

{% endblock %}
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->

<!--<div class=\"layui-footer\">-->
<!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
<!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--</div>-->

{{ include(\"common/footer.html\")}}", "user/newproject.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\user\\newproject.html");
    }
}
