<?php

namespace Api\Chart\Configuration\FusionChart;

use Api\Chart\Configuration\FusionChart\ChartConfigurator;


class BarChartConfigurator extends ChartConfigurator
{
    public function configure(array $options = [])
    {

        $chartOptions = [
            "caption" => "Top 10 Most Populous Countries",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha"=> "20",
            "canvasBorderAlpha"=> "0",
            "usePlotGradientColor"=> "0",
            "plotBorderAlpha"=> "10",
            "showXAxisLine"=> "1",
            "xAxisLineColor" => "#999999",
            "showValues" => "0",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0"
        ];

        $dataSource = $this->getSeries();

        $this->getChartHandler()->setDataSource(json_encode(['chart' => $chartOptions, 'data' => $dataSource]));

        $this->getChartHandler()->setRenderAt($this->getTarget());

        $this->getChartHandler()->setType("column2d");

        return $this->getChartHandler();
    }
}