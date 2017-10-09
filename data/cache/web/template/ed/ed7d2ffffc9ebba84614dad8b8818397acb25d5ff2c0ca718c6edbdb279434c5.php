<?php

/* data/showdata.html */
class __TwigTemplate_6b3c0a639f98d4f7de9123a8e615119a843209caf4612aed01d003d12ba5f96a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>开始使用Layui</title>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\">
    <link rel=\"stylesheet\" href=\"./resource/screen/css/main.css\">
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery.gridster.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/style.css\">-->
    <link rel=\"stylesheet\" href=\"./resource/screen/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"./resource/screen/css/app.css\">

    <script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
    <script src=\"./resource/screen/js/jquery-ui.min.js\"></script>


</head>
<body >

<script src=\"./resource/chart/js/echarts.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script src=\"./resource/screen/js/draggable.js\"></script>
<!--<script src=\"./resource/screen/js/main.js\"></script>-->

<div class=\"main\" id=\"containment-wrapper\">
    ";
        // line 27
        echo twig_include($this->env, $context, "attachment/htmls/0/2017/09/mGn77T4t1T00t1036g400vPI737000.html");
        echo "
</div>



<script type=\"text/javascript\">
    var dom = document.getElementById(\"main\");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    \$.when(
        layui.link('./template/components/carousel/carousel.css'),
        \$.getScript('./template/components/carousel/carousel.js')

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
    \$('.big-right').remove();

</script>

";
        // line 94
        echo twig_include($this->env, $context, "common/footerScreen.html");
    }

    public function getTemplateName()
    {
        return "data/showdata.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 94,  47 => 27,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>开始使用Layui</title>
    <link rel=\"stylesheet\" href=\"./resource/layui/css/layui.css\">
    <link rel=\"stylesheet\" href=\"./resource/screen/css/main.css\">
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/jquery.gridster.css\">-->
    <!--<link rel=\"stylesheet\" href=\"./resource/screen/css/style.css\">-->
    <link rel=\"stylesheet\" href=\"./resource/screen/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"./resource/screen/css/app.css\">

    <script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
    <script src=\"./resource/screen/js/jquery-ui.min.js\"></script>


</head>
<body >

<script src=\"./resource/chart/js/echarts.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script src=\"./resource/screen/js/draggable.js\"></script>
<!--<script src=\"./resource/screen/js/main.js\"></script>-->

<div class=\"main\" id=\"containment-wrapper\">
    {{ include('attachment/htmls/0/2017/09/mGn77T4t1T00t1036g400vPI737000.html') }}
</div>



<script type=\"text/javascript\">
    var dom = document.getElementById(\"main\");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    \$.when(
        layui.link('./template/components/carousel/carousel.css'),
        \$.getScript('./template/components/carousel/carousel.js')

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
    \$('.big-right').remove();

</script>

{{ include('common/footerScreen.html') }}", "data/showdata.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\data\\showdata.html");
    }
}
