
   <!DOCTYPE html>
  <meta charset="utf-8">
  <html>
  <title>Sistemas de Cadastro de Clientes</title>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body >

<div class="row">
<div class="col s12 m6 push-m3 ">
  <h3 class="light"> Novo Cliente</h3>
<form action="create.php" method="POST">
  <div class="input-field col s12">
    <input type="text" name="nome" id="nome">
    <label for="nome">Nome</label>
  </div>
    <div class="input-field col s12">
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="sobrenome">Sobrenome</label>
  </div>
  <div class=" input-field col s12">
    <input type="text" name="email" id="email">
    <label for="email">E-mail</label>
  </div>
  <div class="input-field col s12">
    <input type="text" name="idade" id="idade">
    <label for="idade">Idade</label>
  </div>
  <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
  <a href="index.php" class="btn green">Lista de Clientes</a>
  
</form>
</div>
</div>
<!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>



