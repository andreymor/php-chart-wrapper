<?php

    class FusionCharts {
        
        private $constructorOptions = array();

        private $id;

        private $type;

        private $width = 400;

        private $height = 300;

        private $renderAt;

        private $dataFormat = 'json';

        private $dataSource = [];

        private $constructorTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                new FusionCharts(__constructorOptions__);
            });
        </script>';

        private $renderTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                FusionCharts("__chartId__").render();
            });
        </script>
        ';


        public function init()
        {

            $this->constructorOptions['type'] = $this->getType();
            $this->constructorOptions['id'] = $this->getId();
            $this->constructorOptions['width'] = $this->getWidth();
            $this->constructorOptions['height'] = $this->getHeight();
            $this->constructorOptions['renderAt'] = $this->getRenderAt();
            $this->constructorOptions['dataFormat'] = $this->getDataFormat();
            $this->constructorOptions['dataSource'] = $this->getDataSource();

            $tempArray = [
                'dataSource' => '__dataSource__',
                'id' => $this->getId(),
                'width' => $this->getWidth(),
                'height' => $this->getHeight(),
                'renderAt' => $this->getRenderAt(),
                'dataFormat' => $this->getDataFormat(),
                'type' => $this->getType()
            ];

            $jsonEncodedOptions = json_encode($tempArray);

            if ($this->getDataFormat() === 'json') {
                $jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', $this->getDataSource(), $jsonEncodedOptions);
            } elseif ($this->getDataFormat() === 'xml') {
                $jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', '\'__dataSource__\'', $jsonEncodedOptions);
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->getDataSource(), $jsonEncodedOptions);
            } elseif ($this->getDataFormat() === 'xmlurl') {
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->getDataSource(), $jsonEncodedOptions);
            } elseif ($this->getDataFormat() === 'jsonurl') {
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->getDataSource(), $jsonEncodedOptions);
            }
            $newChartHTML = preg_replace('/__constructorOptions__/', $jsonEncodedOptions, $this->constructorTemplate);

            return $newChartHTML;
        }

        function render() {
            echo $this->init();
           $renderHTML = preg_replace('/__chartId__/', $this->constructorOptions['id'], $this->renderTemplate);
           echo $renderHTML;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return ($this->id) ? $this->id : 'php-fc-'.time();
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
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
        }

        /**
         * @return int
         */
        public function getWidth()
        {
            return $this->width;
        }

        /**
         * @param int $width
         */
        public function setWidth($width)
        {
            $this->width = $width;
        }

        /**
         * @return int
         */
        public function getHeight()
        {
            return $this->height;
        }

        /**
         * @param int $height
         */
        public function setHeight($height)
        {
            $this->height = $height;
        }

        /**
         * @return mixed
         */
        public function getRenderAt()
        {
            return $this->renderAt;
        }

        /**
         * @param mixed $renderAt
         */
        public function setRenderAt($renderAt)
        {
            $this->renderAt = $renderAt;
        }

        /**
         * @return string
         */
        public function getDataFormat()
        {
            return $this->dataFormat;
        }

        /**
         * @param string $dataFormat
         */
        public function setDataFormat($dataFormat)
        {
            $this->dataFormat = $dataFormat;
        }

        /**
         * @return array
         */
        public function getDataSource()
        {
            return $this->dataSource;
        }

        /**
         * @param array $dataSource
         */
        public function setDataSource($dataSource)
        {
            $this->dataSource = $dataSource;
        }
    }
?>
