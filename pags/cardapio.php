<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="../estilo/estilo2.css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Pizzaria</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="../index.php">Pizzarela</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        <li class="nav-item">


          <a class="nav-link active" aria-current="page" href="cardapio.php">Peça online</a>
        </li>
        <a class="nav-link active" aria-current="page" href="carrinho.php">Cardapio</a>
        </li>
        <a class="nav-link active" aria-current="page" href="sobrenos.php">Sobre nos</a>
        </li>
        <a class="nav-link active" aria-current="page" href="criarPage.php">Criar</a>
        </li>
        <a class="nav-link active" aria-current="page" href="loginPage.php">Entrar</a>
        </li>
        
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Peça online" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
      <h6 id="gmail">  
<?php 

if(isset($_COOKIE['email'])){
echo $_COOKIE['email'];
}



?>
</h6>
      <br>
</nav>
  
<div id="divpeca">
  <div id="pnn">
    
  </div>
</div>




</body>
</html>