document.addEventListener('DOMContentLoaded', () => {
    // Função para fazer login do usuário
    document.querySelector('#login-button').addEventListener('click', async () => {
        const email = document.getElementById('email-login').value;
        const senha = document.getElementById('senha-login').value;
  
        // Validação básica
        if (!email || !senha) {
            alert('Por favor, preencha todos os campos.');
            return;
        }
  
        // Mostrar modal de carregamento e desabilitar botão
        const loginButton = document.getElementById('login-button');
        const loadingModal = document.getElementById('loading-modal');
        loginButton.disabled = true;
        loadingModal.style.display = 'block';
  
        // Verificar se o e-mail e senha estão corretos
        const response = await fetch(SUPABASE_URL + '/rest/v1/usuarios?email=eq.' + email + '&senha=eq.' + senha, {
            method: 'GET',
            headers: {
                'apikey': SUPABASE_KEY,
                'Authorization': 'Bearer ' + SUPABASE_KEY,
                'Content-Type': 'application/json'
            }
        });
  
        const userData = await response.json();
  
        if (userData.length > 0) {
            // Login bem-sucedido
            alert('Login realizado com sucesso!');
            // Redirecionar para a página principal ou outra página
            window.location.href = '../views/perfil.html'; // Substitua pelo caminho da sua página principal
        } else {
            alert('E-mail ou senha incorretos.');
            loginButton.disabled = false;
            loadingModal.style.display = 'none';
        }
    });
  });