<?php
include_once 'LinkList.php';

$linkList = new LinkList();

$linkList->insertFirst(10);
$linkList->insertFirst(20);

$linkList->insertLast(30);
$linkList->insertLast(40);
$linkList->insertLast(50);

$linkList->insertFirst(100);

$data = $linkList->readList();

var_dump($data) ;