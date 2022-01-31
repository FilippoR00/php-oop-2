<?php  
class Prodotto{
    private $nome;
    private $marca;
    private $colore;
    private $prezzo;

    public function __construct($_nome, $_marca, $_colore, $_prezzo)
    {
        $this->addNome($_nome);
        $this->addMarca($_marca);
        $this->addColore($_colore);
        $this->addPrezzo($_prezzo);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function addNome($_nome)
    {
        $this->nome = $_nome;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function addMarca($_marca)
    {
        $this->marca = $_marca;
    }

    public function getColore()
    {
        return $this->colore;
    }

    public function addColore($_colore)
    {
        $this->colore = $_colore;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function addPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
    }



}
?>