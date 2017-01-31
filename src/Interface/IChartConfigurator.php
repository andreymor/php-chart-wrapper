<?php

namespace Api\Chart;

use Api\Chart\IChart;

interface IChartConfigurator
{
    /**
     * @param $handler
     * @return mixed
     */
    public function setChartHandler($handler);

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @param $name
     * @return mixed
     */
    public function setData($name);

    /**
     * @param array $options
     * @return mixed
     */
    public function configure(array $options = []);
}