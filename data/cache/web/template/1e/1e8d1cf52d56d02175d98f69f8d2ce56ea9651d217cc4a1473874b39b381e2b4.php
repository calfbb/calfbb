<?php

/* data/screen.html */
class __TwigTemplate_27e759e19f643e067e1a36b88b89e0fa9e9ca87616090be3d874308d7ffe0567 extends Twig_Template
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
        echo twig_include($this->env, $context, "common/headerScreen.html");
        echo "

<!--&lt;!&ndash;图层开始&ndash;&gt;-->
<div class=\"main\"   style=\"width: 100%;height:100%;\" id=\"containment-wrapper\">


    <div   id=\"main\" style=\"width: 600px;height:400px;\" class=\"draggable ui-widget-content draggable3\" >
        <!--<div  style=\"width: 600px;height:400px;\"></div>-->
    </div>




</div>
<script src=\"./resource/chart/js/echarts.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script src=\"./resource/screen/js/draggable.js\"></script>
<script src=\"./resource/screen/js/main.js\"></script>


<script type=\"text/javascript\">
    var dom = document.getElementById(\"main\");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    \$.when(
//        \$.getScript('http://echarts.baidu.com/data/asset/data/timelineGDP.js'),
        \$.getScript('http://echarts.baidu.com/data/asset/data/draggable.js')
    ).done(function () {

        myChart.hideLoading();

        option = {
            title: {
                text: 'ECharts 入门示例'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: [\"衬衫\",\"羊毛衫\",\"雪纺衫\",\"裤子\",\"高跟鞋\",\"袜子\"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };



//        draggable.init(
//            \$('div[_echarts_instance_]')[0],
//            myChart,
//            {
//                width: 700,
//                height: 400,
//                throttle: 70
//            }
//        );
        myChart.setOption(option);

    });
//    if (option && typeof option === \"object\") {
//        myChart.setOption(option, true);
//    }



</script>

<script>


    //保存大屏幕
    \$('#preserve').click(function(){
        //加载层-默认风格
        layer.load();
        var main=\$(\".main\").html();

        \$.ajax({
            //脚本地址
            url:\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=file&a=saveData\",
            type:'post',
            data:{html:main},
            dataType:'html',
            success:function(data){
               console.log(data);

            }
        })

        //此处加载关闭
        setTimeout(function(){
            layer.closeAll('loading');
        }, 2000);
    })

</script>

";
        // line 103
        echo twig_include($this->env, $context, "common/footerScreen.html");
        echo "

";
    }

    public function getTemplateName()
    {
        return "data/screen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 103,  106 => 85,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('common/headerScreen.html') }}

<!--&lt;!&ndash;图层开始&ndash;&gt;-->
<div class=\"main\"   style=\"width: 100%;height:100%;\" id=\"containment-wrapper\">


    <div   id=\"main\" style=\"width: 600px;height:400px;\" class=\"draggable ui-widget-content draggable3\" >
        <!--<div  style=\"width: 600px;height:400px;\"></div>-->
    </div>




</div>
<script src=\"./resource/chart/js/echarts.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script src=\"./resource/screen/js/draggable.js\"></script>
<script src=\"./resource/screen/js/main.js\"></script>


<script type=\"text/javascript\">
    var dom = document.getElementById(\"main\");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    \$.when(
//        \$.getScript('http://echarts.baidu.com/data/asset/data/timelineGDP.js'),
        \$.getScript('http://echarts.baidu.com/data/asset/data/draggable.js')
    ).done(function () {

        myChart.hideLoading();

        option = {
            title: {
                text: 'ECharts 入门示例'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: [\"衬衫\",\"羊毛衫\",\"雪纺衫\",\"裤子\",\"高跟鞋\",\"袜子\"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };



//        draggable.init(
//            \$('div[_echarts_instance_]')[0],
//            myChart,
//            {
//                width: 700,
//                height: 400,
//                throttle: 70
//            }
//        );
        myChart.setOption(option);

    });
//    if (option && typeof option === \"object\") {
//        myChart.setOption(option, true);
//    }



</script>

<script>


    //保存大屏幕
    \$('#preserve').click(function(){
        //加载层-默认风格
        layer.load();
        var main=\$(\".main\").html();

        \$.ajax({
            //脚本地址
            url:\"{{ _G['APP_URL'] }}?m=web&c=file&a=saveData\",
            type:'post',
            data:{html:main},
            dataType:'html',
            success:function(data){
               console.log(data);

            }
        })

        //此处加载关闭
        setTimeout(function(){
            layer.closeAll('loading');
        }, 2000);
    })

</script>

{{ include('common/footerScreen.html') }}

", "data/screen.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\data\\screen.html");
    }
}
