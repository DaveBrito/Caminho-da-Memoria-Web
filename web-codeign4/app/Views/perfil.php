<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
  <link rel="stylesheet" href="../styles/vars.css">
  <link rel="stylesheet" href="../styles/perfil.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  
  <title>Perfil</title>
</head>
<body>
  <div class="alzheimers-profile">
    <div class="header">
      <img class="logoo-removebg-preview-4" src="../imgs/logoo-removebg-preview-40.png" />
      <div class="title"><a href="../views/index.html">Caminho da Memória</a></div> 
      <div class="navigation">
        <div class="tab4"><a href="../views/Login-Register.html">Registrar-se/Entrar</a></div>
        <div class="tab"><a href="../views/gerenciar-users.html">Gerenciamento</a></div>
        <div class="tab4"><a href="../views/perfil.html">Perfil</a></div>
        <div class="tab3"><a href="../views/memorias.html">Memórias</a></div>
        <div class="tab2"><a href="../views/exercicio.html">Exercícios</a></div>
    </div>
    </div>
    <div class="profile-summary">
      <img
        class="download-premium-png-of-account-png-line-icon-user-symbol-by-aew-about-profile-icon-person-icon-png-person-icon-profile-png-and-profile-3012376-1"
        src="../imgs/download-premium-png-of-account-png-line-icon-user-symbol-by-aew-about-profile-icon-person-icon-png-person-icon-profile-png-and-profile-3012376-10.png"
      />
      <div class="maria-carmen">Maria Carmen</div>
      <div
        class="idade-72-nome-completo-maria-carmen-de-souza-email-exem-gmail-com"
      >
        Idade: 72 | Nome Completo: Maria Carmen de Souza
        <br />
        Email : exem******@gmail.com
      </div>
      <div class="primary" id="openModal">
        <button class="title2">Editar Perfil</button>
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Editar Perfil</h2>
            <form>
                <label for="fullName">Nome Completo:</label>
                <input type="text" id="fullName" value="Maria Carmen de Souza"><br><br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" value="exem****@gmail.com"><br><br>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" value="11 9999-9999"><br><br>
                <label for="address">Endereço:</label>
                <input type="text" id="address" value="Rua Manoel Guilherme Braga"><br><br>
               <!-- Botão de excluir conta -->
                <div class="modal-buttons">
                  <button type="button" class="delete-btn">Excluir Conta</button>
                </div>
                  <div class="action-buttons">
                    <button type="button" class="cancel-btn" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="save-btn">Salvar</button>
                  </div>
            </form>
        </div>
      </div>
     <!-- Modal de Confirmação de Exclusão -->
  <div id="deleteConfirmModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeDeleteConfirmModal()">&times;</span>
      <h2>Confirmar Exclusão</h2>
      <p>Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.</p>
      <div class="modal-buttons">
        <button type="button" class="cancel-btn" onclick="closeDeleteConfirmModal()">Cancelar</button>
        <button type="button" class="delete-btn" onclick="deleteAccount()">Excluir</button>
      </div>
    </div>
  </div>

  <!-- Mensagem de Sucesso -->
  <div id="successMessage" class="success-message" style="display: none;">
    <p>Dados atualizados com sucesso!</p>
  </div>
</div>

    <div class="info-tabs">
      <div class="linha-do-tempo">Linha do Tempo</div>
      <div class="div">|</div>
      <div class="informa-es-pessoais">Informações Pessoais</div>
    </div>
    <div class="content-area">
      <div class="atividades-feitas">Atividades Feitas</div>
      <div class="timeline-entry-0">
        <div class="_2023-5-15">2023-5-15</div>
        <div class="exerc-cio-de-mem-ria-sess-o-3">
          Exercício de Memória Sessão #3
        </div>
        <div
          class="conclu-atividades-di-rias-de-quebra-cabe-a-e-de-recorda-o-de-nomes"
        >
          Concluíu atividades diárias de quebra-cabeça e de recordação de nomes.
        </div>
      </div>
      <div class="timeline-entry-1">
        <div class="_2022-4-14">2022-4-14</div>
        <div class="exerc-cio-de-mem-ria-sess-o-2">
          Exercício de Memória Sessão #2
        </div>
        <div
          class="conclu-atividades-di-rias-de-quebra-cabe-a-e-de-recorda-o-de-nomes"
        >
          Concluíu atividades diárias de quebra-cabeça e de recordação de nomes.
        </div>
      </div>
      <div class="timeline-entry-2">
        <div class="_2021-3-13">2021-3-13</div>
        <div class="exerc-cio-de-mem-ria-sess-o-1">
          Exercício de Memória Sessão #1
        </div>
        <div
          class="conclu-atividades-di-rias-de-quebra-cabe-a-e-de-recorda-o-de-nomes"
        >
          Concluíu atividades diárias de quebra-cabeça e de recordação de nomes.
        </div>
      </div>
    </div>
    <div class="informa-es-apenas-para-exibi-o">
      Informações apenas para exibição.
    </div>
    <div class="suas-informa-es-pessoais-em-um-lugar-s">
      Suas informações pessoais em um lugar só!
    </div>
    <div class="list">
      <div class="row">
        <div class="input">
          <div class="title3">Nome Completo</div>
          <div class="textfield">
            <div class="text">Maria Carmen de Souza</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input">
          <div class="title3">E-mail</div>
          <div class="textfield">
            <div class="text">exem****@gmail.com</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input">
          <div class="title3">Telefone</div>
          <div class="textfield">
            <div class="text">11 9999-9999</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input">
          <div class="title3">Endereço</div>
          <div class="textfield">
            <div class="text">Rua Manoel Guilherme Braga</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>


<script>
  // Função para ajustar o zoom para 80%
  function setZoom() {
    document.body.style.zoom = 0.8;
  }
  // Ajusta o zoom ao carregar a página
  window.addEventListener("load", setZoom);
  // Ajusta o zoom ao redimensionar a janela
  window.addEventListener("resize", setZoom);
</script>



   <!-- Script para abrir e fechar modal de editar perfil -->

   <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal");
    var span = document.getElementById("closeModal");
    
    function openModal() {
      modal.style.display = "block";
    }
    
    function closeModal() {
      modal.style.display = "none";
    }
    
    function openDeleteConfirmModal() {
      document.getElementById("deleteConfirmModal").style.display = "block";
    }
    
    function closeDeleteConfirmModal() {
      document.getElementById("deleteConfirmModal").style.display = "none";
    }
    
    function deleteAccount() {
      // Adicione aqui a lógica para excluir a conta
      alert("Conta excluída com sucesso!");
      closeDeleteConfirmModal();
      closeModal();
    }
    
    function saveChanges() {
      // Adicione aqui a lógica para salvar as alterações
      closeModal();
      showSuccessMessage();
    }
    
    function showSuccessMessage() {
      var successMessage = document.getElementById("successMessage");
      successMessage.style.display = "block";
      setTimeout(function() {
        successMessage.style.display = "none";
      }, 3000); // Exibe a mensagem por 3 segundos
    }
    
    // Fecha o modal quando o usuário clica fora dele
    window.onclick = function(event) {
      if (event.target == modal) {
        closeModal();
      }
      if (event.target == document.getElementById("deleteConfirmModal")) {
        closeDeleteConfirmModal();
      }
    }
    
    // Quando o usuário clica no botão, abre o modal
    btn.onclick = function() {
      openModal();
    }
    
    // Quando o usuário clica no <span> (x), fecha o modal
    span.onclick = function() {
      closeModal();
    }
    </script>
</html>