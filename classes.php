<?php

class Produit {
    public $id;
    public $name;
    public $quantity;
    public $price;

    function __construct($id, $name, $quantity, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPrice(){
        return $this->price;
    }

    public function totalAmount() {
        return ($this->quantity * $this->price);
    }
}

class Panier {
    public $products = array();
    public $panierAmount = 0;

    public function getPanierAmount(){
        return $this->panierAmount;
    }
  
    public function addProduct($prod) {
        $idp=false;
        foreach ($this->products as $p){
            if ($prod->id == $p->id){
                $p->quantity+=$prod->quantity;
                $idp=true;

            break;
            }
        }
        if (!$idp){
            array_push($this->products, $prod);
            $this->panierAmount += $prod->totalAmount();
        }
            
    }


    public function removeProduct($prod) {
        if (in_array($prod, $this->products)) 
            {
                unset($this->products[array_search($prod,$this->products)]);
            }
    }


    public function devis() {
        $devis = 0;
        foreach($this->products as $produit){
            $devis+=$produit->totalAmount();
        }
        return $devis;
    }
}

?>