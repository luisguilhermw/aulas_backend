<?php require_once "consultar_todos.php" ?>
<?php require_once "../template/cabecalho.php"; ?>

    <h1>Cadastro de Tutor</h1>
    <hr>
<div class="container">
    <form action="<?php echo isset($tutor) ? "atualizar.php" : 'inserir.php' ?>" method="post" enctype="multipart/form-data">


    <label for="nome" class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $tutor['nome'] ?? "" ; ?>"><br>
   
    <input type="hidden" name="codigo" id="codigo" value="<?php echo $tutor['codigo'] ?? ""; ?>"><br>


    <label for="sexo" class="form-label">Sexo</label><br>
    <input  name="sexo" id="sexo"><?php echo $tutor['sexo'] ?? ""; ?></input><br>



    <label for="polo" class="form-label">Polo</label><br>
    <input  name="polo" id="polo"><?php echo $tutor['polo'] ?? ""; ?></input><br>
    
    <label for="areaformacao" class="form-label">Area Formação</label><br>
    <input  name="areaformacao" id="areaformacao"><?php echo $tutor['areaformacao'] ?? ""; ?></input><br>

    <label for="tipo" class="form-label">Tipo</label><br>
    <input  name="tipo" id="tipo"><?php echo $tutor['tipo'] ?? ""; ?></input><br>

   

    
    <button type="submit" class="btn btn-success">Cadastrar</button><br>

    </form>
    </div>
    