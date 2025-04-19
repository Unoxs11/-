<?php

namespace app\widgets\charts;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Pie extends Widget
{
    public $c;
    public $e;
    public $l;

    public function init()
    {
        $c = $this -> c??1;
        $l = $this -> l??1;
        $e = $this -> e??1;
        parent::init();
        $js = <<<js
        google.charts.load('current', {'packages':['corechart', 'table', 'sankey']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Количество', 'Всего', { role: 'style' } ],
            ['Опросов', $e, 'color: red'],
            ['Голосований', $l, 'color: green'],
            ['Ответов всего', $c, 'color: blue'],
        ]);
            var options = {'title':'Общее количество учебных материалов',
                        'width':600,
                        'height':400};

            var chart = new google.visualization.ColumnChart(document.getElementById('chart'));
            chart.draw(data, options);
        }
        js;
        $view = $this->getView();
        GoogleChartAsset::register($view);
        $view->registerJs($js);
    }

}