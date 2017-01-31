<?php

namespace Api\Chart\Configuration\HighChart;

use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;
use Api\Chart\AbstractChart;
use Api\Chart\AbstractChartConfigurator;
use Api\Chart\ChartType;


class HighChartConfigurator extends AbstractChartConfigurator
{
    private $target;

    public $renderMethod = 'render';

    public $scriptsMethod = 'printScripts';

    public $series = [];

    public function __construct()
    {
        $this->setChartHandler(new Highchart());
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @return array
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param array $series
     */
    public function addSeries($series)
    {
        $this->series[] = $series;
        return $this;
    }
}