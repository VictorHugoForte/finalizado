<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "casbom";

// Conexão com o banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Coletar dados do formulário
$ESPONTANEA = isset($_POST["ESPONTANEA"]) ? "1" : "0";
$COMANDOVERBAL = isset($_POST["COMANDOVERBAL"])? "1" : "0";
$ESTIMULODOLOROSO = isset($_POST["ESTIMULODOLOROSO"])? "1" : "0";
$NENHUMA = isset($_POST["NENHUMA"]) ? "1" : "0";

$PALAVRASEFRASESAPROPIADAS = isset($_POST["PALAVRASEFRASESAPROPIADAS"]) ? "1" : "0";
$PALAVRASINAPROPIADAS = isset($_POST["PALAVRASINAPROPIADAS"]) ? "1" : "0";
$CHOROPERSISTENTEOUGRITOS = isset($_POST["CHOROPERSISTENTEOUGRITOS"]) ? "1" : "0";
$SONSINCOMPREENSIVEIS = isset($_POST["SONSINCOMPREENSIVEIS"])  ? "1" : "0";
$NENHUMARESPOSTAVERBAL = isset($_POST["NENHUMARESPOSTAVERBAL"]) ? "1" : "0";

$OBECEPRONTAMENTE = isset($_POST["OBECEPRONTAMENTE"]) ? "Sim" : "Não";
$LOCALIZADORDOURESTIMULOTATIL = isset($_POST["LOCALIZADORDOURESTIMULOTATIL"]) ? "1" : "0";
$MOVIMENTODERETIRADODESEGMENTOESTIMULADO = isset($_POST["MOVIMENTODERETIRADODESEGMENTOESTIMULADO"])? "1" : "0";
$FLEXAOANORMALDECORTICACAO = isset($_POST["FLEXAOANORMALDECORTICACAO"]) ? "1" : "0";
$EXTENSAOANORMALDECEREBRACAO = isset($_POST["EXTENSAOANORMALDECEREBRACAO"])? "1" : "0";
$AUSENCIAPARALISIAFLACIDAHIPOTONIA = isset($_POST["AUSENCIAPARALISIAFLACIDAHIPOTONIA"]) ? "1" : "0";

// Inserir dados no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO menor5anos (
        ESPONTANEA, COMANDOVERBAL, ESTIMULODOLOROSO, NENHUMA,
        PALAVRASEFRASESAPROPIADAS, PALAVRASINAPROPIADAS, CHOROPERSISTENTEOUGRITOS, SONSINCOMPREENSIVEIS, NENHUMARESPOSTAVERBAL,
        OBECEPRONTAMENTE, LOCALIZADORDOURESTIMULOTATIL, MOVIMENTODERETIRADODESEGMENTOESTIMULADO, FLEXAOANORMALDECORTICACAO, EXTENSAOANORMALDECEREBRACAO, AUSENCIAPARALISIAFLACIDAHIPOTONIA
    ) VALUES (
        '$ESPONTANEA', '$COMANDOVERBAL', '$ESTIMULODOLOROSO', '$NENHUMA',
        '$PALAVRASEFRASESAPROPIADAS', '$PALAVRASINAPROPIADAS', '$CHOROPERSISTENTEOUGRITOS', '$SONSINCOMPREENSIVEIS', '$NENHUMARESPOSTAVERBAL',
        '$OBECEPRONTAMENTE', '$LOCALIZADORDOURESTIMULOTATIL', '$MOVIMENTODERETIRADODESEGMENTOESTIMULADO', '$FLEXAOANORMALDECORTICACAO', '$EXTENSAOANORMALDECEREBRACAO', '$AUSENCIAPARALISIAFLACIDAHIPOTONIA'
    )";
     header("Location:sinaisvitais.html");


    if ($conexao->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro na inserção de dados: " . $conexao->error;
    }
}

$conexao->close();
?>