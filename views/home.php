<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <?php // var_dump($users); ?>

<div class="container">
    <div class="wrapper">
        <form>
            <div class = "row">
                <div class = "col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder = "Username" >
                </div>
                </div>

                <div class = "col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="role" name="role" placeholder = "Role" >
                </div>
                </div>

                <div class = "col">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Role</th>
        <th scope="col">Created_at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user ): ?>
            <tr>
                <td><?= $user->getId();  ?></td>
                <td><?= $user->getUsername(); ?></td>
                <td><?= $user->getRole();  ?></td>
                <td><?= $user->getCreatedAt();  ?></td>

                <form method ="POST" action = "info.php">
                <input type="hidden" name="id" value = "<?=$user->getId();?>">
                <input type="hidden" name="username" value = "<?=$user->getUsername();?>">
                <input type="hidden" name="role" value = "<?=$user->getRole();?>">
                <input type="hidden" name="created_at" value = "<?=$user->getCreatedAt();?>">
                <td><button type="submit" class="btn btn-info" name = "action" value="info">Info</button></td>
                </form>

                <form method ="POST" action = "script.php">
                <input type="hidden" name="id" value = "<?=$user->getId();?>">
                <td><button type="submit" class="btn btn-danger" name = "action" value="delete" >Delete</button></td>
                </form>

                <form method ="POST" action = "update.php">
                <input type="hidden" name="id" value = "<?=$user->getId();?>">
                <td><button type="submit" class="btn btn-warning" name = "action" value="update">Update</button></td>
                </form>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>





</body>
</html>