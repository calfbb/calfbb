<?php

/* system/editassembles.html */
class __TwigTemplate_9d77ef8700ec248e09320112b9054d82cb198af7ff5a73ef9b2a2f7434d04791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/editassembles.html", 1);
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
        echo "?m=web&c=system&a=assemblesList\" class=\"layui-btn layui-btn-small\">
            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 套餐列表
        </a>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=addAssembles\" class=\"layui-btn layui-btn-small\" >
            <i class=\"layui-icon\"></i> 新增套餐
        </a>


    </blockquote>
    <fieldset class=\"layui-elem-field\">
        <legend>编辑套餐</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=saveAssembles\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"name\"  value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array()), "html", null, true);
        echo "\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"1\" ";
        // line 32
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 1)) {
            echo " selected ";
        }
        echo ">一个月</option>
                            <option value=\"2\" ";
        // line 33
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 2)) {
            echo " selected ";
        }
        echo ">两个月</option>
                            <option value=\"3\" ";
        // line 34
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 3)) {
            echo " selected ";
        }
        echo ">三个月</option>
                            <option value=\"4\" ";
        // line 35
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 4)) {
            echo " selected ";
        }
        echo ">半年</option>
                            <option value=\"5\" ";
        // line 36
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 5)) {
            echo " selected ";
        }
        echo ">一年</option>
                            <option value=\"6\" ";
        // line 37
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 6)) {
            echo " selected ";
        }
        echo ">两年</option>
                            <option value=\"7\" ";
        // line 38
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 7)) {
            echo " selected ";
        }
        echo ">三年</option>
                            <option value=\"8\" ";
        // line 39
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 8)) {
            echo " selected ";
        }
        echo ">四年</option>
                            <option value=\"9\" ";
        // line 40
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 9)) {
            echo " selected ";
        }
        echo ">五年</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" ";
        // line 47
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "switch", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"switch\" value=\"1\" title=\"开启\" ><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>开启</span></div>
                        <input type=\"radio\" ";
        // line 48
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "switch", array()) == 2)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"switch\" value=\"2\" title=\"停用\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>停用</span></div>
                    </div>
                </div>


                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\" placeholder=\"请输入内容\" class=\"layui-textarea\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "introduce", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含应用:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appList"]) ? $context["appList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 64
            echo "
                        <input type=\"checkbox\"  ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "application", array()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                echo "  ";
                if (($this->getAttribute($context["value"], "id", array()) == $context["v"])) {
                    echo " checked=\"checked\" ";
                }
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " value=\"1\" name=\"application[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "]\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\">

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含模板:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templetList"]) ? $context["templetList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 76
            echo "
                                 <input type=\"checkbox\" ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "templet", array()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                echo "  ";
                if (($this->getAttribute($context["value"], "id", array()) == $context["v"])) {
                    echo "  checked=\"checked\" ";
                }
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " value=\"1\" name=\"templet[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "]\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\">

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                    </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"edit\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"修改套餐\" lay-submit=\"\" lay-filter=\"demo1\">
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
        return "system/editassembles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 80,  212 => 77,  209 => 76,  205 => 75,  196 => 68,  172 => 65,  169 => 64,  165 => 63,  155 => 56,  142 => 48,  136 => 47,  124 => 40,  118 => 39,  112 => 38,  106 => 37,  100 => 36,  94 => 35,  88 => 34,  82 => 33,  76 => 32,  65 => 24,  61 => 23,  54 => 19,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=assemblesList\" class=\"layui-btn layui-btn-small\">
            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 套餐列表
        </a>
        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=addAssembles\" class=\"layui-btn layui-btn-small\" >
            <i class=\"layui-icon\"></i> 新增套餐
        </a>


    </blockquote>
    <fieldset class=\"layui-elem-field\">
        <legend>编辑套餐</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=system&a=saveAssembles\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"id\" value=\"{{data.id}}\">
                        <input type=\"text\" name=\"name\"  value=\"{{data.name}}\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"1\" {% if data.deadline==1 %} selected {% endif %}>一个月</option>
                            <option value=\"2\" {% if data.deadline==2 %} selected {% endif %}>两个月</option>
                            <option value=\"3\" {% if data.deadline==3 %} selected {% endif %}>三个月</option>
                            <option value=\"4\" {% if data.deadline==4 %} selected {% endif %}>半年</option>
                            <option value=\"5\" {% if data.deadline==5 %} selected {% endif %}>一年</option>
                            <option value=\"6\" {% if data.deadline==6 %} selected {% endif %}>两年</option>
                            <option value=\"7\" {% if data.deadline==7 %} selected {% endif %}>三年</option>
                            <option value=\"8\" {% if data.deadline==8 %} selected {% endif %}>四年</option>
                            <option value=\"9\" {% if data.deadline==9 %} selected {% endif %}>五年</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" {% if data.switch==1 %} checked=\"checked\" {% endif %} name=\"switch\" value=\"1\" title=\"开启\" ><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>开启</span></div>
                        <input type=\"radio\" {% if data.switch==2 %} checked=\"checked\" {% endif %} name=\"switch\" value=\"2\" title=\"停用\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>停用</span></div>
                    </div>
                </div>


                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\" placeholder=\"请输入内容\" class=\"layui-textarea\">{{data.introduce}}</textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含应用:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in appList %}

                        <input type=\"checkbox\"  {% for k,v in data.application %}  {% if value.id==v %} checked=\"checked\" {% endif %}    {% endfor %} value=\"1\" name=\"application[{{value.id}}]\" title=\"{{value.name}}\">

                        {% endfor %}
                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含模板:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in templetList %}

                                 <input type=\"checkbox\" {% for k,v in data.templet %}  {% if value.id==v %}  checked=\"checked\" {% endif %}  {% endfor %} value=\"1\" name=\"templet[{{value.id}}]\" title=\"{{value.name}}\">

                        {% endfor %}

                    </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"edit\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"修改套餐\" lay-submit=\"\" lay-filter=\"demo1\">
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


{% endblock %}", "system/editassembles.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\editassembles.html");
    }
}
