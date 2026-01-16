<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Meu Blog Pessoal</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
// A conexão com o BD já foi realizada no index.php
$sql = "select * FROM t_apres";
$Bloco_Apres = array("nome" => "Autor Desconhecido", "descr" => "Descrição não encontrada", "img" => "https://www.w3schools.com/w3images/avatar_g.jpg");

if ($conexao && $result = mysqli_query($conexao, $sql)) {
    if ($registro = mysqli_fetch_row($result)) {
        $Bloco_Apres = array(
            "nome" => $registro[0],
            "descr" => $registro[1],
            "img" => $registro[2]
        );
    }
}

// Matriz de postagens
$Bloco_Postagens = array(
    1 => array(
        "img" => "https://www.w3schools.com/w3images/woods.jpg",
        "titulo" => "GAMES",
        "sTitulo" => "O mundo virtual está cada vez mais real!",
        "data" => "Agosto 8, 2018",
        "texto" => "Cada vez mais as novas tecnologias estão a melhorar a capacidade dos games. Estão a se transformar em verdadeiras obras de arte. Muitas vezes fica difícil distinguir o real do virtual. Os últimos lançamentos da...",
        "nComent" => "2"
    ),
    2 => array(
        "img" => "https://www.w3schools.com/w3images/bridge.jpg",
        "titulo" => "GUARTELÁ",
        "sTitulo" => "Um Passeio Inesquecível",
        "data" => "Julho 14, 2018",
        "texto" => "Cânion Guartelá é um cânion brasileiro situado no planalto dos Campos Gerais, entre os municípios de Castro e Tibagi, no Paraná. É considerado um dos maiores cânions do mundo em extensão, o 6º mais longo do mundo e o mais longo do Brasil.<br> O Cânion do Guartelá é uma garganta retilínea com cerca de 30 km de extensão e desnível máximo de 450 metros. Foi escavado pelo Rio Iapó, que...",
        "nComent" => "2"
    )
);

function Monta_Cabecalho_Principal($autor)
{
    $Texto = "<header class='w3-container w3-center w3-padding-32'>";
    $Texto .= "<h1><b>Meu Blog Pessoal</b></h1>";
    $Texto .= "<p>Seja Bem vindo. Criado por <span class='w3-tag'>";
    $Texto .= $autor . "</span></p>";
    $Texto .= "</header>";
    return $Texto;
}

function Exibe_Categoria($Nome, $Selecionado)
{
    $Texto = "";
    if ($Selecionado)
        $Texto = "<span class='w3-tag w3-black w3-margin-bottom'>";
    else
        $Texto = "<span class='w3-tag w3-light-grey w3-small w3-margin-bottom'>";
    $Texto .= $Nome . "</span>";
    return $Texto;
}
?>