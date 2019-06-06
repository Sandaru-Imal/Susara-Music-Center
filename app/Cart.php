<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){

      if ($oldCart){
        $this->items = $oldCart->items;
        $this->$totalQty = $oldCart->$totalQty;
        $this->$totalPrice = $oldCart->$totalPrice;
      }
    }
    public function add($item, $instrumentId){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($instrumentId, $this->items)){
              $storedItem = $this->items[$instrumentId];
            }
        }
        $storedItem['qty']++;
        $this->items[$instrumentId] = $storedItem;
    }
}
