<?php

include 'Customer.php';

function d($d)
{
    echo "<pre>";

    print_r($d);
    echo "\n";
}

class Basket
{

      public $fruits = [];
      public $veggies = [];

    public function viewBasketTable()
    {

    echo "<table border='1'>";
    echo "<tr>";
    echo "</tr>";
    foreach ($this as $categories => $category){
        echo "<tr>";
        foreach ($category as $items => $value){
            echo "<td>" .$categories. "</td>";
            echo "<td>" .$items."</td>";
            echo "<td>" .$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }




    public function addToBasket($category, $item, $amount = 1)
    {
        !isset($this->{$category}[$item]) ? $this->{$category}[$item] = $amount : $this->{$category}[$item] += $amount ;
        if (!is_int($amount)){
            $this->{$category}[$item] = $this->{$category}[$item]  . 'kg';
        }
    }


    public function addCategoryToBasket($category)
    {
        $this->{$category} = [];
    }

    // Passing $item through Baskets

    public function getAndRemove ($category, $item = null, $amount = null)
    {
        $result = null;
        if ($item === null && $amount === null){
            $result = $this->{$category};
            unset ($this->{$category});
        }
        if ($item !== null) {
            if ($amount !== null) {
                $currentAmount = $this->{$category}[$item];
                if (($currentAmount - $amount) > 0) {
                    $this->{$category}[$item] -= $amount;
                    $result = $amount;
                }

            } else {
                $result = $this->{$category}[$item];
                unset ($this->{$category}[$item]);
            }

        }
        return $result;
    }

    // Just removing an $item

    public function removeFromBasket($category, $item, $amount = null)
    {

        if ($amount != null) {
            $currentAmount = $this->{$category}[$item];
            if (($currentAmount - $amount) > 0) {
                $this->{$category}[$item] -= $amount;
            }else{
                unset ($this->{$category}[$item]);
            }
        }
    }



    public function sortBasketByValue($category)
    {
        asort($this->{$category});
    }


}
