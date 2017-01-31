<?php

namespace Api\Chart\Configuration\FusionChart;

use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;
use Api\Chart\AbstractChart;
use Api\Chart\AbstractChartConfigurator;
use Api\Chart\ChartType;


class ChartConfigurator extends AbstractChartConfigurator
{

    public function __construct()
    {
        $this->setChartHandler(new \FusionCharts());
    }
}