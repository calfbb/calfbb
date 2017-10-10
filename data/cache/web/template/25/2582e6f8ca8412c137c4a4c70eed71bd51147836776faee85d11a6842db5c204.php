<?php

/* system/editUserAuthority.html */
class __TwigTemplate_3e9cfe9fa76ac043d8b15c21da617811df4584485d999bc16ff955628ccd90fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("system/index.html", "system/editUserAuthority.html", 1);
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
        <legend>编辑用户权限</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=system&a=saveUser\" method=\"post\">


                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\">
                        <input type=\"text\" disabled name=\"name\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array()), "html", null, true);
        echo "\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" disabled lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"1\" ";
        // line 35
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 1)) {
            echo " selected ";
        }
        echo ">一个月</option>
                            <option value=\"2\" ";
        // line 36
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 2)) {
            echo " selected ";
        }
        echo ">两个月</option>
                            <option value=\"3\" ";
        // line 37
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 3)) {
            echo " selected ";
        }
        echo ">三个月</option>
                            <option value=\"4\" ";
        // line 38
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 4)) {
            echo " selected ";
        }
        echo ">半年</option>
                            <option value=\"5\" ";
        // line 39
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 5)) {
            echo " selected ";
        }
        echo ">一年</option>
                            <option value=\"6\" ";
        // line 40
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 6)) {
            echo " selected ";
        }
        echo ">两年</option>
                            <option value=\"7\" ";
        // line 41
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 7)) {
            echo " selected ";
        }
        echo ">三年</option>
                            <option value=\"8\" ";
        // line 42
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 8)) {
            echo " selected ";
        }
        echo ">四年</option>
                            <option value=\"9\" ";
        // line 43
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "deadline", array()) == 9)) {
            echo " selected ";
        }
        echo ">五年</option>
                        </select>
                    </div>
                </div>



                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\"  disabled placeholder=\"请输入内容\" class=\"layui-textarea\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "introduce", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐包含应用:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appList"]) ? $context["appList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 61
            echo "
                        <input type=\"checkbox\"  disabled ";
            // line 62
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
        // line 65
        echo "                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐包含模板:</label>
                    <div class=\"layui-input-block\">
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templetList"]) ? $context["templetList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 73
            echo "
                        <input type=\"checkbox\" disabled ";
            // line 74
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
        // line 77
        echo "
                    </div>
                </div>


                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">附加模板:</label>
                    <div class=\"layui-input-block tpl\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templet"]) ? $context["templet"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 86
            echo "                        <div class=\"layui-btn layui-btn-primary btn deleteTpl \"   onclick=\"deleteTpl(this)\" id=\"deleteTpl";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"  _id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<i class=\"layui-icon \"  style=\"font-size: 20px; color: darkred;\">&#x1006;</i> </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </div>
                </div>
                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">

                        <div  class=\"layui-btn layui-btn-normal templet\"   >添加模板</div>
                        <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">附加应用:</label>
                    <div class=\"layui-input-block\">


                    </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <button  class=\"layui-btn layui-btn-warm\"  >添加应用</button>

                    </div>
                </div>




                <!--<div class=\"layui-form-item\" >-->
                    <!--<div class=\"layui-input-block\">-->
                        <!--<input type=\"hidden\" name=\"submit\" value=\"edit\">-->
                        <!--<input type=\"hidden\" name=\"validate\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "validate", array()), "html", null, true);
        echo "\">-->
                        <!--<input type=\"hidden\" name=\"uid\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "uid", array(), "array"), "html", null, true);
        echo "\">-->
                        <!--<input type=\"submit\" class=\"layui-btn\" value=\"编辑用户权限\" lay-submit=\"\" lay-filter=\"demo1\">-->
                        <!--&lt;!&ndash;<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">&ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
            </form>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>



<script>

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
    layui.use('layer', function(){
        var layer = layui.layer;

        \$('.templet').click(function(){
           // \$(\"#templet\").show();
          //  var html='<div id=\"templet\" class=\"layui-row layui-col-space10 addTemplet\"><div class=\"layui-col-md4\">1/3</div><div class=\"layui-col-md4\">1/3</div><div class=\"layui-col-md4\">1/3</div></div>';
            var html=\$('#templet').html();

            layer.open({
                type: 1,
                title: '添加模板',
                skin: 'layui-layer-molv', //样式类名
                closeBtn: 2, //不显示关闭按钮
                anim: 2,
                area: ['500px','500px'],
                shadeClose: true, //开启遮罩关闭
                content: html
            });
            \$(\".layui-layer-shade\").css('background-color','');

        })






    });



    function addTpl(t){
        var id=\$(t).attr('_id');
        var name=\$(t).attr('name');
        var uid=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "uid", array(), "array"), "html", null, true);
        echo "\";
        \$('.layui-layer').hide();

        \$.ajax({
            //脚本地址
            url:\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=templet&a=addUserTpl\",
            type:'get',
            data:{id:id,name:name,uid:uid},
            dataType:'json',
            success:function(data){

                if(data.code==8001){
                    layer.msg('添加成功', {icon: 1});
                    var div='<div class=\"layui-btn layui-btn-primary deleteTpl\"  onclick=\"deleteTpl(this)\" id=\"deleteTpl'+id+'\" name=\"'+name+'\"  _id=\"'+id+'\" >'+name+'<i class=\"layui-icon \" style=\"font-size: 20px; color: darkred;\">&#x1006;</i> </div>';
                    \$('.tpl').append(div);
                }else{
                    layer.msg('添加失败', {icon: 2});
                }
            }
        })
    }

    function deleteTpl(t){
        var id=\$(t).attr('_id');
        var name=\$(t).attr('name');
        var uid=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "uid", array(), "array"), "html", null, true);
        echo "\";
        //询问框
        layer.confirm('您确定要删除这个模板吗？', {
            btn: ['确认','取消'] //按钮
        }, function(){
            \$.ajax({
                //脚本地址
                url:\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=templet&a=deleteTpl\",
                type:'get',
                data:{id:id,name:name,uid:uid},
                dataType:'json',
                success:function(data){

                    if(data.code==8001){

                        \$(t).remove();
                        layer.msg('删除成功', {icon: 1});

                    }else{
                        layer.msg('删除失败', {icon: 2});
                    }
                }
            })



        });
    }

//    \$('.deleteTpl').click(function(){
//
//        var id=\$(this).attr('_id');
//        var name=\$(this).attr('name');
//        var uid=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "uid", array(), "array"), "html", null, true);
        echo "\";
//        //询问框
//        layer.confirm('您确定要删除这个模板吗？', {
//            btn: ['确认','取消'] //按钮
//        }, function(){
//            \$.ajax({
//                //脚本地址
//                url:\"";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=templet&a=deleteTpl\",
//                type:'get',
//                data:{id:id,name:name,uid:uid},
//                dataType:'json',
//                success:function(data){
//
//                    if(data.code==8001){
//
//                        \$(\"#deleteTpl\"+id).remove();
//                        layer.msg('删除成功', {icon: 1});
//
//                    }else{
//                        layer.msg('删除失败', {icon: 2});
//                    }
//                }
//            })
//
//
//
//        });
//    })
</script>

<!--模板-->
<style>
    .addTemplet{border:1px solid red;background-color: #fff;}
    .btn{margin: 10px;}
</style>
<!--添加模板-->

<div  id=\"templet\" style=\"display: none;\" class=\"layui-row layui-col-space10 addTemplet\">
    <table class=\"layui-table\">
        <colgroup>
            <col width=\"150\">
            <col width=\"200\">
            <col>
        </colgroup>

        ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templetList"]) ? $context["templetList"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 281
            echo "        <tr>
            <td>";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</td>
            <td><button _id=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\" onclick=\"addTpl(this)\" class=\"layui-btn layui-btn-radius addTpl\">添加</button></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "

    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "system/editUserAuthority.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 287,  485 => 284,  481 => 283,  477 => 282,  474 => 281,  470 => 280,  429 => 242,  419 => 235,  390 => 209,  380 => 202,  357 => 182,  349 => 177,  290 => 121,  286 => 120,  252 => 88,  237 => 86,  233 => 85,  223 => 77,  199 => 74,  196 => 73,  192 => 72,  183 => 65,  159 => 62,  156 => 61,  152 => 60,  142 => 53,  127 => 43,  121 => 42,  115 => 41,  109 => 40,  103 => 39,  97 => 38,  91 => 37,  85 => 36,  79 => 35,  68 => 27,  64 => 26,  55 => 20,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
        <legend>编辑用户权限</legend>
        <div class=\"layui-field-box layui-form\" style=\"width:80%;margin:0 auto;\">
            <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=system&a=saveUser\" method=\"post\">


                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐名</label>
                    <div class=\"layui-input-block\">
                        <input type=\"hidden\" name=\"id\" value=\"{{data.id}}\">
                        <input type=\"text\" disabled name=\"name\"  value=\"{{data.name}}\" required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入套餐名\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">有效时间</label>
                    <div class=\"layui-input-block\">
                        <select name=\"deadline\" disabled lay-verify=\"required\">
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



                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">套餐简介</label>
                    <div class=\"layui-input-block\">
                        <textarea name=\"introduce\"  disabled placeholder=\"请输入内容\" class=\"layui-textarea\">{{data.introduce}}</textarea>
                    </div>
                </div>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐包含应用:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in appList %}

                        <input type=\"checkbox\"  disabled {% for k,v in data.application %}  {% if value.id==v %} checked=\"checked\" {% endif %}    {% endfor %} value=\"1\" name=\"application[{{value.id}}]\" title=\"{{value.name}}\">

                        {% endfor %}
                    </div>
                </div>
                <hr>

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">套餐包含模板:</label>
                    <div class=\"layui-input-block\">
                        {% for key, value in templetList %}

                        <input type=\"checkbox\" disabled {% for k,v in data.templet %}  {% if value.id==v %}  checked=\"checked\" {% endif %}  {% endfor %} value=\"1\" name=\"templet[{{value.id}}]\" title=\"{{value.name}}\">

                        {% endfor %}

                    </div>
                </div>


                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">附加模板:</label>
                    <div class=\"layui-input-block tpl\">
                        {% for key, value in templet %}
                        <div class=\"layui-btn layui-btn-primary btn deleteTpl \"   onclick=\"deleteTpl(this)\" id=\"deleteTpl{{key}}\" name=\"{{value}}\"  _id=\"{{key}}\">{{value}}<i class=\"layui-icon \"  style=\"font-size: 20px; color: darkred;\">&#x1006;</i> </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">

                        <div  class=\"layui-btn layui-btn-normal templet\"   >添加模板</div>
                        <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">附加应用:</label>
                    <div class=\"layui-input-block\">


                    </div>
                </div>



                <div class=\"layui-form-item\" >
                    <div class=\"layui-input-block\">
                        <button  class=\"layui-btn layui-btn-warm\"  >添加应用</button>

                    </div>
                </div>




                <!--<div class=\"layui-form-item\" >-->
                    <!--<div class=\"layui-input-block\">-->
                        <!--<input type=\"hidden\" name=\"submit\" value=\"edit\">-->
                        <!--<input type=\"hidden\" name=\"validate\" value=\"{{data.validate}}\">-->
                        <!--<input type=\"hidden\" name=\"uid\" value=\"{{_GPC['uid']}}\">-->
                        <!--<input type=\"submit\" class=\"layui-btn\" value=\"编辑用户权限\" lay-submit=\"\" lay-filter=\"demo1\">-->
                        <!--&lt;!&ndash;<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">&ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
            </form>
        </div>
    </fieldset>
    <!--<div class=\"admin-table-page\">-->
    <!--<div id=\"paged\" class=\"page\"><div class=\"layui-box layui-laypage layui-laypage-default\" id=\"layui-laypage-0\"><span class=\"layui-laypage-curr\"><em class=\"layui-laypage-em\"></em><em>1</em></span><a href=\"javascript:;\" data-page=\"2\">2</a><a href=\"javascript:;\" data-page=\"3\">3</a><a href=\"javascript:;\" data-page=\"4\">4</a><a href=\"javascript:;\" data-page=\"5\">5</a><span>…</span><a href=\"javascript:;\" class=\"layui-laypage-last\" title=\"尾页\" data-page=\"19\">末页</a><a href=\"javascript:;\" class=\"layui-laypage-next\" data-page=\"2\">下一页</a></div></div>-->
    <!--</div>-->
</div>



<script>

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
    layui.use('layer', function(){
        var layer = layui.layer;

        \$('.templet').click(function(){
           // \$(\"#templet\").show();
          //  var html='<div id=\"templet\" class=\"layui-row layui-col-space10 addTemplet\"><div class=\"layui-col-md4\">1/3</div><div class=\"layui-col-md4\">1/3</div><div class=\"layui-col-md4\">1/3</div></div>';
            var html=\$('#templet').html();

            layer.open({
                type: 1,
                title: '添加模板',
                skin: 'layui-layer-molv', //样式类名
                closeBtn: 2, //不显示关闭按钮
                anim: 2,
                area: ['500px','500px'],
                shadeClose: true, //开启遮罩关闭
                content: html
            });
            \$(\".layui-layer-shade\").css('background-color','');

        })






    });



    function addTpl(t){
        var id=\$(t).attr('_id');
        var name=\$(t).attr('name');
        var uid=\"{{_GPC['uid']}}\";
        \$('.layui-layer').hide();

        \$.ajax({
            //脚本地址
            url:\"{{ _G['APP_URL'] }}?m=web&c=templet&a=addUserTpl\",
            type:'get',
            data:{id:id,name:name,uid:uid},
            dataType:'json',
            success:function(data){

                if(data.code==8001){
                    layer.msg('添加成功', {icon: 1});
                    var div='<div class=\"layui-btn layui-btn-primary deleteTpl\"  onclick=\"deleteTpl(this)\" id=\"deleteTpl'+id+'\" name=\"'+name+'\"  _id=\"'+id+'\" >'+name+'<i class=\"layui-icon \" style=\"font-size: 20px; color: darkred;\">&#x1006;</i> </div>';
                    \$('.tpl').append(div);
                }else{
                    layer.msg('添加失败', {icon: 2});
                }
            }
        })
    }

    function deleteTpl(t){
        var id=\$(t).attr('_id');
        var name=\$(t).attr('name');
        var uid=\"{{_GPC['uid']}}\";
        //询问框
        layer.confirm('您确定要删除这个模板吗？', {
            btn: ['确认','取消'] //按钮
        }, function(){
            \$.ajax({
                //脚本地址
                url:\"{{ _G['APP_URL'] }}?m=web&c=templet&a=deleteTpl\",
                type:'get',
                data:{id:id,name:name,uid:uid},
                dataType:'json',
                success:function(data){

                    if(data.code==8001){

                        \$(t).remove();
                        layer.msg('删除成功', {icon: 1});

                    }else{
                        layer.msg('删除失败', {icon: 2});
                    }
                }
            })



        });
    }

//    \$('.deleteTpl').click(function(){
//
//        var id=\$(this).attr('_id');
//        var name=\$(this).attr('name');
//        var uid=\"{{_GPC['uid']}}\";
//        //询问框
//        layer.confirm('您确定要删除这个模板吗？', {
//            btn: ['确认','取消'] //按钮
//        }, function(){
//            \$.ajax({
//                //脚本地址
//                url:\"{{ _G['APP_URL'] }}?m=web&c=templet&a=deleteTpl\",
//                type:'get',
//                data:{id:id,name:name,uid:uid},
//                dataType:'json',
//                success:function(data){
//
//                    if(data.code==8001){
//
//                        \$(\"#deleteTpl\"+id).remove();
//                        layer.msg('删除成功', {icon: 1});
//
//                    }else{
//                        layer.msg('删除失败', {icon: 2});
//                    }
//                }
//            })
//
//
//
//        });
//    })
</script>

<!--模板-->
<style>
    .addTemplet{border:1px solid red;background-color: #fff;}
    .btn{margin: 10px;}
</style>
<!--添加模板-->

<div  id=\"templet\" style=\"display: none;\" class=\"layui-row layui-col-space10 addTemplet\">
    <table class=\"layui-table\">
        <colgroup>
            <col width=\"150\">
            <col width=\"200\">
            <col>
        </colgroup>

        {% for key, value in templetList %}
        <tr>
            <td>{{value.image}}</td>
            <td>{{value.name}}</td>
            <td><button _id=\"{{value.id}}\" name=\"{{value.name}}\" onclick=\"addTpl(this)\" class=\"layui-btn layui-btn-radius addTpl\">添加</button></td>
        </tr>
        {% endfor %}


    </table>
</div>
{% endblock %}", "system/editUserAuthority.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\system\\editUserAuthority.html");
    }
}
