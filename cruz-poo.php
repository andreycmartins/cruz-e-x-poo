<?php

class Cruz {
    private $tamanho;
    private $posicaoVertical;

    public function __construct($tamanho, $posicaoVertical) {
        $this->tamanho = $tamanho;
        $this->posicaoVertical = $posicaoVertical;
    }

    public function desenhar() {
        for ($linha = 0; $linha < $this->tamanho; $linha++) {
            for ($coluna = 0; $coluna < $this->tamanho; $coluna++) {

                if ($coluna == ($this->tamanho - 1) / 2 || $linha == $this->posicaoVertical) {
                    echo "*";
                } else {
                    echo " . ";
                }
            }
            echo "<br>";
        }
    }
}

$desenho = new Cruz(7, 1);
$desenho->desenhar();

?>