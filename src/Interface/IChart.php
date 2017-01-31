<?php

namespace Api\Chart;

use Api\Chart\IChartConfigurator;

interface IChart
{
    public function generate();

    public function setConfiguratorHandler(IChartConfigurator $configurator);

    public function setRenderMethod($renderMethod);
}