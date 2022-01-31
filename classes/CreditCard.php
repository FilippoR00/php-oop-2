<?php  
class CreditCard{
    private $numero;
    private $cvv;
    private $scadenza;
    private $titolare;

    public function __construct($_numero, $_cvv, $_scadenza, $_titolare)
    {
        try {
            $this->addNumero($_numero);
            $this->addCVV($_cvv);
            $this->addScadenza($_scadenza);
            $this->addTitolare($_titolare);
        } catch (Exception $e) {
            echo "Eccezione: " . $e->getMessage();
        }
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function addNumero($_numero)
    {
        $this->numero = $_numero;
    }

    public function getCVV()
    {
        return $this->cvv;
    }

    public function addCVV($_cvv)
    {
        if (is_int($_cvv)) {
            $this->cvv = $_cvv;
        } else {
            throw new Exception('CVV non valido');
        }
    }

    public function getScadenza()
    {
        return $this->scadenza;
    }

    public function addScadenza($_scadenza)
    {
        $this->scadenza = $_scadenza;
    }

    public function getTitolare()
    {
        return $this->titolare;
    }

    public function addTitolare($_titolare)
    {
        $this->titolare = $_titolare;
    }



}
?>