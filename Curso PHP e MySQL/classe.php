<?php
require 'Pessoa.php';
require 'Programador.php';

$pessoa = new Programador("Tarcisio", "PHP");
echo $pessoa->getNome();
echo $pessoa->getLing();

echo $pessoa::ESPECIE;
