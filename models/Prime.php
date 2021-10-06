<?php

class Prime extends User
{
    private $discount;
    private $creditCard;

    public function __construct($_name, $_surname, $_email, $_age, $_discount = 10, $_creditCard)
    {
        $this->discount = $_discount;
        $this->creditCard = $_creditCard;
        parent::__construct($_name, $_surname, $_email, $_age);
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }
    // SETTO LO SCONTO
    private function setDiscount()
    {
        $this->discount = 'Hai diritto ad uno sconto del' . ' '  . $this->discount . '%';
    }
    // STAMPO LO SCONTO
    public function getDiscount()
    {
        $this->setDiscount();
        return $this->discount;
    }
}
