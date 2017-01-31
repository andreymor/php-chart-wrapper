<?php

namespace Api\Chart;

use Api\Chart\Configuration\FusionChart\BarChartConfigurator;
use Api\Chart\Configuration\HighChart\HighChartPieConfigurator;
use Api\Chart\Configuration\HighChart\HighChartLineConfigurator;
use Api\Chart\Core\Exception\ChartException;
use Api\Chart\Service\Exception\ProdutoException;

class ProdutoService
{
    /**
     * @var ProdutoRepository
     */
    private $repository;

    /**
     *
     */
    public function __construct()
    {
        $this->repository = new ProdutoRepository();
    }

    /**
     * @param $target
     * @return mixed
     * @throws ProdutoException
     */
    public function pie($target)
    {
        try{
            $chart = new Chart(new HighChartPieConfigurator());
            $chart->getConfiguratorHandler()
                ->setTarget($target)
                ->addSeries(
                    [
                    'name' => 'Pie chart',
                    'data' => $this->repository->getPieChartData()
                    ]
                );
            return $chart->create();
        }
        catch(ChartException $e) {
            throw new ProdutoException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param $target
     * @return mixed
     * @throws ProdutoException
     */
    public function line($target)
    {
        try{
            $chart = new Chart(new HighChartLineConfigurator());
            $chart->getConfiguratorHandler()
                ->setTarget($target);

            foreach($this->repository->getLineChartData() as $name => $lineData) {
                $chart->getConfiguratorHandler()->addSeries([
                    'name' => $name,
                    'data' => $lineData
                ]);
            }

            return $chart->create();
        }
        catch(ChartException $e) {
            throw new ProdutoException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param $target
     * @return mixed
     * @throws ProdutoException
     */
    public function bar($target)
    {
        try{
            $chart = new Chart(new BarChartConfigurator());
            $chart->getConfiguratorHandler()
                ->setTarget($target);

            foreach($this->repository->getBarChartData() as $name => $lineData) {
                $chart->getConfiguratorHandler()->addSeries([
                    'label' => $name,
                    'value' => $lineData
                ]);
            }

            return $chart->create();
        }
        catch(ChartException $e) {
            throw new ProdutoException($e->getMessage(), $e->getCode());
        }
    }
}