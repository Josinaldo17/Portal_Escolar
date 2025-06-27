<?php
$senha = $_POST["senha"] ?? '';
$confirmar = $_POST["confirmar_senha"] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado do Cadastro</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <div class="form-container">
    <h2>Resultado do Cadastro</h2>

    <?php if ($senha && $confirmar): ?>
      <?php if ($senha === $confirmar): ?>
        <p><strong>Senha cadastrada com sucesso!</strong></p>
        <p><strong>Senha:</strong> <?php echo htmlspecialchars($senha); ?></p>
      <?php else: ?>
        <p style="color:red;"><strong>Erro:</strong> As senhas não coincidem.</p>
      <?php endif; ?>
    <?php else: ?>
      <p style="color:red;">Dados não recebidos corretamente.</p>
    <?php endif; ?>
  </div>
</body>
</html>
