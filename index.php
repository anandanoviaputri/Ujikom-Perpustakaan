<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=decive-width initial scala:1">
    <title>form login</title>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap/js"></script>
</head>
<body>

    <div class="container">
        <div class="content">
            <div class="card" style="margin-top: 11rem;">
                <div class="row">
                        <div class="col m-3">
                        <h2>Saya belum memiliki akun</h2>
                        <form action="aksi/cek_login.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" required id="exampleInputEmail">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="m-3">Saya belum memiliki akun. Buat<a href="register.php" class="btn btn-warning text black">Disini</a></p>
                </div>
                <div class="col">
                    <img src="login.jpg" width="500" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

                
           

    
    
