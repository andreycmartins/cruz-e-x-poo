<?php

class X {
  private $tamanho;

  public function __construct($tamanho) {
    $this->tamanho = $tamanho;
  }

  public function desenhar() {
    for ($linha = 0; $linha < $this->tamanho; $linha++) {
      for ($coluna = 0; $coluna < $this->tamanho; $coluna++) {
        if ($linha == $coluna || $linha == ($this->tamanho - 1) - $coluna) {
          echo "*";
        } else {
          echo ".";
        }
      }
      echo "<br>";
    }
  }
}

// Exemplo de uso
$desenho = new X(5);
$desenho->desenhar();

?>