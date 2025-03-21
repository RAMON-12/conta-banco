<?php
require_once 'classes/class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Criar objeto Pessoa com os dados do formulário
    $Usuario = new Pessoa(
        htmlspecialchars($_POST['nome'] ?? ""),
        isset($_POST['idade']) ? (int)$_POST['idade'] : 0,
        htmlspecialchars($_POST['cpf'] ?? ""),
        htmlspecialchars($_POST['email'] ?? "")
    );

    // Exibir os dados processados
    echo '<h1>' . $Usuario->saudar() . '</h1>';
    echo $Usuario->exibirCartaoDeVisita();
} else {
    echo "<p style='color:red;'>Método inválido. Por favor, preencha o formulário corretamente.</p>";
}
?>
