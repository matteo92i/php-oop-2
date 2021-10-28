<?php
class Prodotto {
  public $categoria;
  public $marca;
  public $descrizione;
  public $prezzo;
  public $quantità;


  public function __construct($categoria, $marca, $descrizione, $prezzo, $quantità){
    $this->categoria = $categoria; 
    $this->marca = $marca; 
    $this->descrizione = $descrizione; 
    $this->prezzo = $prezzo; 
    $this->quantità = $quantità; 
  }

  public function addQuantità($quantità)
  {
   
    $this->quantità +=$quantità;
  }
}

class Scarpe extends Prodotto {
  public $colore = [];
  public $misura = [];
  public $edizionelimitata;

  public function __construct($colore, $misura, $edizionelimitata,$categoria, $marca, $descrizione, $prezzo, $quantità)
  {
    $this->colore = $colore;
    $this->misura = $misura;
    $this->edizionelimitata = $edizionelimitata;
    parent::__construct($categoria, $marca, $descrizione, $prezzo, $quantità);
  }
}

class Vestito extends Prodotto {

  public $taglia = [];
  public $vestibilità = [];

  public function __construct($taglia, $vestibilità, $categoria, $marca, $descrizione, $prezzo, $quantità)
  {
    $this->taglia =$taglia;
    $this->vestibilità =$vestibilità;
    parent::__construct($categoria, $marca, $descrizione, $prezzo, $quantità);
  }
}
class Carrello {

  public $numeroOrdini;
  public $listaProdotti;
  public $totale;

  public function __construct($numeroOrdini, $listaProdotti, $totale)
  {
    $this->numeroOrdini =$numeroOrdini;
    $this->listaProdotti =$listaProdotti;
    $this->totale =$totale;
    
  }

  public function prezzoTotale(){

  }
}
class Utente {
  public $nome;
  public $cognome;
  public $indirizzo;
  public $email;
  public $data;

  public function __construct($nome, $cognome, $indirizzo, $email, $data){
    $this->nome =$nome;
    $this->cognome =$cognome;
    $this->indirizzo =$indirizzo;
    $this->email =$email;
    $this->data =$data;
    $this ->cartaDiCredito = $cartaDiCredtito = [];
  }
}

class CartaCredito {
  public $numeroCarta;
  public $cvv;
  public $scadenza;

  public function __construct($numeroCarta, $cvv, $scadenza){
    $this->numeroCarta =$numeroCarta;
    $this->cvv =$cvv;
    $this->scadenza =$scadenza;
    

  }
  public function addCartaCredito($numeroCarta)
  {
    $this->numeroCarta == $numeroCarta.lenght <=16;
  }
  


}
?>

<pre>
  <?php 
  
  $prodottoGenerico = new Prodotto ('uomo', 'nike', 'bella tuta', 30, 10);
  
  var_dump($prodottoGenerico);
  ?>
</pre>

  


