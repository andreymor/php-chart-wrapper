<?php

namespace Api\Chart;

use Api\Chart\IChartConfigurator;
use Api\Chart\IChart;


abstract class AbstractChartConfigurator implements IChartConfigurator
{
    private $chartHandler;

    private $name;

    private $data;

    public $renderMethod = 'render';

    public $scriptsMethod;

    private $target;

    public $series = [];

    /**
     * @return mixed
     */
    public function getChartHandler()
    {
        return $this->chartHandler;
    }

    public function configure(array $options = []){}

    /**
     * @param mixed $chartHandler
     */
    public function setChartHandler($chartHandler)
    {
        if(!is_object($chartHandler)) {
            throw new ChartConfigurationException('O chartHandler informado deve ser uma instância de objeto.');
        }
        $this->chartHandler = $chartHandler;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfiguratorHandler()
    {
        return $this->configuratorHandler;

    }

    /**
     * @param mixed $configuratorHandler
     */
    public function setConfiguratorHandler($configuratorHandler)
    {
        $this->configuratorHandler = $configuratorHandler;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
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