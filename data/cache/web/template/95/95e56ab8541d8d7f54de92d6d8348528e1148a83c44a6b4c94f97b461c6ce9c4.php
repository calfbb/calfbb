<?php

/* system/addUser.html */
class __TwigTemplate_a222ddde306fee7eff43db10c84eec03b305bab2a429d65e55abe691ed619cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/addUser.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "system/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"admin-main\">

    <blockquote class=\"layui-elem-quote\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=userList\" class=\"layui-btn layui-btn-small\">
            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 用户列表
        </a>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=addUser\" class=\"layui-btn layui-btn-small\" >
            <i class=\"layui-icon\"></i> 添加用户
        </a>



    </blockquote>
    <fieldset class=\"layui-elem-field\">
        <legend>添加用户</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=saveUser\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"nickname\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入用户名称\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户密码</label>
                    <div class=\"layui-input-block\">
                        <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">选择套餐</label>
                    <div class=\"layui-input-block\">
                        <select name=\"assemble\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asseList"]) ? $context["asseList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "deadline", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">身份</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"type\" value=\"1\" title=\"普通用户\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>普通用户</span></div>
                        <input type=\"radio\" name=\"type\" value=\"2\" title=\"运营管理员\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>运营管理员</span></div>
                        <input type=\"radio\" name=\"type\" value=\"3\" title=\"超级管理员\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>超级管理员</span></div>

                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"status\" value=\"1\" title=\"审核中\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核中</span></div>
                        <input type=\"radio\" name=\"status\" value=\"2\" title=\"审核失败\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>审核失败</span></div>
                        <input type=\"radio\" name=\"status\" value=\"3\" title=\"审核通过\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核通过</span></div>

                    </div>
                </div>







                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"insert\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"创建用户\" lay-submit=\"\" lay-filter=\"demo1\">
                        <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>
<!--模板-->


<script>

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });



</script>


";
    }

    public function getTemplateName()
    {
        return "system/addUser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  81 => 40,  77 => 39,  55 => 20,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"system/index.html\" %}

{% block body %}
<div class=\"admin-main\">

    <blockquote class=\"layui-elem-quote\">
        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=userList\" class=\"layui-btn layui-btn-small\">
            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 用户列表
        </a>
        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=addUser\" class=\"layui-btn layui-btn-small\" >
            <i class=\"layui-icon\"></i> 添加用户
        </a>



    </blockquote>
    <fieldset class=\"layui-elem-field\">
        <legend>添加用户</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=system&a=saveUser\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"nickname\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入用户名称\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户密码</label>
                    <div class=\"layui-input-block\">
                        <input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">选择套餐</label>
                    <div class=\"layui-input-block\">
                        <select name=\"assemble\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            {% for key, value in asseList %}
                            <option value=\"{{value.id}},{{value.deadline}}\">{{value.name}}</option>

                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">身份</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"type\" value=\"1\" title=\"普通用户\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>普通用户</span></div>
                        <input type=\"radio\" name=\"type\" value=\"2\" title=\"运营管理员\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>运营管理员</span></div>
                        <input type=\"radio\" name=\"type\" value=\"3\" title=\"超级管理员\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>超级管理员</span></div>

                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"status\" value=\"1\" title=\"审核中\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核中</span></div>
                        <input type=\"radio\" name=\"status\" value=\"2\" title=\"审核失败\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>审核失败</span></div>
                        <input type=\"radio\" name=\"status\" value=\"3\" title=\"审核通过\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核通过</span></div>

                    </div>
                </div>







                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"insert\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"创建用户\" lay-submit=\"\" lay-filter=\"demo1\">
                        <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>
<!--模板-->


<script>

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });



</script>


{% endblock %}", "system/addUser.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\addUser.html");
    }
}
