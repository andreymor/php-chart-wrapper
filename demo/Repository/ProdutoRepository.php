<?php

namespace Api\Chart;

class ProdutoRepository
{

    public function getPieChartData()
    {
        return array(
            array(
                "Firefox",
                45
            ),
            array(
                "IE",
                26.8
            ),
            array(
                'name' => 'Chrome',
                'y' => 12.8,
                'sliced' => true,
                'selected' => true
            ),
            array(
                "Safari",
                8.5
            ),
            array(
                "Opera",
                6.2
            ),
            array(
                "Others",
                0.7
            )
        );
    }

    /**
     * @return array
     */
    public function getLineChartData()
    {
        return [
            'Tokyo' => array(
                7.0,
                6.9,
                9.5,
                14.5,
                18.2,
                21.5,
                25.2,
                26.5,
                23.3,
                18.3,
                13.9,
                9.6
            ),
            'New York' => array(
                - 0.2,
                0.8,
                5.7,
                11.3,
                17.0,
                22.0,
                24.8,
                24.1,
                20.1,
                14.1,
                8.6,
                2.5
            ),
            'Berlin' => array(
                - 0.9,
                0.6,
                3.5,
                8.4,
                13.5,
                17.0,
                18.6,
                17.9,
                14.3,
                9.0,
                3.9,
                1.0
            )
        ];
    }

    /**
     * @return array
     */
    public function getBarChartData()
    {
        return [
                "Bakersfield Central" => '880000',
                "Los Angeles Topanga" => '730000',
                "Compton-Rancho Dom" => "520000"
                ];
    }

}