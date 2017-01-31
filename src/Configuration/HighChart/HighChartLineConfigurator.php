<?php

namespace Api\Chart\Configuration\HighChart;

use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;
use Api\Chart\AbstractChart;
use Api\Chart\AbstractChartConfigurator;
use Api\Chart\ChartType;


class HighChartLineConfigurator extends HighChartConfigurator
{
    public function configure(array $options = [])
    {
        $this->getChartHandler()->chart = array(
            'renderTo' => $this->getTarget(),
            'type' => 'line',
            'marginRight' => 130,
            'marginBottom' => 25
        );
        $this->getChartHandler()->chart->title = array(
            'text' => 'Monthly Average Temperature',
            'x' => - 20
        );
        $this->getChartHandler()->chart->subtitle = array(
            'text' => 'Source: WorldClimate.com',
            'x' => - 20
        );
        $this->getChartHandler()->chart->xAxis->categories = array(
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        );
        $this->getChartHandler()->chart->yAxis = array(
            'title' => array(
                'text' => 'Temperature (°C)'
            ),
            'plotLines' => array(
                array(
                    'value' => 0,
                    'width' => 1,
                    'color' => '#808080'
                )
            )
        );
        $this->getChartHandler()->chart->legend = array(
            'layout' => 'vertical',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => - 10,
            'y' => 100,
            'borderWidth' => 0
        );

        $this->getChartHandler()->series = $this->getSeries();

        return $this->getChartHandler();
    }
}