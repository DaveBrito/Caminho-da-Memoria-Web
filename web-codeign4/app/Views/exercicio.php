<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?= base_url('assets/style/vars.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/style-exercicio.css') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  <title>Exercícios</title>
</head> 
<body>
  <div class="gerenciar-exercicios">
    <div class="top-bar">
      <div class="title"><a href="../views/index.html">Caminho da Memória</a></div>
      <div class="navigation">
        <div class="tab"><a href="../views/Login-Register.html">Registrar/Entrar</a></div>
        <div class="tab3"><a href="../views/gerenciar-users.html">Gerenciamento</a></div>
        <div class="tab2"><a href="../views/perfil.html">Perfil</a></div>
        <div class="tab4"><a href="../views/memorias.html">Memórias</a></div>
        <div class="tab5"><a href="../views/exercicio.html">Exercícios</a></div>
      </div>
    </div>
    <img class="logoo-removebg-preview-3" src="<?= base_url('assets/img/logoo-removebg-preview-30.png') ?>" />
    <div class="section">
      <div class="container">
        <div class="title2" id="texto">
          Bem-vindo ao Gerenciamento de Exercícios Cognitivos
        </div>
        <div class="description">
          Administre exercícios de forma eficiente no sistema e pratique-os!
        </div>
      </div>
      <img class="vector-200" src="<?= base_url('vectors/vector-2000.svg') ?>" />
    </div>
    <div class="section2">
      <img
        class="download-premium-png-of-account-png-line-icon-user-symbol-by-aew-about-profile-icon-person-icon-png-person-icon-profile-png-and-profile-3012376-2"
        src="<?= base_url('assets/img/perfil.png') ?>"
      />
      <div class="container2">
        <div class="title3">Nome do Usuário</div>
        <div class="description2">
          Gerencie exercícios e mantenha informações atualizadas.
        </div>
      </div>
      <div class="button">
        <div class="primary">
          <button class="title4">Editar Exercícios</button>
        </div>
        <a href="#adicionar-exercicio">
          <div class="seconday">
            <div class="title5">Adicionar Exercícios</div>
          </div>
        </a>
        <div class="primary">
          <button class="title4">Editar Perfil</button>
        </div>
      </div>
      <img class="vector-2002" src="<?= base_url('vectors/vector-2001.svg') ?>" />
      
    </div>
    <div class="list">
      <div class="container3">
        <div class="primary2">
          <button class="title6">Visualizar</button>
        </div>
        <div class="title7">Lista de Exercícios</div>
        <div class="description3">
          Visualize todos os exercícios cadastrados vinculado em sua conta.
        </div>
      </div>
      <div class="frame-427318907">
        <div class="list2">
          <div class="row">
            <div class="item">
              <img class="learning" src="<?= base_url('assets/img/learning0.png') ?>" />
              <div class="frame-427318906">
                <div class="title8">#1 Exercício</div>
              </div>
              <div class="subtitle">11/05/2021</div>
            </div>
            <div class="item">
              <img class="learning" src="<?= base_url('assets/img/Exercise.png') ?>"  />
              <div class="frame-427318906">
                <div class="title8">#2 Exercício</div>
              </div>
              <div class="subtitle">21/06/2021</div>
            </div>
          </div>
        </div>
      </div>
      <img class="vector-2003" src="<?= base_url('vectors/vector-2002.svg') ?>" />
    </div>
    <div class="form" id="adicionar-exercicio">
      <div class="container4">
        <div class="title9">Adicionar Exercício</div>
      </div>
      <div class="list3">
        <div class="row2">
          <div class="input">
            <div class="title10">Nome do Exercício</div>
            <div class="textfield">
              <input type="text" id="nome" class="text" placeholder="Digite o nome">
            </div>
          </div>
          <div class="input">
            <div class="title10">Tipo de Exercício</div>
            <div class="textfield">
              <select id="exercicio" name="exercicio" class="text">
                <option value="" disabled selected>Selecione um tipo...</option>
                <option value="musculacao">Musculação</option>
                <option value="cardio">Cardio</option>
                <option value="yoga">Yoga</option>
                <option value="pilates">Pilates</option>
                <option value="crossfit">Crossfit</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="input">
            <div class="title10">Descrição</div>
            <div class="textfield">
              <input type="descricao" id="descricao" class="text"  placeholder="Deixe uma descrição do exercício">
            </div>
          </div>
        </div>
        <div class="button2">
          <div class="seconday2">
            <div class="title5">Cancelar</div>
          </div>
          <div class="primary3">
            <div class="title4">Salvar Alterações</div>
          </div>
        </div>
      </div>
      <img class="vector-2004" src="<?= base_url('vectors/vector-2003.svg') ?>"  />
    </div>
    <div class="section3">
      <div class="section4">
        <img class="vector-2005" src="<?= base_url('vectors/vector-2004.svg') ?>"  />
        <div class="container5">
          <div class="title11">Copyright © 2024 Caminho da Memória</div>
          <div class="title12"> <a href="#" onclick="openModal(event)">Termos de Uso</a>
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
  </div>
</div>
</body>

  <!--- Script para 'Digitação e troca de palavras'. Verifique o código para mais entendimento--> 
  <script src="../scripts/script-exercicio.js"></script>
  <!--- Script de rolagem suave para a seção de 'Adicionar Exercícios' -->
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