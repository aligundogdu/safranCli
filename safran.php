<?php
include __DIR__."/vendor/autoload.php";
setlocale(LC_ALL, 'UTF-8', 'tr_TR', 'tr', 'turkish');
$cc = new JakubOnderka\PhpConsoleColor\ConsoleColor();
$rss = simplexml_load_file("http://www.safran.io/feed.rss");
$results = $rss->channel->item;
foreach($results as $result){
    echo $cc->apply("yellow","\t*")." ".$cc->apply("green",$result->title)."\n\n";
    echo "\t\t".$cc->apply("white",$result->description."\n\n");
}