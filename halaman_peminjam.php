<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=decive-width initial scala:1">
    <title>Halaman Peminjaman</title>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap/js"></script>
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
                                <label for="exampleInputEmail" class="form-label">Dasboard</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Buku</label>
                            <input type="text" name="password" class="form-control" required id="exampleInputEmail">
                        </div>
                        <label for="exampleInputEmail" class="form-label">password </label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail" aria-describedy="emailHelp">
                        </div>
                            <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="m-3">Welcome to halaman<a href="register.php" class="btn btn-warning text black">Disini</a></p>
                </div>
                <div class="col">
                    <img src="Peminjaman.jpg" width="500" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

                
           

    
    
