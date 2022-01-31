<?php  
class Utente{
    private $nome;
    private $cognome;
    private $eta;
    private $creditCard;

    public function __construct($_nome, $_cognome, $_eta, $_creditCard)
    {
        $this->addNome($_nome);
        $this->addCognome($_cognome);
        $this->addEta($_eta);
        $this->addCreditCard($_creditCard);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function addNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function addCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function addEta($_eta)
    {
        $this->eta = $_eta;
    }

    public function addCreditCard($card)
    {
        $this->creditCard[] = $card;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }



}
?>