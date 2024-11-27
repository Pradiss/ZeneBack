<?php 

$user = "";

foreach($result_perfil as $perfil){

    $nome = $perfil["nome"];
    $usuario = $perfil["usuario"];
    $idade = $perfil["idade"];
    $descricao = $perfil["descricao"];
    $foto = $perfil["foto"];
    $email = $perfil["email"];
    $cidade = $perfil["cidade"];
    $uf = $perfil["uf"];
    $telefone = $perfil["telefone"];
    $idInstrumento = $perfil["idInstrumento"];
    $idCategoria = $perfil["idCategoria"];
    $idBanda = $perfil["idBanda"];
    $idSocial = $perfil["idSocial"];


    $user.="
    <div class='container '>
      <div class='main-body'>
            <div class='row '>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card '>
                  <div class='card-body rounded '>
                    <div class='d-flex flex-column align-items-center text-center'>
                      <img src='$foto'  class='w-100'>
                      <div class='mt-3 text-light'>
                        <h4 class='text-black'>$nome</h4>
                        <p class='text-secondary mb-1'>$idInstrumento - $idCategoria</p> 

                        <p class='text-secondary mb-1'>$cidade| $uf</p>
                        </div>
                      </div>
                  </div>
                </div>
                
              </div>
               <div class='col-md-8 '>
               
                <div class='card text-dark '>
                  <div class='card-body rounded '>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Nome</h6>
                      </div>
                      <div class='  col-sm-9 text-secondary'>
                        $nome
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Usuario</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $usuario
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Banda</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $idBanda
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Email</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $email
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>WhatsApp</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $telefone
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Cidade</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $cidade - $uf
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Instrumento</i></h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $idInstrumento
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Categoria</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $idCategoria
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <a class='btn btn-primary  href='[[base-url]]/perfil/editar'>Editar Dados</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
    ";


}



$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/perfil.html");

$html = str_replace("[[header]]", $header,$html);
$html = str_replace("[[footer]]", $footer,$html);
$html = str_replace("[[perfil]]", $user,$html);
$html = str_replace("[[base-url]]", $baseUrl,$html);

echo $html;