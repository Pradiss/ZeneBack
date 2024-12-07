<?php 

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/perfil.html");

echo $header ;

?>
<section class="container mt-4">
 <div class="container mt-5">

<div class="row d-flex justify-content-center">
   <div class="col-md-5">
      <p class="text-center fs-3">Zene</p>
      <div class="card mb-4 rounded-3 shadow-sm ">
         <div class="card-header bg-secondary py-3">
            <h4 class="my-0 fw-normal text-white">Edite sua conta</h4>
         </div>
         <div class="card-body p-4">


            <form id="form" name="form" method="post" action="<?= $baseUrl ?>/perfil/editar/<?= $idUsuario ?>">
               <div class="form-floating mb-3">
                  <input type="text" name="nome" id="nome" class="form-control"  >
                  <label for="nome">Nome:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="usuario" name="usuario" id="usuario" class="form-control" >
                  <label for="usuario">Usuário:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="idBanda" id="idBanda" class="form-control" >
                  <label for="idBanda">Banda:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="email" name="email" id="email" class="form-control" >
                  <label for="email">Email:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="number" name="telefone" id="telefone" class="form-control" >
                  <label for="telefone">WhatsApp:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="cidade" id="cidade" class="form-control" >
                  <label for="cidade">Cidade:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="uf" id="uf" class="form-control" >
                  <label for="uf">estado:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="idInstrumento" id="idInstrumento" class="form-control" >
                  <label for="idInstrumento">Instrumento:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="idCategoria" id="idCategoria" class="form-control" >
                  <label for="idCategoria">Categoria:</label>
               </div>
               
               <button type="submit" id="btnAcessar" name="btnAcessar" class="w-100 btn btn-lg btn-primary">Criar</button>
               <input type="hidden" name="acao" value="<?= $acao?>">
                <input type="hidden" name="idUsuario" value="<?= $idUsuario?>">
            </form>


            </div>
      </div>
   </div>
</div>
</div>
  </section>

<?php

echo $footer;


?>