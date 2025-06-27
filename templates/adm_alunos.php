<?php
// Configuração da conexão com o banco de dados
$host = 'localhost';
$dbname = 'escola';
$username = 'root';
$password = '';

try {
    // Estabelece a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para selecionar todos os alunos
    $stmt = $pdo->query("SELECT matricula_usuario, nome, telefone, cpf, nas FROM alunos");

    // Recupera todos os resultados da consulta
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em caso de erro, exibe uma mensagem
    echo "Erro ao conectar ou buscar dados: " . $e->getMessage();
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adm_usuarios.css">
    <title>Alunos</title>
</head>
<body>


    <!---------------------------------------NAVEGAÇAO ---------------------------------------------------------->

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: center;">

                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../templates/adm_home">Home</a>
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
                            <a class="nav-link" href="../templates/adm_professores.php">Professores</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  active"  aria-current="page" href="../templates/adm_alunos.php">Alunos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!--------------------------------------- MAIN ---------------------------------------------------------->


    <main class="Main">


        <div class="div-seach row">

            <div class="col-lg">
                <h1>Alunos</h1>
            </div>

            <div class="col-lg">
                <div class="div-input inputpesquisa">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search m-2 " viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <input class="col-9">
                </div>

                <div class="div-btn-filtro">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-funnel  m-2" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                    </svg>
                </div>
            </div>

            <div class="col-lg">                        
                <div class="div-input">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    <label>ADICIONAR</label>
                </div>
            </div>

        </div>






        <div class="div-main row">

            <div class="col-lg">
                
                    <img src="../img/img-alunos.png" >

            </div>
           
            <div class="div-mostrar-usuarios col-lg" >
               <?php foreach ($alunos as $aluno): ?>
            
                    <div class="div-dados-usuarios">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-fill col m-2" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                        </div>

                        <div class="col-9">

                            <label>
                                <?= htmlspecialchars($aluno['nome']) ?>
                            </label>
                            <br>

                            <label>
                                <?= htmlspecialchars($aluno['matricula_usuario']) ?>
                            </label>

                        </div>

                        <div>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#modalEdicao"
                                data-matricula="<?= $aluno['matricula_usuario'] ?>"
                                data-nome="<?= htmlspecialchars($aluno['nome']) ?>"
                                data-telefone="<?= htmlspecialchars($aluno['telefone']) ?>"
                                data-cpf="<?= htmlspecialchars($aluno['cpf']) ?>"
                                data-nas="<?= htmlspecialchars($aluno['nas']) ?>">

                                
                                <!-- Ícone -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="col ml-auto" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </button>

                        </div>

                    </div>
                    
                
            <?php endforeach; ?>
            </div>
            


            

        </div>

     
    </main>

      <!-- Modal com o formulário conectado ao PHP -->
  <div class="modal fade" id="modalEdicao" tabindex="-1" aria-labelledby="modalEdicaoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Enviando dados para salvar_dados.php -->
        <form method="POST" action="../php/editar_aluno.php">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEdicaoLabel">Editar Informações do Aluno</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" a   ria-label="Fechar"></button>
          </div>
          <input type="hidden" id="matricula" name="matricula">

          <div class="modal-body">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Nascimento</label>
              <input type="data" class="form-control" id="nas" name="nas" required>
            </div>
            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!--------------------------------------- FOORTER ---------------------------------------------------------->


    <footer>
       
    </footer>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<script>
    var modalEdicao = document.getElementById('modalEdicao');

    modalEdicao.addEventListener('show.bs.modal', function (event) {
        // Botão que abriu o modal
        var button = event.relatedTarget;



        // Pega os dados do botão
        var nascimento = button.getAttribute('data-nas');
        var matricula = button.getAttribute('data-matricula');
        var nome = button.getAttribute('data-nome');
        var telefone = button.getAttribute('data-telefone');
        var cpf = button.getAttribute('data-cpf');

        // Preenche os campos do modal
        modalEdicao.querySelector('#matricula').value = matricula;
        modalEdicao.querySelector('#nome').value = nome;
        modalEdicao.querySelector('#telefone').value = telefone;
        modalEdicao.querySelector('#cpf').value = cpf;
        modalEdicao.querySelector('#nas').value = nascimento;

    });
</script>

</body>
</html>