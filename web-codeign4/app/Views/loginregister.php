<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style/vars.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/style-login-register.css') ?>">
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <title>Login | Registro</title>
</head>
<body>
  <div class="gerenciar-login-registro">
    <div class="top-bar">
      <div class="title"><a href="../views/index.html">Caminho da Memória</a></div>
      <div class="navigation">
        <div class="tab4"><a href="../views/Login-Register.html">Registrar-se/Entrar</a></div>
        <div class="tab"><a href="../views/gerenciar-users.html">Gerenciamento</a></div>
        <div class="tab4"><a href="../views/perfil.html">Perfil</a></div>
        <div class="tab3"><a href="../views/memorias.html">Memórias</a></div>
        <div class="tab2"><a href="../views/exercicio.html">Exercícios</a></div>
      </div>
    </div>
    <img class="logoo-removebg-preview-3" src="<?= base_url('assets/img/logoo-removebg-preview-30.png') ?>" />
    <div class="section">
      <div class="container">
        <div class="title2" id="texto">Bem-vindo(a) de volta Usuário</div>
        <div class="description">
          Administre cuidadores e familiares de forma eficiente no sistema.
        </div>
      </div>
      <img class="vector-200" src="<?= base_url('vectors/vector-2000.svg') ?>" />
      <div class="tab-group">
        <div class="tab5">
          <button class="title3" id="login">Login</button>
        </div>
        <div class="tab5">
          <button class="title3" id="registro">Registro</button>
        </div>
      </div>
    </div>
    <img class="section2" src="<?= base_url('vectors/section1.svg') ?>" />
    <div class="section3">
      <div class="container2">
        <div class="title4">Copyright © 2024 Caminho da Memória</div>
        <!-- Link Política de Privacidade -->
        <div class="title5">
          <a href="#" onclick="openModalPoliticaPrivacidade(event)">Política de Privacidade</a>
        </div>
          <!-- Modal Política de Privacidade -->
          <div id="modalPoliticaPrivacidade" class="modal">
            <div class="modal-content">
              <span class="close" onclick="closeModalPoliticaPrivacidade()">&times;</span>
              <h2>Política de Privacidade</h2>
              <p>
                A Caminho da Memória é comprometida em proteger a privacidade e a segurança dos dados dos nossos usuários. Esta política de privacidade descreve como coletamos, usamos e protegemos as informações pessoais dos nossos usuários.
              </p>
              <h3>Coleta de Dados</h3>
              <p>
                Coletamos informações pessoais dos nossos usuários quando eles se registram no nosso site ou aplicativo, incluindo nome, e-mail e senha. Também coletamos informações sobre o uso do nosso site e aplicativo, incluindo dados de navegação e interações com o conteúdo.
              </p>
              <h3>Uso de Dados</h3>
              <p>
                Usamos as informações coletadas para fornecer e melhorar os nossos serviços, incluindo a personalização do conteúdo e a comunicação com os nossos usuários. Também usamos as informações para fins de marketing e publicidade.
              </p>
              <h3>Proteção de Dados</h3>
              <p>
                Tomamos medidas para proteger as informações pessoais dos nossos usuários, incluindo a criptografia de dados e a implementação de medidas de segurança para prevenir o acesso não autorizado.
              </p>
              <h3>Direitos dos Usuários</h3>
              <p>
                Os nossos usuários têm o direito de acessar, corrigir e excluir as suas informações pessoais. Eles também têm o direito de se opor ao uso das suas informações para fins de marketing e publicidade.
              </p>
              <h3>Alterações à Política de Privacidade</h3>
              <p>
                Podemos alterar esta política de privacidade a qualquer momento. Se fizermos alterações significativas, notificaremos os nossos usuários por e-mail ou por meio de um aviso no nosso site ou aplicativo.
              </p>
            </div>
          </div>
        <div class="title6">
          <a href="#" onclick="openModal(event)">Termos de Uso</a>
        </div>
        <!-- Modal Política de Privacidade -->
        <div id="termsModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1>Termos de Uso</h1>
            <p>Bem-vindo ao sistema Caminho da Memória. Ao utilizar nosso sistema, você concorda com os seguintes termos:</p>
            
            <h2>1. Introdução</h2>
            <p>O sistema Caminho da Memória foi desenvolvido para oferecer suporte prático e acessível para pessoas que enfrentam desafios relacionados à memória. É importante que você leia e compreenda estes termos antes de utilizar o sistema.</p>
            
            <h2>2. Uso do Sistema</h2>
            <p>Você concorda em usar o sistema apenas para fins legais e de acordo com as diretrizes estabelecidas. É proibido:</p>
            <ul>
                <li>Utilizar o sistema para fins fraudulentos ou ilegais.</li>
                <li>Interferir no funcionamento do sistema ou tentar acessá-lo de forma não autorizada.</li>
                <li>Compartilhar suas credenciais de acesso com terceiros.</li>
            </ul>
            
            <h2>3. Relatos de Bugs</h2>
            <p>Se você encontrar algum bug ou problema técnico, por favor, relate-o através do nosso canal de suporte. Inclua as seguintes informações no seu relato:</p>
            <ul>
                <li>Descrição do problema.</li>
                <li>Passos para reproduzir o erro.</li>
                <li>Capturas de tela, se possível.</li>
            </ul>
            <p>Seu feedback é valioso para melhorar a experiência do usuário.</p>
            
            <h2>4. Privacidade e Segurança</h2>
            <p>Estamos comprometidos em proteger a privacidade e a segurança dos dados dos nossos usuários. As informações pessoais coletadas são tratadas de acordo com nossa Política de Privacidade.</p>
            
            <h2>5. Alterações aos Termos</h2>
            <p>Reservamo-nos o direito de alterar estes termos a qualquer momento. As alterações serão publicadas nesta página e entrarão em vigor imediatamente. Recomendamos que você revise os termos periodicamente.</p>
            
            <h2>6. Contato</h2>
            <p>Para mais informações ou dúvidas sobre os termos de uso, entre em contato conosco através do nosso e-mail de suporte: suporte@caminhodamemoria.com.</p>
        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form" id="form-login">
      <div class="container3">
        <div class="title7">Área de Login</div>
      </div>
      <div class="list">
        <div class="row">
          <div class="input">
            <div class="title8">E-mail</div>
            <div class="textfield">
              <input type="text" id="user-input" class="inpute" placeholder="Digite seu e-mail">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Senha</div>
            <div class="textfield">
              <input type="text" id="user-senha" class="senha" placeholder="Digite sua senha">
            </div>
          </div>
        </div>
        <div class="button">
          <div class="seconday">
            <button class="title9">Esqueceu sua senha?</button>
          </div>
          <div class="primary">
          <button type="button" class="title10" id="login-button">Entrar</button>
          </div>
        </div>
      </div>
      <img class="vector-2002" src="<?= base_url('vectors/vector-2001.svg') ?>" />
    </div>
    <div class="form2" id="form-register">
      <div class="container3">
        <div class="title7">Área de Registro</div>
      </div>
      <div class="list">
        <div class="row">
          <div class="input">
            <div class="title8">Nome Completo</div>
            <div class="textfield">
              <input type="user-nome-completo" id="nome-completo" class="nome-completo" placeholder="Digite seu nome completo">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">E-mail</div>
            <div class="textfield">
              <input type="registrar-user" id="email-registro" class="registro-user" placeholder="Digite seu e-mail">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Senha</div>
            <div class="textfield">
              <input type="senha-user" id="senha-registro" class="registro-senha" placeholder="Crie sua senha">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Confirmação de Senha</div>
            <div class="textfield">
              <input type="confirme-senha" id="confirme-senha" class="confirme-senha" placeholder="Confirme sua senha">
            </div>
          </div>
        </div>
        <div class="button2">
          <button type="button" class="primary2 title10" id="register-button">Registrar</button>
        </div>
      </div>
      <img class="vector-2003" src="<?= base_url('vectors/vector-2002.svg') ?>" />
    </div>
  </div>
  
  <!-- Modal de Carregamento -->
<div id="loading-modal" class="modal">
  <div class="modal-loading">
    <img src="../gif/Iphone-spinner-2.gif" alt="Carregando..." class="loading-gif">
    <p>Carregando, por favor aguarde...</p>
  </div>
</div>

<!-- Modal de Sucesso -->
<div id="success-modal" class="modal">
  <div class="modal-loading">
    <img src="../gif/check.gif" alt="Sucesso!" class="loading-gif">
    <p>Registro realizado com sucesso!</p>
  </div>
</div>

<script scr="../scripts/register.js"></script>
<script src="../scripts/script.js"></script>
<script src="../scripts/login.js"></script>





<script>
    // Função para ajustar o zoom para 80%
    function setZoom() {
      document.body.style.zoom = 0.9;
    }
    // Ajusta o zoom ao carregar a página
    window.addEventListener("load", setZoom);
    // Ajusta o zoom ao redimensionar a janela
    window.addEventListener("resize", setZoom);
</script>

<script>

// Obtendo referências aos elementos
const loginForm = document.getElementById("form-login");
const registerForm = document.getElementById("form-register");
const showLogin = document.getElementById("login");
const showRegister = document.getElementById("registro");

// Função para mostrar o login e esconder o registro
showLogin.addEventListener("click", () => {
  loginForm.classList.add("active");
  loginForm.classList.remove("inactive");  // Garante que o login fique visível
  registerForm.classList.remove("active");
  registerForm.classList.add("inactive");  // Garante que o registro desapareça
});

// Função para mostrar o registro e esconder o login
showRegister.addEventListener("click", () => {
  registerForm.classList.add("active");
  registerForm.classList.remove("inactive");  // Garante que o registro fique visível
  loginForm.classList.remove("active");
  loginForm.classList.add("inactive");  // Garante que o login desapareça
});

</script>

<script>
  // Função para abrir o modal
function openModal(event) {
  event.preventDefault(); // Previne o comportamento padrão do link
  var modal = document.getElementById("termsModal");
  modal.style.display = "block";
}

// Função para fechar o modal
function closeModal() {
  var modal = document.getElementById("termsModal");
  modal.style.display = "none";
}

// Fecha o modal quando o usuário clica fora dele
window.onclick = function(event) {
  var modal = document.getElementById("termsModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Fecha o modal quando o usuário clica no botão de fechar
document.getElementsByClassName("close")[0].onclick = closeModal;
  // Função para abrir o modal de política de privacidade
  function openModalPoliticaPrivacidade(event) {
    event.preventDefault(); // Impede a rolagem para o topo
    document.getElementById("modalPoliticaPrivacidade").style.display = "block";
  }
  
  // Função para fechar o modal de política de privacidade
  function closeModalPoliticaPrivacidade() {
    document.getElementById("modalPoliticaPrivacidade").style.display = "none";
  }
  
  // Fechar o modal de política de privacidade ao clicar fora dele
  document.getElementById("modalPoliticaPrivacidade").addEventListener("click", function (event) {
    if (event.target === document.getElementById("modalPoliticaPrivacidade")) {
      document.getElementById("modalPoliticaPrivacidade").style.display = "none";
    }
  });
  </script> 
</body> 
</html>