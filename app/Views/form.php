<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>Document</title>
  <script>
    "Name":{
      "type" : "text"
    },
  </script>
</head>
<body>
  <div class="container mt-3  bg-light">
    <?php echo form_open('user/store')?>
    <div class="form-grup">
      <label for="Name">Name</label>
      <input type="text" value="<?php echo isset($user['Name']) ? $user['Name'] : '' ?>" name="Name" id="Name" class="form-control" required>
    </div>
    <div class="form-grup">
      <label for="LastName">Last Name</label>
      <input type="text" value="<?php echo isset($user['LastName']) ? $user['LastName'] : '' ?>" name="LastName" id="LastName" class="form-control" required>
    </div>
    <div class="form-grup">
      <label for="Email">Email</label>
      <input type="email" value="<?php echo isset($user['Email']) ? $user['Email'] : '' ?>" name="Email" id="Email" class="form-control" required>
    </div>
    <input type="submit" value="Salvar" class="btn mt-2 btn-primary ">
    <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : '' ?>">
    <?php echo form_close()?>
  </div>
</body>
</html>