<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
    ul.pagination li {
      display: inline;
    }

    ul.pagination li a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
    }

    .active {
      background-color: #4caf50;
      color: white;
    }

    ul.pagination li a:hover:not(.active) {
      background-color: #ddd;
    }

    tr:hover {
      background-color: #ddd;
    }

    p {
      color: #ddd;

    }
  </style>
  <script>
    function confirma() {
      if (!confirm('Deseja excluir o registro?')) {
        return false
      }
      return true

    }
  </script>

</head>

<body>
  <div class="container mt-5 bg-light">
    <?php echo anchor(base_url('user/create'), 'Novo Usuário', ['class' => 'btn btn-success mb-3']) ?>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>LastName</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['Name'] ?></td>
            <td><?php echo $user['LastName'] ?></td>
            <td><?php echo $user['Email'] ?></td>
            <td>
              <?php echo anchor('user/edit/' . $user['id'], 'Editar') ?>
              -
              <?php echo anchor('user/delete/' . $user['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php echo $pager->links(); ?>
  </div>

</body>

</html>