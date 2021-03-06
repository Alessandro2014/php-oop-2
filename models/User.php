<!-- provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da 
acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditariet√† dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a 
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
    
    //CONSTRUTTORE
    public function __construct($_name, $_surname, $_email, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->age = $_age;
    }

    public function getWelcome()
    {
        return 'Benvenuto ' . $this->name . ' ' . $this->surname;
    }

}
// $user = new User();
// var_dump($user);