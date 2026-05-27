<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $role = $_POST["role"];
    $created_at = $_POST["created_at"];
} else {
    
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr><th>Id</th><th>Username</th><th>Role</th><th>Created_at</th></tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $id ?></td>
                <td><?= $username ?></td>
                <td><?= $role ?></td>
                <td><?= $created_at?></td>
                <td>
                    <form method="POST" action="index.php">
                        <button type="submit" class="btn btn-primary">Späť</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>