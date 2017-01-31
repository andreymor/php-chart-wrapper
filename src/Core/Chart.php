<?php

namespace Api\Chart;

use Api\Chart\Configuration\Exception\ChartConfiguratorException;
use Api\Chart\Core\Exception\ChartException;
use Api\Chart\HighChartConfiguration;

class Chart extends AbstractChart
{
    public function __construct($configurator)
    {
        $this->setConfiguratorHandler($configurator);
    }

    public function create(array $options = [])
    {
        try{
            $this->getConfiguratorHandler()
                ->configure($options);
            return $this;
        }
        catch(ChartConfiguratorException $e) {
            throw new ChartException($e->getMessage(), $e->getCode());
        }
    }
}