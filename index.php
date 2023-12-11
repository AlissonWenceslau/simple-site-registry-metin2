<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/metin2.png">
    <title>Metin2 - Simple Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" th:fragments="nav">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="./assets/metin2.png" class="img-fluid" alt="..." width="80px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="col-lg-6 offset-lg-3">
        <form method="post" action="./registry.php">
            <h2>Cadastro</h2>
            <?php 
             if(isset($_SESSION['error_password'])){
              ?>
                <div class="alert alert-danger" id="alert" role="alert">
                  <?php
                    echo $_SESSION['error_password'];
                  ?>
                </div>
              <?php
              unset($_SESSION['error_password']);
            }
              if(isset($_SESSION['status'])){
                ?>
                  <div class="alert alert-success" role="alert">
                    <?php
                      echo $_SESSION['status'];
                    ?>
                  </div>
                <?php
                unset($_SESSION['status']);
              }
            ?>
            <div class="mb-3">
                <label for="username" class="form-label">Login</label>
                <input type="text" class="form-control" maxlength="12" placeholder="Máximo 12 caracteres" pattern="[a-zA-Z0-9]+" aria-label="default input example" id="username" name="username" required>
                <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                <label for="password" class="form-label">Senha</label>
                <input type="password" maxlength="25" class="form-control" placeholder="Máximo 25 caracteres" pattern="[a-zA-Z0-9]+" id="password" name="password" required>
                <label for="password-confirm" class="form-label">Confirmar Senha</label>
                <input type="password" maxlength="25" class="form-control" placeholder="Máximo 25 caracteres" pattern="[a-zA-Z0-9]+" id="password-confirm" name="password-confirm" required>
                <label for="password-character" class="form-label">Senha do Personagem</label>
                <input class="form-control" maxlength="7" type="text" pattern="[a-zA-Z0-9]+" placeholder="Máximo 7 caracteres" aria-label="default input example" id="password-character" name="character" required>
                <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

