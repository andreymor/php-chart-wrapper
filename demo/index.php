<?php
/**
 * Created by IntelliJ IDEA.
 * User: andreymoretti
 * Date: 27/01/17
 * Time: 17:18
 */
require_once('libs/highCharts/HighchartJsExpr.php');

require_once('libs/highCharts/HighchartOptionRenderer.php');
require_once('libs/highCharts/HighchartOption.php');
require_once('libs/highCharts/Highchart.php');
require_once('libs/fusionCharts/fusioncharts.php');
require_once('src/Interface/IChart.php');
require_once('src/Interface/IChartConfigurator.php');
require_once('src/Core/AbstractChartConfigurator.php');
require_once('src/Core/AbstractChart.php');
require_once('src/Configuration/HighChart/HighChartConfigurator.php');
require_once('src/Configuration/HighChart/HighChartPieConfigurator.php');
require_once('src/Configuration/HighChart/HighChartLineConfigurator.php');
require_once('src/Configuration/FusionChart/ChartConfigurator.php');
require_once('src/Configuration/FusionChart/BarChartConfigurator.php');
require_once('src/Core/Chart.php');
require_once('src/Repository/ProdutoRepository.php');
require_once('src/Service/ProdutoService.php');
require_once('src/Controller/ProdutoController.php');

$controller = new \Api\Chart\Controller\ProdutoController();
$pie = $controller->pie('container-pie');
$line = $controller->line('container-line');
$bar = $controller->bar('container-bar');


?>

<html>
<head>
    <title>Pie chart</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $pie->jsScripts(); ?>
    <?php $line->jsScripts(); ?>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
</head>
<body>
<h1>HighChart - PIE</h1>
<div id="container-pie"></div>
<script type="text/javascript"><?php echo $pie->generate(); ?></script>
<h1>HighChart - LINE</h1>
<div id="container-line"></div>
<script type="text/javascript"><?php echo $line->generate(); ?></script>
<h1>FusionChart - BAR</h1>
<div id="container-bar"></div>

<?php $bar->generate(); ?>

</body>
</html>
