<?php 
//Chamando Header
include_once 'C:\wamp64\www\cursophp\CRUD\includes\header.php'
 ?>

<div class = "row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Base de Programadores Perfeitos para a Inhalt</h3>
    <table>
      <thead>
        <tr>
          <th>Nome: </th>
          <th>Email: </th>
          <th>Telefone: </th>
          <th>Idade: </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Breno Marques</td>
          <td>breno.aqt@gmail.com</td>
          <td>81 98139-3573 </td>
          <td>21</td>
          <td><a href="" class="btn-floating blue"><i class="materia-icons">Alt</i></a></td>
          <td><a href="" class="btn-floating red"><i class="materia-icons">Del</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn">Adicione outro Programador</a>
    </br>
  </div>
</div>

<?php 
// Footer

include_once 'C:\wamp64\www\cursophp\CRUD\includes\footer.php'
 ?>