<?php 

$card = "";

foreach($result_user as $user){

    $idUsuario = $user["idUsuario"];
    $nome = $user["nome"];
    $idade = $user["idade"];
    $cidade = $user["cidade"];
    $foto = $user["foto"];
    $uf = $user["uf"];
    $idInstrumento = $user["idInstrumento"];
    $idCategoria = $user["idCategoria"];
    $idBanda = $user["idBanda"];
    $idSocial = $user["idSocial"];

    $card.= "
    <div class='card' style='width: 18rem;'>
     <img src='$foto' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>$nome</h5>
            <p class='text-secondary mb-1'>$idInstrumento | $idCategoria </p>
            <p class='card-text'>$cidade | $uf </p>
            <a href='[[base-url]]/perfil/$idUsuario' class='btn btn-primary'>Perfil</a>
        </div>
    </div>


    
    ";
}

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/home.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[card]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;


?>