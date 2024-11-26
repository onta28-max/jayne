<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Lao:wght@100..900&display=swap" rel="stylesheet">
    <title>Katu Login</title>
    <style>
        body {
            font-family: "Noto Serif Lao", serif;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <h1 class="text-center">KATU CAFE</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/katucafe/backend/blogin.php" method="post">
                    <div class="mb-3">
                            <?php
                            session_start();
                            if (isset($_SESSION['message'])):?>
                           <div class="alert alert-danger">
                           <?php
                           echo $_SESSION['message'];
                            unset($_SESSION['message']);
                           ?>
                           </div>
                          <?php endif;?>
                          <?php
                            if (isset($_SESSION['nopassword'])):?>
                           <div class="alert alert-danger">
                           <?php
                           echo $_SESSION['nopassword'];
                            unset($_SESSION['nopassword']);
                           ?>
                           </div>
                          <?php endif;?>
                          
                        <label for="username" class="form-label">ຊື່ຜູ້ໃຊ້</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">ລະຫັດຜູ້ໃຊ້</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 bg-secondary">ເຂົ້າສູລະບົບ</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>