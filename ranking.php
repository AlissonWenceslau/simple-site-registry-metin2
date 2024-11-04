<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico">
    <title>Metin2</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="logo">
            <a href="index.php" class="navbar-brand"><img src="./assets/metin2.png" class="img-fluid" alt="metin2"></a>
        </div>
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="download.php">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="ranking.php">Ranking</a>
                </li>
        </div>
    </nav>
    <div class="content">
        <div class="container">
            <h2 class="text text-primary">Ranking de Personagens</h2>
            <span>
                <small>
                    <strong>
                     TOP 10 personagens do servidor!
                    </strong>
                </small>
            </span>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nível</th>
                        <th scope="col">Reino</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo "Teste" ?></td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-3 bg-dark text-white-50">
        <div class="container text-center">
            <small>Todos os direitos reservados! Copyright &copy; <?php echo date("Y"); ?></small>
        </div>
    </footer>
</body>