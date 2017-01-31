<?php

namespace Api\Chart\Configuration\HighChart;

use Ghunti\HighchartsPHP\HighchartJsExpr;
use Api\Chart\ChartType;

class HighChartPieConfigurator extends HighChartConfigurator
{
    public function configure(array $options = [])
    {
        $this->getChartHandler()->chart->renderTo = $this->getTarget();
        $this->getChartHandler()->chart->type = 'pie';
        $this->getChartHandler()->chart->plotBackgroundColor = null;
        $this->getChartHandler()->chart->plotBorderWidth = null;
        $this->getChartHandler()->chart->plotShadow = false;
        $this->getChartHandler()->title->text = "Browser market shares at a specific website, 2010";
        $this->getChartHandler()->tooltip->formatter = new HighchartJsExpr("function() { return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';}");
        $this->getChartHandler()->plotOptions->pie->allowPointSelect = 1;
        $this->getChartHandler()->plotOptions->pie->cursor = "pointer";
        $this->getChartHandler()->plotOptions->pie->dataLabels->enabled = 1;
        $this->getChartHandler()->plotOptions->pie->dataLabels->color = "#000000";
        $this->getChartHandler()->plotOptions->pie->dataLabels->connectorColor = "#000000";
        $this->getChartHandler()->plotOptions->pie->dataLabels->formatter = new HighchartJsExpr("function() { return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %'; }");
        $this->getChartHandler()->series = $this->getSeries();

        return $this->getChartHandler();
    }
}