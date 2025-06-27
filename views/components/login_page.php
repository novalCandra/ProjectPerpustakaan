<?php
require '../../koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS Bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- END Boostrap -->
</head>

<body>

    <!-- FORM  -->
    <div class="container md-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <!-- Judul Form -->
                <figure>
                    <blockquote class="blockquote">
                        <h4>Login page</h4>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Masukan Akun Kamu</cite>
                    </figcaption>
                </figure>


                <form role="form" action="../../controller/prosess_login_page.php" method="post">
                    <!-- Inputan name -->
                    <div class="mb-3">
                        <label for="form_name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <!-- end Inputan name -->

                    <!-- Inputan Passowrd -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <!-- END Inputan Passowrd -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- END Judul Form -->
            </div>
        </div>
    </div>
    <!-- END FORM -->

    <!-- JS Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- END Bootrap -->
</body>

</html>