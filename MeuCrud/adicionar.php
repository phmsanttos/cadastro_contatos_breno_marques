<?php 
//Chamando Header
include_once 'C:\wamp64\www\cursophp\CRUD\includes\header.php'
 ?>

<div class = "row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Programador</h3>
    <form action = "C:\wamp64\www\cursophp\CRUD\php_action\create.php" method="POST">
      <div class= "input-field col s12">
        <input type="text" name ="nome" id="nome">
        <label for = "nome">Nome do Programador</label> 
      </div>
            <div class= "input-field col s12">
        <input type="text" name ="email" id="email">
        <label for = "email">Email</label> 
      </div>
            <div class= "input-field col s12">
        <input type="text" name ="senha" id="senha">
        <label for = "senha">Senha</label> 
      </div>
            <div class= "input-field col s12">
        <input type="text" name ="telefone" id="telefone">
        <label for = "telefone">Telefone</label> 
      </div>
      <div class= "input-field col s12">
        <input type="text" name ="github" id="github">
        <label for = "github">Github</label> 
      </div>
      <div class= "input-field col s12">
        <input type="text" name ="linkedin" id="linkedin">
        <label for = "linkedin">LinkedIn</label> 
      </div>
      <button type="submit" name="btn-cadastrar" class="btn">Cadastrar outro Programador</button>
      <a href="index.php" class="btn">Voltar a Tela Inicial</a>
    </form>
  </div>
</div>

<?php 
// Footer

include_once 'C:\wamp64\www\cursophp\CRUD\includes\footer.php'
 ?>