//Iniciando em php//

<?php
echo "Hello, World!";
?>

//Variáveis em PHP://

<?php
$nome = "João";
$idade = 30;
echo "Meu nome é $nome e eu tenho $idade anos.";
?>

//Estruturas de Controle em PHP (if-else)://

    <?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>

//Loop While em PHP://

<?php
$contador = 1;

while ($contador <= 5) {
    echo "Número: $contador<br>";
    $contador++;
}
?>

//Array em PHP://

<?php
$frutas = array("maçã", "banana", "laranja");
echo "Eu gosto de " . $frutas[0] . ", " . $frutas[1] . " e " . $frutas[2] . ".";
?>

//Função em PHP://

<?php
function saudacao($nome) {
    echo "Olá, $nome!";
}

saudacao("Maria");
?>

//Conexão com Banco de Dados MySQL em PHP://

<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "minhabase";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";
$conexao->close();
?>
