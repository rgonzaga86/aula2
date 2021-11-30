<?php

/* Criar Variáveis

nomeDaVariavel=

Regras :
- inicializar com $ 
- Não pode começar por número
- utilizar o tratamento CamelCase
- Não pode ter acentos, espaços, símbolos *(_ + # @ ! >)

1bim - errado
$bim1 = 7.5; -  certo
$bim_1=7.5; - certo
$nome do aluno = "Juan"; - Errado
$nomedoaluno = "Juan Pablo"; - é correto mas não tá certo
$nomeDoAluno = "Márcia";- correto
*/
$bim1=1.2;
echo $bim1;

$nome= "Rodrigo Gonzaga";
$idade= "35";
$profissao="Programador";
$salario= "32246.67";

echo "{$bim1}<br>";
echo "Seu nome é:{$nome}. E sua idade é:
{$idade}<br>";

echo "Me chamo {$nome} tenho {$idade} sou {profissao} e ganho R$ {$salario}";
echo "<hr>";

$nota1 = 6;
$nota2 = 5;
$nota3 = 9;
$nota4 = 7;
$media = ($nota1+$nota2+$nota3+$nota4)/4;
echo "Sua média total é: {$media}";
echo "<hr>"

$prod = "Computador";

$valor = 150;

$qtd = 5;

$totVen = $valor * $qtd;



echo "O {$prod} tem o valor total de: {$totVen}";



$prod="mouse";

$valor = 12.67;

$qtd = 10;

$totVen = $valor * $qtd;

echo "<br>O {$prod} tem o valor total de: {$totVen}";