<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <div class="container mt-5">
        <div>
            <div class="card mx-auto" style="width: 25rem;">
              <h1 class="text-center">Form Tambah User</h1>
              <div class="p-3">
                  <a href="<?php echo base_url('index.php/user') ?>"><button>Data User</button></a>
                  <form action="<?php echo base_url('index.php/user/action_tambah') ?>" method="post">
                  <label for="">Username</label><br>
                  <input class="form-control" type="text" name="username" required><br>
                  <label for="">Email</label><br>
                  <input class="form-control" type="text" name="email" required><br>
                  <label for="">Password</label><br>
                  <input class="form-control" type="text" name="password" required><br>
                  <button type="submit">Simpan</button>
                  </form>

              </div>
            </div>
        </div>
    </div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</body>
</html>