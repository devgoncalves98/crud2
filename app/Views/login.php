<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  .checkbox{
    display: flex;
    flex-direction: row;
    margin-top: 10px;
  }
  p{
    margin: 5px;
  }
</style>
<body>
  <div class="container mt-3  bg-light">
    <h1 class="lead">Login page</h1>
    <?php echo form_open('login/admPadrao') ?>
      <div class="form-grup">
        <label for="login">Login</label>
        <input type="text" value="<?php echo isset($adm['login']) ? $adm['login'] : 'admin' ?>" name="login" id="login" class="form-control" required minlength="3">
      </div>
      <div class="form-grup">
        <label for="senha">Senha</label>
        <input type="text" value="<?php echo isset($adm['senha']) ? $adm['senha'] : 'adm1234' ?>" name="senha" id="senha" class="form-control" required minlength="3">
      </div>
    <button type="submit" id="logar" class="btn mt-2 btn-primary" >Login</button>
    </div>
    <?php form_close()?>
</body>
</html>