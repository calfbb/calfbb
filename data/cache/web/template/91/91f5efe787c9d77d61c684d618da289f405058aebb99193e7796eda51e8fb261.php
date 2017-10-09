<?php

/* system/addassembles.html */
class __TwigTemplate_0002c15e00e44c25324035dceb4d0fefda49577ab5e6401b97a38061c6f79655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/addassembles.html", 1);
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
        <legend>新增套餐</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=saveAssembles\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"name\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"1\">一个月</option>
                            <option value=\"2\">两个月</option>
                            <option value=\"3\">三个月</option>
                            <option value=\"4\">半年</option>
                            <option value=\"5\">一年</option>
                            <option value=\"6\">两年</option>
                            <option value=\"7\">三年</option>
                            <option value=\"8\">四年</option>
                            <option value=\"9\">五年</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"switch\" value=\"1\" title=\"开启\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>开启</span></div>
                        <input type=\"radio\" name=\"switch\" value=\"2\" title=\"停用\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>停用</span></div>
                    </div>
                </div>


                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含应用:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appList"]) ? $context["appList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 63
            echo "                        <input type=\"checkbox\"  value=\"1\" name=\"application[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "]\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含模板:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templetList"]) ? $context["templetList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 73
            echo "                        <input type=\"checkbox\" value=\"1\" name=\"templet[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "]\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                     </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"insert\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"创建套餐\" lay-submit=\"\" lay-filter=\"demo1\">
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
        return "system/addassembles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 75,  128 => 73,  124 => 72,  115 => 65,  104 => 63,  100 => 62,  54 => 19,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <legend>新增套餐</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=system&a=saveAssembles\" method=\"post\">
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"name\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"1\">一个月</option>
                            <option value=\"2\">两个月</option>
                            <option value=\"3\">三个月</option>
                            <option value=\"4\">半年</option>
                            <option value=\"5\">一年</option>
                            <option value=\"6\">两年</option>
                            <option value=\"7\">三年</option>
                            <option value=\"8\">四年</option>
                            <option value=\"9\">五年</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">状态</label>
                    <div class=\"layui-input-block\">
                        <input type=\"radio\" name=\"switch\" value=\"1\" title=\"开启\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>开启</span></div>
                        <input type=\"radio\" name=\"switch\" value=\"2\" title=\"停用\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>停用</span></div>
                    </div>
                </div>


                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含应用:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in appList %}
                        <input type=\"checkbox\"  value=\"1\" name=\"application[{{value.id}}]\" title=\"{{value.name}}\">
                        {% endfor %}
                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">包含模板:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in templetList %}
                        <input type=\"checkbox\" value=\"1\" name=\"templet[{{value.id}}]\" title=\"{{value.name}}\">
                        {% endfor %}

                     </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"submit\" value=\"insert\">
                        <input type=\"submit\" class=\"layui-btn\" value=\"创建套餐\" lay-submit=\"\" lay-filter=\"demo1\">
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


{% endblock %}", "system/addassembles.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\addassembles.html");
    }
}
