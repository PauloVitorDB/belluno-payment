<?php

namespace BellunoApi\Model;

use JsonSerializable;
use BellunoApi\Model\OrderItemModel;

abstract class OrderModel implements JsonSerializable {

    /**
    * @var \BellunoApi\Model\OrderItemModel[] $items
    **/
    protected $items = [];
    
    protected \BellunoApi\Model\PostbackModel $postback;

    protected $value;

    /**
     * Get the value of items
     * @return \BellunoApi\Model\OrderItemModel[]
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     * @param \BellunoApi\Model\OrderItemModel $item
     * @return  self
     */ 
    public function addItem(OrderItemModel $item)
    {
        array_push($this->items, $item);

        return $this;
    }

    /**
     * Get the value of postback
     */ 
    public function getPostback()
    {
        return $this->postback;
    }

    /**
     * Set the value of postback
     *
     * @return  self
     */ 
    public function setPostback($postback)
    {
        $this->postback = $postback;

        return $this;
    }
    
    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

}