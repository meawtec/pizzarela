<?php 
include_once 'controle/configbd.php';



$email = $_COOKIE['email'];
$verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$email'") or die("erro ao selecionar");
if(mysqli_num_rows($verifica)>0){
  $user = mysqli_fetch_assoc($verifica);
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="estilo/estilo1.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Pizzaria</title>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">Pizzarela</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        <li class="nav-item">


          <a class="nav-link active" aria-current="page" href="pags/cardapio.php">Peça online</a>
        </li>
        <a class="nav-link active" aria-current="page" href="pags/carrinho.php">Carrinho</a>
        </li>
        <a class="nav-link active" aria-current="page" href="pags/sobrenos.php">Sobre nos</a>
        </li>
        <a class="nav-link active" aria-current="page" href="pags/criarPage.php">Criar</a>
        </li>
        <a class="nav-link active" aria-current="page" href="pags/loginPage.php">Entrar</a>
        <?php
        if(($user['adm'] == true)):
        ?>
        </li>
      <a nome = "alterar" id= "alterar" class="nav-link active" aria-current="page" href="pags/alterar.php">Alterar</a>
        </li>
        <?php 
        endif
        ?>


      </form>
<h6 id="gmail">  
<?php 

if(isset($_COOKIE['email'])){
echo $_COOKIE['email'];
}



?>
</h6>

      <br>
        
    </div>
  </div>
</nav>


<div id="divpromo">
      <div id="promocoes">
      <div id="retapromo">

      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>

      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/Refri.png" class="card-img-top" alt="...">

      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>


      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>

      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">

      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>


      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><br>

  

      </div>

      <div id="retapromo">

      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><br>

      </div>
      <div id="retapromo">

      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>

      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">

      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>


      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>

      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">

      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmmm.</p>


      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><br>

  

      </div>

      <div id="retapromo">

      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui tem uma Pizza muito gostosa hmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui ha uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div>
      <div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui ha uma Pizza muito gostosa hmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><div class="card" style="width: 18rem;" id="cardpromo">
      <img src="imagens/pizza1.png" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text">Aqui ha uma Pizza muito gostosa hmmmmmm.</p>
      <button type="button" class="btn btn-success" href="/pags/carrinho.php">Ver</button>
      </div>
      </div><br>

      </div>

      
    </div>
</div>
</body>
</html>