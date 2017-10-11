<?php

/* system/userlist.html */
class __TwigTemplate_52dc49536a5508771c21f56f953b02fa8524640c876559ab2b24fa8cad422386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/userlist.html", 1);
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
        <legend>数据列表</legend>
        <div class=\"layui-field-box layui-form\">
            <table class=\"layui-table admin-table\">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>

                    <th>过期时间</th>
                    <th>套餐</th>
                    <th>套餐有效时间</th>
                    <th>状态</th>
                    <th>更新时间</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "uid", array()), "html", null, true);
            echo "\">
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>

                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nickname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nickname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ass_name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "deadline", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "status", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "update_time", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
            echo "?m=web&c=system&a=editUserAuthority&uid=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "uid", array()), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "assemble_id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">权限</a>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
            echo "?m=web&c=system&a=editUser&uid=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "uid", array()), "html", null, true);
            echo "\" data-name=\"张三\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
                        <a href=\"javascript:;\"  value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "uid", array()), "html", null, true);
            echo "\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini delete\">删除</a>
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
        // line 54
        echo "            </table>
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
        var count=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "\";
        //执行一个laypage实例
        laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            ,count:count , //数据总数，从服务端得到
            layout:['count','prev', 'page', 'next'],
            curr:\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\",
            jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                if(obj.curr !=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\"){
                    window.location.href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=userList&page=\"+obj.curr;
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
            var uid=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个用户吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=deleteUser\",
                    type:'get',
                    data:{uid:uid},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+uid).remove();
                            layer.msg('删除成功', {icon: 1});
                            count--;
                        }else{
                            layer.msg('删除失败', {icon: 2});
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
        return "system/userlist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 101,  194 => 79,  190 => 78,  184 => 75,  175 => 69,  158 => 54,  139 => 49,  133 => 48,  125 => 47,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  95 => 38,  90 => 37,  72 => 36,  70 => 35,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <legend>数据列表</legend>
        <div class=\"layui-field-box layui-form\">
            <table class=\"layui-table admin-table\">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>

                    <th>过期时间</th>
                    <th>套餐</th>
                    <th>套餐有效时间</th>
                    <th>状态</th>
                    <th>更新时间</th>
                    <th>操作</th>
                </tr>

                </thead>
                <tbody id=\"content\">
                {% set i=0 %}
                {% for key, value in list %}
                <tr id=\"delete{{value.uid}}\">
                    <td>{{loop.index}}</td>

                    <td>{{value.nickname}}</td>
                    <td>{{value.nickname}}</td>
                    <td>{{value.ass_name}}</td>
                    <td>{{value.deadline}}</td>
                    <td>{{value.status}}</td>
                    <td>{{value.update_time}}</td>
                    <td>
                        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=editUserAuthority&uid={{value.uid}}&id={{value.assemble_id}}\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">权限</a>
                        <a href=\"{{ _G['APP_URL'] }}?m=web&c=system&a=editUser&uid={{value.uid}}\" data-name=\"张三\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
                        <a href=\"javascript:;\"  value=\"{{value.uid}}\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini delete\">删除</a>
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
        var count=\"{{count}}\";
        //执行一个laypage实例
        laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            ,count:count , //数据总数，从服务端得到
            layout:['count','prev', 'page', 'next'],
            curr:\"{{_GPC['page']}}\",
            jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                if(obj.curr !=\"{{_GPC['page']}}\"){
                    window.location.href=\"{{_G['APP_URL']}}?m=web&c=system&a=userList&page=\"+obj.curr;
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
            var uid=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个用户吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"{{ _G['APP_URL'] }}?m=web&c=system&a=deleteUser\",
                    type:'get',
                    data:{uid:uid},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+uid).remove();
                            layer.msg('删除成功', {icon: 1});
                            count--;
                        }else{
                            layer.msg('删除失败', {icon: 2});
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



{% endblock %}", "system/userlist.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\userlist.html");
    }
}
