<?php
// filepath: C:\Users\Davi\Documents\Projetos\Caminho-da-Memoria-Web\app\Controllers\Home.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style/vars.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/style.css') ?>">
</head>
<body>
    <div class="page">
    <div class="navigation-container">
    <div class="navigation">
        <div class="tab31"><a href="<?= base_url('memorias') ?>">Memórias</a></div>
        <div class="tab32"><a href="<?= base_url('exercicio') ?>">Exercícios</a></div>
        <div class="tab3"><a href="<?= base_url('loginregister') ?>">Registrar-se/Entrar</a></div>
        <div class="gerenciamento"><a href="<?= base_url('gerenciarusers') ?>">Gerenciamento</a></div>
        <div class="tab2"><a href="<?= base_url('perfil') ?>">Perfil</a></div>
    </div>
</div>

<!-- Remova a div navigation3 original -->
        <img class="image-6" src="<?= base_url('assets/img/image-60.png') ?>" />
        <div class="title"> <a href="<?= site_url('/') ?>">Caminho da Memória</a></div>
    
    <div class="section">
      <div class="image-container">
        <div class="image">
          <div class="pagination">
            <div class="rectangle-3343"></div>
            <div class="rectangle-3344"></div>
            <div class="rectangle-3347"></div>
            <div class="rectangle-3340"></div>
          </div>
        </div>
      </div>
      <img class="vector-200" src="<?= base_url('vectors/vector-2000.svg') ?>" />
      <div
        class="conectando-cuidadores-e-fam-lias-mem-rias-e-suporte-ao-seu-alcance"
      >
        “Conectando Cuidadores e Famílias: Memórias e Suporte ao Seu Alcance”
      </div>
    </div>
    <div class="contents">
      <div class="container">
        <div class="title3">Seção de Boas-Vindas</div>
        <div class="description">
          Conheça as funcionalidades do sistema de gerenciamento. Navegue e
          descubra o que temos para oferecer!
        </div>
        <div class="button">
          <div class="primary" onclick="openModal()">
            <button class="title4" >Ler Mais</button>
          </div>
    </div>
        <!-- Modal -->
      <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Bem-vindo ao Caminho da Memória!</h2>
    <p>
      Estamos felizes em tê-lo conosco. O <strong>Caminho da Memória</strong> é uma plataforma dedicada a ajudar cuidadores, familiares e pacientes a gerenciar memórias, exercícios cognitivos e informações importantes de forma prática e eficiente.
    </p>
    <h3>Nosso Objetivo</h3>
    <p>
      Nosso objetivo é proporcionar uma plataforma fácil e acessível que permita cuidadores e familiares gerenciar informações essenciais de forma prática, centralizando o controle de memórias, usuários e exercícios cognitivos, promovendo assim um suporte mais eficaz e uma melhor qualidade de vida para os usuários.
    </p>
    <h3>Como Funciona</h3>
    <p>
      Aqui você pode:
    </p>
    <ul>
      <li>📸 <strong>Guardar memórias</strong> preciosas.</li>
      <li>🧠 <strong>Praticar exercícios</strong> para estimular a mente.</li>
      <li>👩‍⚕️ <strong>Gerenciar usuários</strong> e informações essenciais.</li>
    </ul>
    <p>
      Explore todas as funcionalidades e descubra como podemos ajudar a melhorar a qualidade de vida de todos os envolvidos.
    </p>
    <h3>Por que Escolher o Caminho da Memória?</h3>
    <p>
      O Caminho da Memória é uma plataforma inovadora que oferece uma solução completa para gerenciar memórias e informações importantes. Com nossa plataforma, você pode:
    </p>
    <ul>
      <li>📈 <strong>Aumentar a eficiência</strong> no gerenciamento de memórias e informações.</li>
      <li>📊 <strong>Reduzir o estresse</strong> e a ansiedade relacionados ao gerenciamento de memórias.</li>
      <li>👥 <strong>Melhorar a comunicação</strong> entre cuidadores, familiares e pacientes.</li>
    </ul>
    <p>
      Junte-se a nós e descubra como o Caminho da Memória pode ajudar a melhorar a qualidade de vida de todos os envolvidos.
    </p>
  </div>
</div>
      </div>
      <div class="row">
        <div class="article">
          <div class="image-container2">
            <div class="image2"></div>
          </div>
          <img
            class="logoo-removebg-preview-1"
            src="<?= base_url('assets/img/logoo-removebg-preview-10.png') ?>"
          />
          <div class="frame-427318906">
            <div class="title5">Caminho da Memória</div>
            <div class="subtitle">
              Nosso objetivo é proporcionar uma plataforma fácil e acessível que
              permita cuidadores e familiares gerenciar informações essenciais de
              forma prática, centralizando o controle de memórias, usuários e
              exercícios cognitivos, promovendo assim um suporte mais eficaz e uma
              melhor qualidade de vida para os usuários.
            </div>
            <div class="selection">
              <div class="label-normal"></div>
            </div>
          </div>
        </div>
      </div>
      <img class="vector-2002" src="<?= base_url('vectors/vector-2001.svg') ?>" />
    </div>
    <div class="list">
      <div class="container2">
        <div class="title6">Atalhos Rápidos</div>
      </div>
      <div class="list2">
        <div class="row2">
          <div class="item">
            <div class="frame">
              <a href="<?= site_url('gerenciarusers') ?>"> 
                <div class="icon">👩‍⚕️</div>
              </a> 
            </div>
            <div class="frame-4273189062">
              <div class="title7"><a href="<?= site_url('gerenciarusers') ?>">Gerencie Usuários</a></div>
            </div>
          </div>
          <div class="item">
            <div class="frame">
            <a href="<?= site_url('memorias') ?>">
              <div class="icon">📸</div>
            </a>
            </div>
            
            <div class="frame-4273189062">
              <div class="title7"><a href="<?= site_url('memorias') ?>">Guarde Memórias</a></div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="frame">
              <a href="<?= site_url('exercicio') ?>">
              <div class="icon">🧠</div>
              </div>
            </a>
            <div class="frame-4273189062">
              <div class="title7"> <a href="<?= site_url('exercicio') ?>">Pratique Exercícios</a></div>
            </div>
          </div>
        </div>
      </div>
      <img class="vector-2003" src="<?= base_url('vectors/vector-2002.svg') ?>" />
    </div>
    <div class="section2">
    <!-- Conteúdo textual -->
    <div class="container3">
        <a href="mailto:contato@gerenciamentodecuidados.com" role="link">
            <div class="title8" role="heading" aria-level="2">Email: contato@gerenciamentodecuidados.com</div>
        </a>
        <div class="title9">
            © 2024 Caminho da Memória 
        </div>
        <!-- Link Política de Privacidade -->
        <div class="title21">
            <a href="#" onclick="openModalPoliticaPrivacidade(event)">Política de Privacidade</a>
        </div>
    </div>

  <!-- REMOVA a tag <img> e substitua por: -->
  <div class="footer-azul"></div>

    <!-- Modal -->
    <div id="modalPoliticaPrivacidade" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModalPoliticaPrivacidade()">&times;</span>
            <h2>Política de Privacidade</h2>
            <p>A Caminho da Memória é comprometida em proteger a privacidade...</p>
        </div>
    </div>
</div> 
    <img class="logoo-removebg-preview-12" src="<?= base_url('assets/img/logoo-removebg-preview-11.png') ?>" />
    <img class="logoo-removebg-preview-2" src="<?= base_url('assets/img/logoo-removebg-preview-20.png') ?>" />
  </div>
    </div>
    
</body>
<script>
  // Função para ajustar o zoom para 80%
  function setZoom() {
    document.body.style.zoom = 1.0;
  }
  // Ajusta o zoom ao carregar a página
  window.addEventListener("load", setZoom);
  // Ajusta o zoom ao redimensionar a janela
  window.addEventListener("resize", setZoom);
</script>
<!-- Scripts relacionados com Events -->
  <script>
  // Abertura de 'Ler Mais'
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }

  // 'Ler Mais'
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }

  // Fechar o modal 'Ler Mais' ao clicar fora dele
  document.getElementById("myModal").addEventListener("click", function (event) {
    if (event.target === document.getElementById("myModal")) {
      document.getElementById("myModal").style.display = "none";
    }
  });

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