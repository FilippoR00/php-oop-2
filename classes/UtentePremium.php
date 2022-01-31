<?php  
class UtentePremium extends Utente{
    private $discount;

    public function __construct($_nome, $_cognome, $_eta, $_creditCard, $_discount)
    {
        parent::__construct($_nome, $_cognome, $_eta, $_creditCard);
        $this->addDiscount($_discount);
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function addDiscount($_discount)
    {
        $this->discount = $_discount;
    }
}
?>