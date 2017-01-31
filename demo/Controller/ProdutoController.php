<?php

namespace Api\Chart\Controller;
use Api\Chart\ProdutoService;
use Api\Chart\Service\Exception\ProdutoException;

/**
 * Created by IntelliJ IDEA.
 * User: andreymoretti
 * Date: 27/01/17
 * Time: 14:44
 */
class ProdutoController
{
    private $service;

    public function __construct()
    {
        $this->service = new ProdutoService();
    }

    public function pie($target)
    {
        try{
            return $this->service->pie($target);
        }
        catch(ProdutoException $e) {
            echo $e->getMessage(); die;
        }
    }

    public function line($target)
    {
        try{
            return $this->service->line($target);
        }
        catch(ProdutoException $e) {
            echo $e->getMessage(); die;
        }
    }

    public function bar($target)
    {
        try{
            return $this->service->bar($target);
        }
        catch(ProdutoException $e) {
            echo $e->getMessage(); die;
        }
    }

}