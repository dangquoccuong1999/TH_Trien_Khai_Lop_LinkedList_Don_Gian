<?php
include_once 'Node.php';

class LinkList
{
    private $firstNode, $lastNode, $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    // lay so luong node

    public function count()
    {
        return $this->count();
    }

    //doc danh sach

    public function readList()
    {
        $listArray = array();
        $current = $this->firstNode;

        while ($current != null) {
            array_push($listArray, $current->readNode());
            $current = $current->next;
        }
        return $listArray;
    }
}