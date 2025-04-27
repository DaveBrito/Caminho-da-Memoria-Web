document.addEventListener('DOMContentLoaded', () => {
    // Função para registrar o usuário
    document.querySelector('#register-button').addEventListener('click', async () => {
        const nomeCompleto = document.getElementById('nome-completo').value;
        const email = document.getElementById('email-registro').value;
        const senha = document.getElementById('senha-registro').value;
        const confirmeSenha = document.getElementById('confirme-senha').value;
  
        // Validação básica
        if (!nomeCompleto || !email || !senha || !confirmeSenha) {
            alert('Por favor, preencha todos os campos.');
            return;
        }
  
        if (senha !== confirmeSenha) {
            alert('As senhas não coincidem.');
            return;
        }
  
        // Mostrar modal de carregamento e desabilitar botão
        const registerButton = document.getElementById('register-button');
        const loadingModal = document.getElementById('loading-modal');
        const successModal = document.getElementById('success-modal');
        registerButton.disabled = true;
        loadingModal.style.display = 'block';
  
        // Verificar se o e-mail já existe
        const checkEmailResponse = await fetch(SUPABASE_URL + '/rest/v1/usuarios?email=eq.' + email, {
            method: 'GET',
            headers: {
                'apikey': SUPABASE_KEY,
                'Authorization': 'Bearer ' + SUPABASE_KEY,
                'Content-Type': 'application/json'
            }
        });
  
        const emailData = await checkEmailResponse.json();
  
        if (emailData.length > 0) {
            alert('E-mail já registrado. Por favor, use outro e-mail.');
            registerButton.disabled = false;
            loadingModal.style.display = 'none';
            return;
        }
  
        // Conectar ao Supabase para registrar o usuário
        const response = await fetch(SUPABASE_URL + '/rest/v1/usuarios', {
            method: 'POST',
            headers: {
                'apikey': SUPABASE_KEY,
                'Authorization': 'Bearer ' + SUPABASE_KEY,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nome: nomeCompleto,
                email: email,
                senha: senha
            })
        });
  
        if (response.ok) {
            // Limpar o formulário
            document.getElementById('nome-completo').value = '';
            document.getElementById('email-registro').value = '';
            document.getElementById('senha-registro').value = '';
            document.getElementById('confirme-senha').value = '';
            // Ocultar modal de carregamento e mostrar modal de sucesso
            loadingModal.style.display = 'none';
            successModal.style.display = 'block';
            // Ocultar modal de sucesso após alguns segundos
            setTimeout(() => {
                successModal.style.display = 'none';
                registerButton.disabled = false;
                // Recarregar a página e rolar para o topo
                window.scrollTo(0, 0);
                location.reload();
            }, 3000); // Ajuste o tempo conforme necessário
        } else {
            alert('Erro ao registrar: ' + response.statusText);
            registerButton.disabled = false;
            loadingModal.style.display = 'none';
        }
    });
  });