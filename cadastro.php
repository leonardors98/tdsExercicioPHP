<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CADASTRO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <center><h1><b> CADASTRO </b></h1></center>
    <hr>
    <br>

    <div class="container">
    
        <form action="cadnome.php" method="post">
          
              <label for="nome">NOME</label>
              <input class="form-control" type="text" name="nome" placeholder="Insira um nome" required>
              <br>
              
              <label for="idade">IDADE</label>
              <input class="form-control" type="number" name="idade" placeholder="Insira uma idade" required>
              <br>

              <label for="altura">ALTURA (em cm)</label>
              <input class="form-control" type="number" name="altura" placeholder="Insira uma altura " required>
              <br>

              <label for="nome">PESO (em kg)</label>
              <input class="form-control" type="number" name="peso" placeholder="Insira um peso" required>
              <br>

              <button class="btn btn-primary" type="submit">CADASTRAR</button>

        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>