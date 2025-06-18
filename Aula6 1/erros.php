<?php
class MinhaExcecao extends Exception {
    public function __construct($mensagem = "", $codigo = 0, Throwable $anterior = null) {
	parent::__construct($mensagem, $codigo, $anterior);
    }
}

