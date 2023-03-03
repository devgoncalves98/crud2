Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@devgoncalves98 
devgoncalves98
/
crud
Public
Cannot fork because you own this repository and are not a member of any organizations.
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
Beta Try the new code view
crud/app/Views/form.php /
@devgoncalves98
devgoncalves98 SegundoCommit
Latest commit b09ef67 yesterday
 History
 1 contributor
30 lines (30 sloc)  1.29 KB

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
<body>
  <div class="container mt-3  bg-light">
    <?php echo form_open('user/store')?>
    <div class="form-grup">
      <label for="Name">Name</label>
      <input type="text" name="Name" id="Name" class="form-control">
    </div>
    <div class="form-grup">
      <label for="LastName">Last Name</label>
      <input type="text" name="LastName" id="LastName" class="form-control">
    </div>
    <div class="form-grup">
      <label for="Email">Email</label>
      <input type="Email" name="Email" id="Email" class="form-control">
    </div>
    <input type="submit" value="Salvar" class="btn mt-2 btn-primary ">
    <?php echo form_close()?>
  </div>
</body>
</html>