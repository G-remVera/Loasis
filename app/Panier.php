<?php

namespace App;

class Panier
{
    public $item = null;
    public $totalQty = 0;
    public $totalPrix = 0;

    public function __construct($oldPanier)
    {
        if ($oldPanier){
            $this->items = $oldPanier->items;
            $this->totalQty = $oldPanier->totalQty;
            $this->totalPrix = $oldPanier->totalPrix;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty'=>0, 'prix'=>$item->prix, 'item'=>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['prix']=$item->prix * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrix += $item->prix;

    }

}
