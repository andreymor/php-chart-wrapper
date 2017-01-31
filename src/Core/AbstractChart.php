<?php

namespace Api\Chart;

use Api\Chart\IChartConfigurator;


abstract class AbstractChart extends AbstractChartConfigurator implements IChart
{

    /**
     * @var
     */
    private $configuratorHandler;

    /**
     * @var
     */
    private $type;

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
    public function setConfiguratorHandler(IChartConfigurator $configuratorHandler)
    {
        $this->configuratorHandler = $configuratorHandler;
    }
    /**
     * @return mixed
     */
    public function getRenderMethod()
    {
        return $this->renderMethod;
    }

    /**
     * @param mixed $renderMethod
     */
    public function setRenderMethod($renderMethod)
    {
        $this->renderMethod = $renderMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function generate()
    {
        if($this->getConfiguratorHandler()->renderMethod)
            return $this->getConfiguratorHandler()->getChartHandler()->{$this->getConfiguratorHandler()->renderMethod}();
    }

    public function jsScripts()
    {
        if($this->getConfiguratorHandler()->scriptsMethod)
            return $this->getConfiguratorHandler()->getChartHandler()->{$this->getConfiguratorHandler()->scriptsMethod}();
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}