<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar | Perpustakaan Digital</title>
    <link href="" rel="style.css">
</head>
<body>
<div class="container">
        <div class="conten">
            <div class="logreg">
                <div class="row">
                    <div class="col m-4">
                        <h1>Daftar Perpustakaan Digital</h1>

                        <form action="koneksi.php" method="post">
                        <div class="mb-3">
                            <label for="nama lengkap" class="form-label">Input your name</label>
                            <input type="text" name="nama" class="form-control" required id="nama" aria-describedby="nama">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Input your password</label>
                            <input type="password" name="password" class="form-control" required id="password">
                        <div class="mb-3">
                            <label for="email" class="form-label">Input your email</label>
                            <input type="email" name="email" class="form-control" required id="email">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">Input your phone number</label>
                            <input type="text" name="no_telp" class="form control" requied id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Input your address</label>
                            <input type="text" name="alamat" class="form control" requied id="alamat">
                        </div>
                        </div>
                        <button type="submit" class="btn">Daftar</button>
                    </form>
                    <P class="mt-3">Sudah punya akun? <a Login href="login.php" class="btn-warning">Login disini</a></p>
                    </div>
                    <div class="col">
                        <img src="" width= "450" alt="">
                    </div>
                </div>
            </div>
        </div>
</body>
</html>