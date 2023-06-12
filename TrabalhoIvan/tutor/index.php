<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

    <div class ="container">
        <h1>Tutores</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success" >Inserir Tutor</a>
        </div>           
        <br>
        <br>

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Código</th> 
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Polo</th>
      <th scope="col">Area de formação</th>
      <th scope="col">Tipo</th>
      <th scope="col" width="20%">Ações</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($tutores as $tutor){ ?>
   
    <tr>
      <th scope="row"><?php echo $tutor['nome']; ?></th>
      <td><?php echo $tutor['sexo']; ?></td>
      
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $tutor['codigo']; ?>"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="form.php?id=<?php echo $tutor['codigo']; ?>"class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Atualizar</a>
      </td>
    </tr>
<?php } ?>

  </tbody>
</table>
   </div>
   <?php require_once "../template/rodape.php"; ?> 