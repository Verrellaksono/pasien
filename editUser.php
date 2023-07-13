<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data User</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM users where iduser='$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="userAction.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" name="idUser" placeholder="Id User" value="<?= $row['idUser'] ?>" hidden>
                        </div>

                        <div class="form-group">
                            <label for="nmUser">Username</label>
                            <input type="text" class="form-control mb-3" name="nmUser" placeholder="Username" value="<?= $row['nmUser'] ?>">
                        </div>

                        <div class="form-group mt-3">
                            <label for="status">Status</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="Administrator" <?php if (($row['status']) === "Administrator") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> Administrator
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="User" <?php if (($row['status']) === "User") {
                                                                                                            echo "checked";
                                                                                                        } ?>> User
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control mb-3" name="password" placeholder="Password" value="<?= $row['password'] ?>">
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>