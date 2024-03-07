<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=decive-width initial scala:1">
    <title>form Register</title>
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
                                <label for="exampleInputEmail" class="form-label">Nis</label>
                            <input type="text" name="nis" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Nama Lengkap</label>
                            <input type="text" name="Nama Lengkap" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="text" name="Email" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">alamat</label>
                            <input type="text" name="alamat" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">username</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" required id="exampleInputEmail">
                        </div>
                        <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">level</label>
                            <input type="level" name="password" class="form-control" required id="exampleInputEmail">
                        </div>
                        <div class="mb-3">
                    </form>
                    <p class="m-3">Saya sudah memiliki akun. <a href="register.php" class="btn btn-warning text black">login</a></p>
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

                
           

    
    
