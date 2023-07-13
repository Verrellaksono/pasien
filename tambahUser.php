<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data User</h3>
                <form action="userAction.php" method="POST">
                    <div class="form-group">
                        <label for="nmUser">Username</label>
                        <input type="text" class="form-control mb-3" name="nmUser" placeholder="Username">
                    </div>
                    <div class="form-group mt-3">
                        <label for="status">Status</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" value="Administrator"> Administrator
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" value="User"> User
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>