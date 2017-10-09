<?php

/* index/setting.html */
class __TwigTemplate_cf0f9b45ad55d4c51eb45d8031459b360a7b8c273b429139e5f0da32721e2cf4 extends Twig_Template
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

<link rel=\"stylesheet\" href=\"../addons/mysql/resource/css/mysql.css\">


";
        // line 7
        echo twig_include($this->env, $context, "common/nav.html");
        echo "
<style>
    .setting{width:60%; margin:0 auto;}
</style>
<!-- 示例-970 -->
<div class=\"setting\">
    <fieldset class=\"layui-elem-field layui-field-title\" >
        <legend>mysql数据库配置</legend>
    </fieldset>
    <form class=\"layui-form layui-form-pane \" action=\"\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库地址</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"title\" autocomplete=\"off\" value=\"127.0.0.1\" placeholder=\"数据库地址\" class=\"layui-input\">
            </div>
            <div class=\"layui-form-mid layui-word-aux\">请务必确认防火墙是否阻止此ip地址链接数据库";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : null), "html", null, true);
        echo "</div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_name\" value=\"root\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>


        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">密码</label>
            <div class=\"layui-input-inline\">
                <input type=\"password\" name=\"db_password\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
            </div>

        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">端口号</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_prot\" value=\"3306\" lay-verify=\"required\" placeholder=\"请输入端口号\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>




        <div class=\"layui-form-item\">
            <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo2\">提交</button>
        </div>
    </form>

</div>
";
        // line 56
        echo twig_include($this->env, $context, "niubaobao/footerLayui.html");
        echo "
<script>
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>";
    }

    public function getTemplateName()
    {
        return "index/setting.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 56,  49 => 22,  31 => 7,  23 => 2,  19 => 1,);
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

<link rel=\"stylesheet\" href=\"../addons/mysql/resource/css/mysql.css\">


{{ include(\"common/nav.html\")}}
<style>
    .setting{width:60%; margin:0 auto;}
</style>
<!-- 示例-970 -->
<div class=\"setting\">
    <fieldset class=\"layui-elem-field layui-field-title\" >
        <legend>mysql数据库配置</legend>
    </fieldset>
    <form class=\"layui-form layui-form-pane \" action=\"\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库地址</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"title\" autocomplete=\"off\" value=\"127.0.0.1\" placeholder=\"数据库地址\" class=\"layui-input\">
            </div>
            <div class=\"layui-form-mid layui-word-aux\">请务必确认防火墙是否阻止此ip地址链接数据库{{ip}}</div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_name\" value=\"root\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>


        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">密码</label>
            <div class=\"layui-input-inline\">
                <input type=\"password\" name=\"db_password\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
            </div>

        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">端口号</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_prot\" value=\"3306\" lay-verify=\"required\" placeholder=\"请输入端口号\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>




        <div class=\"layui-form-item\">
            <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo2\">提交</button>
        </div>
    </form>

</div>
{{ include('niubaobao/footerLayui.html') }}
<script>
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>", "index/setting.html", "C:\\wamp\\www\\lnmpbao\\addons\\mysql\\template\\index\\setting.html");
    }
}
