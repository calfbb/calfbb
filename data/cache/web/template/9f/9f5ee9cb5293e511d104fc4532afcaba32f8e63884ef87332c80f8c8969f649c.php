<?php

/* system/editUser.html */
class __TwigTemplate_f4a9e6e2961828bda7238aa0d4d5966a74b91cd2e2f169fcafa1198aa6126061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/editUser.html", 1);
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
        <legend>编辑用户</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=saveUser\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"nickname\"  value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nickname", array()), "html", null, true);
        echo "\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入用户名称\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户密码</label>
                    <div class=\"layui-input-block\">
                        <input type=\"password\" name=\"password\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "password", array()), "html", null, true);
        echo "\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">选择套餐</label>
                    <div class=\"layui-input-block\">
                        <select name=\"assemble\" lay-verify=\"required\">

                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asseList"]) ? $context["asseList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            echo "                            <option  ";
            if (($this->getAttribute($context["value"], "id", array()) == $this->getAttribute((isset($context["ruledata"]) ? $context["ruledata"] : null), "assemble_id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
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
                        <input type=\"radio\" name=\"type\" value=\"1\" title=\"普通用户\"  ";
        // line 49
        if (($this->getAttribute((isset($context["ruledata"]) ? $context["ruledata"] : null), "type", array()) == 1)) {
            echo " checked ";
        }
        echo " ><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>普通用户</span></div>
                        <input type=\"radio\" name=\"type\" value=\"2\" title=\"运营管理员\" ";
        // line 50
        if (($this->getAttribute((isset($context["ruledata"]) ? $context["ruledata"] : null), "type", array()) == 2)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>运营管理员</span></div>
                        <input type=\"radio\" name=\"type\" value=\"3\" title=\"超级管理员\" ";
        // line 51
        if (($this->getAttribute((isset($context["ruledata"]) ? $context["ruledata"] : null), "type", array()) == 3)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>超级管理员</span></div>

                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"status\" value=\"1\" title=\"审核中\"  ";
        // line 59
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == 1)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核中</span></div>
                        <input type=\"radio\" name=\"status\" value=\"2\" title=\"审核失败\"  ";
        // line 60
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == 2)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>审核失败</span></div>
                        <input type=\"radio\" name=\"status\" value=\"3\" title=\"审核通过\"  ";
        // line 61
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == 3)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核通过</span></div>

                    </div>
                </div>







                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"edit\">
                        <input type=\"hidden\" name=\"validate\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "validate", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"uid\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "uid", array(), "array"), "html", null, true);
        echo "\">
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
        return "system/editUser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  169 => 75,  150 => 61,  144 => 60,  138 => 59,  125 => 51,  119 => 50,  113 => 49,  105 => 43,  87 => 40,  83 => 39,  71 => 30,  62 => 24,  55 => 20,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <legend>编辑用户</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=system&a=saveUser\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名称</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"nickname\"  value=\"{{data.nickname}}\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入用户名称\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户密码</label>
                    <div class=\"layui-input-block\">
                        <input type=\"password\" name=\"password\" value=\"{{data.password}}\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">选择套餐</label>
                    <div class=\"layui-input-block\">
                        <select name=\"assemble\" lay-verify=\"required\">

                            {% for key, value in asseList %}
                            <option  {% if value.id==ruledata.assemble_id %} selected {% endif %} value=\"{{value.id}},{{value.deadline}}\">{{value.name}}</option>

                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">身份</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"type\" value=\"1\" title=\"普通用户\"  {% if ruledata.type==1 %} checked {% endif %} ><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>普通用户</span></div>
                        <input type=\"radio\" name=\"type\" value=\"2\" title=\"运营管理员\" {% if ruledata.type==2 %} checked {% endif %}><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>运营管理员</span></div>
                        <input type=\"radio\" name=\"type\" value=\"3\" title=\"超级管理员\" {% if ruledata.type==3 %} checked {% endif %}><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>超级管理员</span></div>

                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"status\" value=\"1\" title=\"审核中\"  {% if data.status==1 %} checked {% endif %}><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核中</span></div>
                        <input type=\"radio\" name=\"status\" value=\"2\" title=\"审核失败\"  {% if data.status==2 %} checked {% endif %}><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>审核失败</span></div>
                        <input type=\"radio\" name=\"status\" value=\"3\" title=\"审核通过\"  {% if data.status==3 %} checked {% endif %}><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>审核通过</span></div>

                    </div>
                </div>







                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"edit\">
                        <input type=\"hidden\" name=\"validate\" value=\"{{data.validate}}\">
                        <input type=\"hidden\" name=\"uid\" value=\"{{_GPC['uid']}}\">
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


{% endblock %}", "system/editUser.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\editUser.html");
    }
}
