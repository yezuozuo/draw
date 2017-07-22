<?php
/**
 * Created by PhpStorm.
 * User: zoco
 * Date: 17/5/18
 * Time: 18:32
 */

require __DIR__.'/vendor/autoload.php';

$graph = new Fhaculty\Graph\Graph();

$blue = $graph->createVertex('王');
$blue->setAttribute('graphviz.color', 'blue');

$red = $graph->createVertex('志浩');
$red->setAttribute('graphviz.color', 'red');

$edge = $blue->createEdgeTo($red);
$edge->setAttribute('graphviz.color', 'grey');

$graphviz = new Graphp\GraphViz\GraphViz();
$graphviz->display($graph);