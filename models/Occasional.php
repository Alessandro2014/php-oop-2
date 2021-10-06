<?php
class Occasional extends User
{
    private $expedition;
    private $amount;

    public function __construct($_name, $_surname, $_email, $_age, $_expedition, $_amount)
    {
        $this->expedition = $_expedition;
        $this->amount = $_amount;
        parent::__construct($_name, $_surname, $_email, $_age);
    }

    public function getAmount()
    {
        return $this->amount;
    }

    // METODO PER STABILIRE COSTO DI SPEDIZIONE
    public function getExpedition()
    {
        if ($this->amount > 50) {
            return 'Spedizione Gratuita';
        }
        return 'Costo di spedizione 5€';
    }
}
