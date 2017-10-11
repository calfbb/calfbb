<?php

/* index/setting.html */
class __TwigTemplate_5bb173830189fcfc5e5ecba7073c413b807eeb298a8be58a8328b3b66a4491e8 extends Twig_Template
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

<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">


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
    <form class=\"layui-form layui-form-pane \" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=db&c=index&a=setting\" method=\"post\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库地址</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"db_path\"  lay-verify=\"required\" autocomplete=\"off\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "db_path", array()), "html", null, true);
        echo "\" placeholder=\"数据库地址\" class=\"layui-input\">
            </div>
            <div class=\"layui-form-mid layui-word-aux\">请务必确认防火墙是否阻止此ip地址链接数据库";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : null), "html", null, true);
        echo "</div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库名字</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "db_name", array()), "html", null, true);
        echo "\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">用户名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array()), "html", null, true);
        echo "\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库类型</label>
            <div class=\"layui-input-inline\">
                <select name=\"db_type\" lay-verify=\"\">
                    <option value=\"mysql\">mysql</option>

                </select>
            </div>
        </div>


        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">密码</label>
            <div class=\"layui-input-inline\">
                <input type=\"password\" name=\"password\"  value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "password", array()), "html", null, true);
        echo "\" lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
            </div>

        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">端口号</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"port\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "port", array()), "html", null, true);
        echo "\" lay-verify=\"required\" placeholder=\"请输入端口号\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>




        <div class=\"layui-form-item\">
            <input type=\"submit\" name=\"submit\"  value=\"提交\" class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo2\">
        </div>
    </form>

</div>


";
        // line 74
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
";
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
        return array (  122 => 74,  104 => 59,  93 => 51,  73 => 34,  63 => 27,  55 => 22,  50 => 20,  43 => 16,  31 => 7,  23 => 2,  19 => 1,);
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

<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">


{{ include(\"common/nav.html\")}}
<style>
    .setting{width:60%; margin:0 auto;}
</style>
<!-- 示例-970 -->
<div class=\"setting\">
    <fieldset class=\"layui-elem-field layui-field-title\" >
        <legend>mysql数据库配置</legend>
    </fieldset>
    <form class=\"layui-form layui-form-pane \" action=\"{{ _G['APP_URL'] }}?m=db&c=index&a=setting\" method=\"post\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库地址</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"db_path\"  lay-verify=\"required\" autocomplete=\"off\" value=\"{{data.db_path}}\" placeholder=\"数据库地址\" class=\"layui-input\">
            </div>
            <div class=\"layui-form-mid layui-word-aux\">请务必确认防火墙是否阻止此ip地址链接数据库{{ip}}</div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库名字</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"db_name\" value=\"{{data.db_name}}\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">用户名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"name\" value=\"{{data.name}}\" lay-verify=\"required\" placeholder=\"请输入数据库名\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">数据库类型</label>
            <div class=\"layui-input-inline\">
                <select name=\"db_type\" lay-verify=\"\">
                    <option value=\"mysql\">mysql</option>

                </select>
            </div>
        </div>


        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">密码</label>
            <div class=\"layui-input-inline\">
                <input type=\"password\" name=\"password\"  value=\"{{data.password}}\" lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
            </div>

        </div>

        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">端口号</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"port\" value=\"{{data.port}}\" lay-verify=\"required\" placeholder=\"请输入端口号\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>




        <div class=\"layui-form-item\">
            <input type=\"submit\" name=\"submit\"  value=\"提交\" class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo2\">
        </div>
    </form>

</div>


{{ include('common/footer.html') }}
", "index/setting.html", "C:\\wamp\\www\\lnmpbao\\addons\\db\\template\\index\\setting.html");
    }
}
