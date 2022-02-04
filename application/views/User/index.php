<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Data User</title>
</head>
<body>
    <div class="text-center">
        <h1>Data User</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form  action="" method="get">
                    <div class="row">
                        <div class="col-7 text-center">
                            <input class="form-control"  style="width:500px;" type="text" name="username" placeholder="masukan nama user">
                        </div>
                        <div class="col-2 mt-1">
                            <button class="form-control" style="height: 42px; width: 70px;" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="col-3">
                            <a href="<?php echo base_url('index.php/user/tambah') ?>"><i style="width:50px; height:50px;" class="fas fa-user-plus"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if(!empty($data)):?>
        <div class="container">
            <div class="row mt-4">
                <div class="col">

                    <table class="table table-bordered text-center">
                       <thead class="table-primary">
                           <th>Id</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Password</th>
                           <th>
                               Action 
                           </th>
                       </thead>
                       <tbody>
                           <?php $i = 1; ?>
                           <?php foreach($data AS $key => $value):?>
                                <tr>
                                    <td> <?php echo $i++; ?></td>
                                    <td> <?php echo $value['username']?></td>
                                    <td> <?php echo $value['email']?></td>
                                    <td> <?php echo $value['password']?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/user/edit/'.$value['id']) ?>"><i class="fas fa-user-edit"></i></a>
                                        |
                                        <a href="<?php echo base_url('index.php/user/delete/'.$value['id']) ?>"><i style="color:red" class="fas fa-trash-alt"></i></a>
            
                                    </td>
                                </tr>
                            <?php endforeach?>
                       </tbody>
                    </table>
                </div>
            </div>

        </div>
    <?php endif?>

    <!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</body>
</html>