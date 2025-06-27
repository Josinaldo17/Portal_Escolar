<?php
include '../php/bd_conexao.php';

// Consulta total de alunos
$alunos = mysqli_query($conn, "SELECT COUNT(*) as total FROM alunos");
$total_alunos = mysqli_fetch_assoc($alunos)['total'];

// Consulta total de professores
$professores = mysqli_query($conn, "SELECT COUNT(*) as total FROM professores");
$total_professores = mysqli_fetch_assoc($professores)['total'];

// Consulta total de turmas ativas
$turmas = mysqli_query($conn, "SELECT COUNT(*) as total FROM turmas WHERE status = 'A'");
$total_turmas = mysqli_fetch_assoc($turmas)['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/adm_usuarios.css">
    <title>Home</title>
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: center;">

                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../templates/adm_home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../templates/adm_disciplinas.php">Disciplinas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../templates/adm_turmas.php">Turmas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../templates/adm_responsaveis.php">Responsaveis</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../templates/adm_professores.php">Professores</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  aria-current="page" href="../templates/adm_alunos.php">Alunos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

<main class="Main">
    <h1 class="text-center mb-4">Painel Administrativo</h1>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center">
                <h5 class="card-title">Total de Alunos</h5>
                <p class="card-text display-6"><?php echo $total_alunos; ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center">
                <h5 class="card-title">Total de Professores</h5>
                <p class="card-text display-6"><?php echo $total_professores; ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center">
                <h5 class="card-title">Turmas Ativas</h5>
                <p class="card-text display-6"><?php echo $total_turmas; ?></p>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="alert alert-info text-center">
                Bem-vindo(a) ao sistema administrativo da escola. Use o menu acima para navegar entre os módulos.
            </div>
        </div>
    </div>
</main>

<footer></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>