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
    <link rel="stylesheet" href="<?= base_url('assets/style/style-users.css') ?>">
  
  <title>Gerenciar Usuários</title>

</head>
<body>
  <div class="gerenciar-users">
    <div class="top-bar">
      <div class="title"><a href="../views/index.html">Caminho da Memória</a></div>
      <div class="navigation">
        <div class="tab3"><a href="../views/Login-Register.html">Registrar-se/Entrar</a></div>
        <div class="tab4"><a href="../views/gerenciar-users.html">Gerenciamento</a></div>
        <div class="tab1"><a href="../views/perfil.html">Perfil</a></div>
        <div class="tab"><a href="../views/memorias.html">Memórias</a></div>
        <div class="tab2"><a href="../views/exercicio.html">Exercícios</a></div>
      </div>
    </div>
    <img class="logoo-removebg-preview-3" src="<?= base_url('assets/img/logoo-removebg-preview-30.png') ?>" />
    <div class="section">
      <div class="container">
        <div class="title2"id="texto">Bem-vindo ao Gerenciamento de Usuário</div>
        <div class="description">
          Administre cuidadores e familiares de forma eficiente no sistema.
        </div>
      </div>
      <img class="vector-200" src="<?= base_url('vectors/vector-2000.svg') ?>" />
    </div>
    <div class="section2">
      <img
        class="download-premium-png-of-account-png-line-icon-user-symbol-by-aew-about-profile-icon-person-icon-png-person-icon-profile-png-and-profile-3012376-1"
        src="<?= base_url('assets/img/download-premium-png-of-account-png-line-icon-user-symbol-by-aew-about-profile-icon-person-icon-png-person-icon-profile-png-and-profile-3012376-10.png') ?>"
      />
      <div class="avatar"></div>
      <div class="container2">
        <div class="title3">Nome do Usuário</div>
        <div class="selection">
        </div>
        <div class="description2">
          Gerencie perfis e mantenha informações atualizadas.
        </div>
      </div>
      <div class="button">
        <div class="primary">
          <div class="title4">Editar Usuários</div>
        </div>
        <a href="#adicionar-usuario">
        <div class="seconday">
          <button class="title5">Adicionar Usuários</button> 
        </div>
        </a>
        <a href="perfil.html">
        <div class="primary">
          <div class="title4">Perfil</div>
        </div>
        <a href="perfil.html"></a>
      </div>
      <img class="vector-2002" src="<?= base_url('vectors/vector-2001.svg') ?>" />
    </div>
    <div class="list">
      <div class="container3">
        <div class="primary2">
          <div class="title6">Visualizar</div>
        </div>
        <div class="title7">Lista de Usuários</div>
        <div class="description3">
          Visualize todos os registros cadastrados no sistema.
        </div>
      </div>
      <div class="list2">
        <div class="row">
          <div class="item">
            <div class="frame">
              <div class="icon">😀</div>
            </div>
            <div class="frame-427318906">
              <div class="title8">Cuidador 1</div>
              <div class="subtitle">Cuidando de João</div>
            </div>
            <div class="subtitle2">11/05/2021</div>
          </div>
          <div class="item">
            <div class="frame">
              <div class="icon">😊</div>
            </div>
            <div class="frame-427318906">
              <div class="title8">Familiar 2</div>
              <div class="subtitle">Parente de Maria</div>
            </div>
            <div class="subtitle2">21/06/2021</div>
          </div>
        </div>
      </div>
      <img class="vector-2003" src="<?= base_url('vectors/vector-2002.svg') ?>" />
    </div>
    <div class="form" id="adicionar-usuario">
      <div class="container4">
        <div class="title21">Adicionar Usuário</div>
      </div>
      <form class="list3">
        <div class="row2">
          <div class="input">
            <div class="title9">Nome</div>
            <label class="textfield">
              <input type="text" name="nome" placeholder="Digite o nome">
            </label>
          </div>
          <div class="input">
            <div class="title9">E-mail</div>
            <label class="textfield">
              <input type="email" name="email" placeholder="Digite o e-mail">
            </label>
          </div>
        </div>
        <div class="row2">
          <div class="input">
            <div class="title9">Telefone</div>
            <label class="textfield">
              <input type="text" name="telefone" placeholder="Digite o telefone">
            </label>
          </div>
          <div class="selection2">
            <div class="title9">Relação</div>
            <div class="textfield2">
              <select id="exercicio" name="exercicio" class="text">
                <option value="" disabled selected>Selecione um tipo...</option>
                <option value="familiar">Familiar</option>
                <option value="amigo">Amigo</option>
                <option value="cuidador">Cuidador</option>
            </select>
            </div>
          </div>
        </div>
        <div class="button2">
          <div class="seconday2">
            <button type="button" class="title5" onclick="cancelarAdicao()">Cancelar</button>
          </div>
          <div class="primary3">
            <button type="submit" class="title4">Salvar Alterações</button>
          </div>
        </div>
      </form>
      <img class="vector-2004" src="../vectors/vector-2003.svg" />
    </div>
    <div class="section3">
      <img class="image-6" src="<?= base_url('assets/img/image-60 copy 2.png') ?>" />
      <div class="container5">
        <div class="title10">Copyright © 2024 Empresa</div>
        <div class="title11"> <a href="#" onclick="openModal(event)">Termos de Uso</a>
        </div>
        <!-- Modal Termos de Uso -->
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
        <div class="title12"><a href="#" onclick="openModalPoliticaPrivacidade(event)">Política de Privacidade</a>
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
      </div>
    </div>
  </div>
</body>
  <!--- Script para 'Digitação e troca de palavras'. Verifique o código para mais entendimento--> 
    <script src="../scripts/script.js"></script>

    <!--- Script para rolagem suave para a seção de 'Adicionar Usuário' -->
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
    
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>


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
</html>
