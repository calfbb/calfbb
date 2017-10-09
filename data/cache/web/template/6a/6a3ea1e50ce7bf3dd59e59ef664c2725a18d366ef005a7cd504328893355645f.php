<?php

/* system/assembleslist.html */
class __TwigTemplate_00038e47a161bbd5d2f382359d680fd6dbd1f54696e3b5aee6cd85ad795a6045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/assembleslist.html", 1);
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
        <legend>数据列表</legend>
        <div class=\"layui-field-box layui-form\">
            <table class=\"layui-table admin-table\">
                <thead>
                <tr>
                    <th style=\"width: 30px;\">
                    序列
                    </th>
                    <th>套餐名字</th>
                    <th>是否开启1</th>
                    <th>有效时间</th>

                    <th>用户数</th>
                    <th>操作</th>
                </tr>

                </thead>
                <tbody id=\"content\">
                ";
        // line 35
        $context["i"] = 0;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 37
            echo "                <tr id=\"delete";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                        ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "

                    </td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 44
            if (($this->getAttribute($context["value"], "switch", array()) == 1)) {
                echo " 开启  ";
            } else {
                echo " 关闭 ";
            }
            // line 45
            echo "                    </td>
                    <td>
                        ";
            // line 47
            if (($this->getAttribute($context["value"], "deadline", array()) == 1)) {
                // line 48
                echo "                        一个月
                        ";
            } elseif (($this->getAttribute(            // line 49
$context["value"], "deadline", array()) == 2)) {
                // line 50
                echo "                        二个月
                        ";
            } elseif (($this->getAttribute(            // line 51
$context["value"], "deadline", array()) == 3)) {
                // line 52
                echo "                        三个月
                        ";
            } elseif (($this->getAttribute(            // line 53
$context["value"], "deadline", array()) == 4)) {
                // line 54
                echo "                        半年
                        ";
            } elseif (($this->getAttribute(            // line 55
$context["value"], "deadline", array()) == 5)) {
                // line 56
                echo "                        一年
                        ";
            } elseif (($this->getAttribute(            // line 57
$context["value"], "deadline", array()) == 6)) {
                // line 58
                echo "                        两年
                        ";
            } elseif (($this->getAttribute(            // line 59
$context["value"], "deadline", array()) == 7)) {
                // line 60
                echo "                        三年
                        ";
            } elseif (($this->getAttribute(            // line 61
$context["value"], "deadline", array()) == 8)) {
                // line 62
                echo "                        四年
                        ";
            } elseif (($this->getAttribute(            // line 63
$context["value"], "deadline", array()) == 9)) {
                // line 64
                echo "                        五年

                        ";
            }
            // line 67
            echo "

                    </td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ass_count", array()), "html", null, true);
            echo "</td>


                    <td>
                        <!--<a href=\"/detail-1\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">权限</a>-->
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
            echo "?m=web&c=system&a=editAssembles&id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" data-name=\"张三\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
                        <a href=\"javascript:;\"  value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" data-id=\"1\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini delete\">删除</a>
                    </td>
                </tr>

                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
            </table>
            <div id=\"page\"></div>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>
<!--模板-->


<script>
    /**
     * 分页
     */
    layui.use('laypage', function(){
        var laypage = layui.laypage;

        //执行一个laypage实例
        laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            ,count: \"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "\", //数据总数，从服务端得到
            layout:['count','prev', 'page', 'next'],
            curr:\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\",
            jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                if(obj.curr !=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\"){
                    window.location.href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=assemblesList&page=\"+obj.curr;
                }
//                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
//                console.log(obj.limit); //得到每页显示的条数

                //首次不执行

            }
        });
    })

    layui.use('layer', function(){
        var layer = layui.layer;

        \$('.delete').click(function(){
            var id=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个套餐吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=deleteAssembles\",
                    type:'get',
                    data:{id:id},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+id).remove();
                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('删除失败:'+data.msg, {icon: 2});
                        }
                    }
                })



            });
        })
    });

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "system/assembleslist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 131,  241 => 109,  237 => 108,  231 => 105,  226 => 103,  202 => 81,  183 => 76,  177 => 75,  169 => 70,  164 => 67,  159 => 64,  157 => 63,  154 => 62,  152 => 61,  149 => 60,  147 => 59,  144 => 58,  142 => 57,  139 => 56,  137 => 55,  134 => 54,  132 => 53,  129 => 52,  127 => 51,  124 => 50,  122 => 49,  119 => 48,  117 => 47,  113 => 45,  107 => 44,  102 => 42,  96 => 39,  90 => 37,  72 => 36,  70 => 35,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <legend>数据列表</legend>
        <div class=\"layui-field-box layui-form\">
            <table class=\"layui-table admin-table\">
                <thead>
                <tr>
                    <th style=\"width: 30px;\">
                    序列
                    </th>
                    <th>套餐名字</th>
                    <th>是否开启1</th>
                    <th>有效时间</th>

                    <th>用户数</th>
                    <th>操作</th>
                </tr>

                </thead>
                <tbody id=\"content\">
                {% set i=0 %}
                {% for key, value in list %}
                <tr id=\"delete{{value.id}}\">
                    <td>
                        {{loop.index}}

                    </td>
                    <td>{{value.name}}</td>
                    <td>
                        {% if value.switch==1 %} 开启  {% else %} 关闭 {% endif %}
                    </td>
                    <td>
                        {% if value.deadline==1 %}
                        一个月
                        {% elseif value.deadline==2 %}
                        二个月
                        {% elseif value.deadline==3 %}
                        三个月
                        {% elseif value.deadline==4 %}
                        半年
                        {% elseif value.deadline==5 %}
                        一年
                        {% elseif value.deadline==6 %}
                        两年
                        {% elseif value.deadline==7 %}
                        三年
                        {% elseif value.deadline==8 %}
                        四年
                        {% elseif value.deadline==9 %}
                        五年

                        {%endif%}


                    </td>
                    <td>{{value.ass_count}}</td>


                    <td>
                        <!--<a href=\"/detail-1\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">权限</a>-->
                        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=editAssembles&id={{value.id}}\" data-name=\"张三\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
                        <a href=\"javascript:;\"  value=\"{{value.id}}\" data-id=\"1\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini delete\">删除</a>
                    </td>
                </tr>

                {% endfor %}

            </table>
            <div id=\"page\"></div>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>
<!--模板-->


<script>
    /**
     * 分页
     */
    layui.use('laypage', function(){
        var laypage = layui.laypage;

        //执行一个laypage实例
        laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            ,count: \"{{count}}\", //数据总数，从服务端得到
            layout:['count','prev', 'page', 'next'],
            curr:\"{{_GPC['page']}}\",
            jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                if(obj.curr !=\"{{_GPC['page']}}\"){
                    window.location.href=\"{{_G['APP_URL']}}?m=web&c=system&a=assemblesList&page=\"+obj.curr;
                }
//                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
//                console.log(obj.limit); //得到每页显示的条数

                //首次不执行

            }
        });
    })

    layui.use('layer', function(){
        var layer = layui.layer;

        \$('.delete').click(function(){
            var id=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个套餐吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"{{ _G['APP_URL'] }}?m=web&c=system&a=deleteAssembles\",
                    type:'get',
                    data:{id:id},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+id).remove();
                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('删除失败:'+data.msg, {icon: 2});
                        }
                    }
                })



            });
        })
    });

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>

{% endblock %}", "system/assembleslist.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\assembleslist.html");
    }
}
