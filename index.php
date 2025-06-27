<?php
session_start();
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    include 'php/bd_conexao.php';

    $matricula = trim($_POST['matricula']);
    $senha = trim($_POST['senha']);

    // Evita SQL injection
    $matricula = mysqli_real_escape_string($conn, $matricula);
    $senha = mysqli_real_escape_string($conn, $senha);

    // Busca usuário com status ativo
    $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha' AND status = 'A'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $usuario;

        // Verifica o tipo e redireciona
        if ($usuario['tipo'] == 'D') {
            header("Location: ../Portal_Escolar/templates/adm_home.php");
            exit;
        } else {
            header("Location: ../Portal_Escolar/templates/construcao.html");
            exit;
        }
    } else {
        $mensagem = "<div class='alert alert-danger position-absolute top-0 start-50 translate-middle-x mt-3 px-3 py-2'>Matrícula ou senha inválida, ou usuário inativo.</div>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body> 
    <div class="root">
        <div class="container-left">
            <img src="img/img-login.png" >
        </div>
        <div class="container-right">
            <div class="form-container">
                <h1>Login</h1>

                <?php if ($mensagem) echo $mensagem; ?>

                <div class="form-container-inputs">
                <form method="POST" class="form-container-inputs">

                    <div class="div-input ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <input type="text" class="form-control" name="matricula" placeholder="Matricula | E-mail" required>
                    </div>

                    <div class="div-input ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4m0 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
                        </svg>
                        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                    </div> 

                    <div class="forgot-container">
                         <a href="../Portal_Escolar/templates/cadastro_senha.html">↪ Esqueci a senha!</a>
                    </div>

                    <div class="button-container">
                        <button type="submit" name="login" class="btn btn-primary w-100">Entrar</button>
                    </div>

                </form>

                                    
                </div>

               
                <div class="register-account">
                    <p>Não tem uma conta ? <a href="../Portal_Escolar/templates/cadastro.html">cadastre-se</a></p>
                </div>

                

            </div>
        </div>
    </div>
</body>
</html>