<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico">
    <title>Metin2 - Simple Page</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="" class="navbar-brand"><img src="./assets/metin2.png" class="img-fluid" alt="metin2"></a>
        </div>
    </nav>
    <div class="col-lg-6 offset-lg-3">
      <form method="post" action="./register.php">
        <h2>Cadastro</h2>
        <?php 
          // Verifica se há erros na sessão e exibe-os
          if (isset($_SESSION['errors'])){
            foreach ($_SESSION['errors'] as $erro) {
              echo "<div class='alert alert-danger' id='alert' role='alert'>";
                echo $erro;
              echo "</div>";
            }
          }
            // Limpa as mensagens de erro para evitar que apareçam novamente
            unset($_SESSION['errors']);
          
          if(isset($_SESSION['success'])){
            echo "<div class='alert alert-success' id='alert' role='alert'>";
            echo $_SESSION['success'];
            echo "</div>";
          }
          unset($_SESSION['success'])
        ?>
        <div class="mb-3">
          <label for="username" class="form-label">Login</label>
          <input type="text" class="form-control" maxlength="12" placeholder="Mínimo 5 e Máximo 12 caracteres" pattern="[a-zA-Z0-9]+" aria-label="default input example" id="username" name="username" required>
          <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
          <input type="email" maxlength="50" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
          <label for="password" class="form-label">Senha</label>
          <input type="password" maxlength="12" class="form-control" placeholder="Mínimo 5 e Máximo 12 caracteres" pattern="[a-zA-Z0-9]+" id="password" name="password" required>
          <label for="password-confirm" class="form-label">Confirmar Senha</label>
          <input type="password" maxlength="12" class="form-control" placeholder="Mínimo 5 e Máximo 12 caracteres" pattern="[a-zA-Z0-9]+" id="password-confirm" name="password-confirm" required>
          <label for="password-character" class="form-label">Senha do Personagem</label>
          <input class="form-control" maxlength="7" type="text" pattern="[a-zA-Z0-9]+" placeholder="Mínimo 7 caracteres" aria-label="default input example" id="password-character" name="character" required>
          <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
        </div>
      </form>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-3 bg-dark text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; <?php echo date("Y"); ?></small>
      </div>
    </footer>
    <script src="./script/bootstrap.bundle.min.js"></script>
    <script>
    setTimeout(function() {
      var mensagensErro = document.querySelectorAll('.alert');
      mensagensErro.forEach(function(mensagem) {
      mensagem.style.display = 'none';
    });
    }, 5000);
  </script>
  </body>
</html>