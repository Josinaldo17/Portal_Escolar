document.getElementById('formCadastroAluno').addEventListener('submit', function (event) {
  event.preventDefault(); // Impede o envio do formulário

  // Limpa mensagens de erro anteriores
  clearErrors();

  // Captura os valores dos campos
  const nomeAluno = document.getElementById('nomeAluno').value.trim();
  const matricula = document.getElementById('matricula').value.trim();
  const dataNascimento = document.getElementById('dataNascimento').value.trim();
  const curso = document.getElementById('curso').value.trim();

  // Validação dos campos
  let isValid = true;

  if (nomeAluno === '') {
    showError('nomeAluno', 'O campo Nome do Aluno é obrigatório.');
    isValid = false;
  }

  if (matricula === '') {
    showError('matricula', 'O campo Matrícula é obrigatório.');
    isValid = false;
  }

  if (dataNascimento === '') {
    showError('dataNascimento', 'O campo Data de Nascimento é obrigatório.');
    isValid = false;
  }

  if (curso === '') {
    showError('curso', 'O campo Curso é obrigatório.');
    isValid = false;
  }

  // Se tudo estiver válido, exibe uma mensagem de sucesso
  if (isValid) {
    alert('Aluno cadastrado com sucesso!');
    this.reset(); // Limpa o formulário
  }
});

function showError(fieldId, message) {
  const field = document.getElementById(fieldId);
  const errorDiv = document.createElement('div');
  errorDiv.className = 'error-message';
  errorDiv.textContent = message;
  field.parentNode.insertBefore(errorDiv, field.nextSibling);
}

function clearErrors() {
  const errors = document.querySelectorAll('.error-message');
  errors.forEach(error => error.remove());
}