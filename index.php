<!-- provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da 
acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a 
degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->

<?php
class User
{
    // PROPRIETA'
    protected $name;
    protected $surname;
    protected $email;
    protected $age;
    protected $discount;
    protected $amount;

    //CONSTRUTTORE
    public function __construct($_name, $_surname, $_email, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->age = $_age;
    }
}
$user = new User('Bianca', 'Rossi', 'b.rossi@email.it', 32);
var_dump($user);

class Prime extends User
{
    private function setDiscount()
    {
        $this->discount = 10;
    }

    public function getDiscount()
    {
        $this->setDiscount();
        return $this->discount;
    }
}

$prime = new Prime('Antonio', 'Verdi', 'a.verdi@email.it', 45);
var_dump($prime);
