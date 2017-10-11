<?php
namespace Framework\functions;
/**
 * 基础图表控件
 *
 * @package  lnmpbao
 * @author   宝宝技术团队  <baobao@lnmpbao.com>
 */
trait baseChart{


    /**
     * 【基础图表控件】:柱状图
     * @param array $tab 横坐标值
     * @param array $parameter 柱状数量
     * @return string
     */
    public function baseBarChart($tab,$parameter,$width=400,$height=300){
        if(!is_array($tab)){
            throw new \Exception($tab.'不是一个数组');
        }
        if(!is_array($parameter)){
            throw new \Exception($parameter.'不是一个数组');
        }

        $tabs='';
        $param='';
        foreach($tab as $value){
            $tabs.='"'.$value.'",';

        }

        foreach($parameter as $value){

            $param.='{
                        fillColor : "'.$value['fillColor'].'",
                        strokeColor : "'.$value['strokeColor'].'",
                        data : '.json_encode($value['data']).'
                    },';
        }

        $data='{labels : ['.rtrim($tabs,',').'],
                datasets : [
                    '.rtrim($param,',').'
                ]}';



        $tpl="";
        $tpl.='
             <article id="barChart" >
                <h1>柱状图</h1>
    
                <canvas id="bar" data-type="Bar" width="'.$width.'" height="'.$height.'"></canvas>
                <code style="display:none;">new Chart(ctx).Bar(data,options);</code>
    
                <code style="display:none;" data-for="bar">var data = '.$data.'</code>
    
    
    </article>
        ';

        return $tpl;
    }


}
