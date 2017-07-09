<?php

class Customer
{
    public $basket = null;
    private $name;

    public function __construct()
    {
        if (!$this->basket) {
            $this->basket = new Basket();
        }
    }

    public function getName() {
        echo $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


}


/******************
 * TESTING
 ******************/

$person = new Customer();
$person->setName('Me');
$person->basket->addToBasket('drinks', 'beer', 2);
$person->basket->addToBasket('fruits', 'grapefruit', 3);
$person->basket->addToBasket('fruits', 'peaches', 4);
$person->basket->addToBasket('fruits', 'cherries', '1');
$person->basket->addToBasket('fruits', 'cherries', '2');
$person->basket->addToBasket('veggies', 'tomato', 3);


$person_1 = new Customer();
$person_1->setName('You');
$person_1->basket->addToBasket('fruits', 'coconut');
$person_1->basket->addToBasket('fruits', 'pineapple', 2);
$person_1->basket->addToBasket('veggies', 'tomato', 5);
$person_1->basket->addToBasket('veggies', 'cucumber', 2);
$person_1->basket->addToBasket('veggies', 'onion' );
$person_1->basket->addToBasket('drinks', 'rakia');
$person_1->basket->addToBasket('fruits', 'apricot', '1');
$person_1->basket->addToBasket('fruits', 'apricot', '0.5');

//$data = $person1->basket->getAndRemove('veggies', 'tomato');
//if ($data != null){
//    $person->basket->addToBasket('veggies','tomato', $data);
//}

d($person);
d($person_1);
