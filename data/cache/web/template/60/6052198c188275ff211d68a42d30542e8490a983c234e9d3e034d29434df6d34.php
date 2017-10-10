<?php

/* user/project.html */
class __TwigTemplate_b4f8b43ce378120513bdae37fa73ca2c6c35ab75303a234469fa3f8eff550cee extends Twig_Template
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
        // line 62
        echo "<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->

<!--<div class=\"layui-footer\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--</div>-->
";
        // line 70
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
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
        // line 81
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "\", //数据总数，从服务端得到
            layout:['count','prev', 'page', 'next'],
            curr:\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\",
            jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                if(obj.curr !=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "page", array(), "array"), "html", null, true);
        echo "\"){
                    window.location.href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=project&page=\"+obj.curr;
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
            var project_id=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个项目吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=deleteProject\",
                    type:'get',
                    data:{project_id:project_id},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+project_id).remove();
                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('删除失败', {icon: 2});
                        }
                    }
                })



            });
        })
    });


</script>
";
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
    .dataListTwo p{font-size:1.5rem;padding-top: 10px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
    .site-demo-button{padding-bottom: 150px;}
    #page{margin: 0 auto;width:98%;float:left;text-align: center;display: block;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=newProject\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:98%;margin:0 auto;\">
    <legend>选择项目</legend>
    <div class=\"layui-row layui-col-space10 left \">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 37
            echo "

        <div class=\"layui-col-md2 border\" id=\"delete";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "project_id", array()), "html", null, true);
            echo "\">
                <div  class=\"dataListTwo\" >
                  <a href=\"./index.php?m=web&c=index&a=index&project_id=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "project_id", array()), "html", null, true);
            echo "\" target=\"blank\" >

                    <img class=\"img\"   onerror=\"this.src='";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
            echo "resource/screen/images/timg.jpg'\"  style=\"width:200px;height:161px;\" src=\"/attachment/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                      <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</p>
                  </a>
                  <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
            echo "?m=web&c=project&a=editproject&project_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "project_id", array()), "html", null, true);
            echo "\"> <i  class=\"layui-icon edit\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "project_id", array()), "html", null, true);
            echo "\" style=\"font-size: 30px; color: #1E9FFF;\">&#xe642;</i></a>
                  <i  class=\"layui-icon delete\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "project_id", array()), "html", null, true);
            echo "\" style=\"font-size: 30px; color: #1E9FFF;\">&#xe640;</i>

                </div>


        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <div id=\"page\"></div>
    </div>



</fieldset>

";
    }

    public function getTemplateName()
    {
        return "user/project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 54,  200 => 47,  192 => 46,  187 => 44,  181 => 43,  176 => 41,  171 => 39,  167 => 37,  163 => 36,  154 => 30,  137 => 15,  134 => 14,  105 => 109,  80 => 87,  76 => 86,  70 => 83,  65 => 81,  51 => 70,  41 => 62,  39 => 14,  27 => 5,  20 => 1,);
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
    .dataListTwo p{font-size:1.5rem;padding-top: 10px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
    .site-demo-button{padding-bottom: 150px;}
    #page{margin: 0 auto;width:98%;float:left;text-align: center;display: block;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"{{_G['APP_URL']}}?m=web&c=project&a=newProject\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:98%;margin:0 auto;\">
    <legend>选择项目</legend>
    <div class=\"layui-row layui-col-space10 left \">
        {% for key, value in list %}


        <div class=\"layui-col-md2 border\" id=\"delete{{ value.project_id }}\">
                <div  class=\"dataListTwo\" >
                  <a href=\"./index.php?m=web&c=index&a=index&project_id={{ value.project_id }}\" target=\"blank\" >

                    <img class=\"img\"   onerror=\"this.src='{{APP}}resource/screen/images/timg.jpg'\"  style=\"width:200px;height:161px;\" src=\"/attachment/{{ value.image }}\" alt=\"\">
                      <p>{{ value.name }}</p>
                  </a>
                  <a href=\"{{_G['APP_URL']}}?m=web&c=project&a=editproject&project_id={{ value.project_id }}\"> <i  class=\"layui-icon edit\"  value=\"{{ value.project_id }}\" style=\"font-size: 30px; color: #1E9FFF;\">&#xe642;</i></a>
                  <i  class=\"layui-icon delete\" value=\"{{ value.project_id }}\" style=\"font-size: 30px; color: #1E9FFF;\">&#xe640;</i>

                </div>


        </div>
        {% endfor %}
        <div id=\"page\"></div>
    </div>



</fieldset>

{% endblock %}
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->

<!--<div class=\"layui-footer\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--</div>-->
{{ include(\"common/footer.html\")}}
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
                    window.location.href=\"{{_G['APP_URL']}}?m=web&c=project&a=project&page=\"+obj.curr;
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
            var project_id=\$(this).attr('value');
            //询问框
            layer.confirm('您确定要删除这个项目吗？删除以后不可恢复!', {
                btn: ['确认','取消'] //按钮
            }, function(){
                \$.ajax({
                    //脚本地址
                    url:\"{{ _G['APP_URL'] }}?m=web&c=project&a=deleteProject\",
                    type:'get',
                    data:{project_id:project_id},
                    dataType:'json',
                    success:function(data){

                        if(data.code==8001){

                            \$(\"#delete\"+project_id).remove();
                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('删除失败', {icon: 2});
                        }
                    }
                })



            });
        })
    });


</script>
", "user/project.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\user\\project.html");
    }
}
