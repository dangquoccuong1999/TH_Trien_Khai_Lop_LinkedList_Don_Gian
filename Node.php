<?php


class Node
{
    public $data, $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}