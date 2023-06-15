<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>

    <center><h1>Cadastro de Tutores</h1></center>
    <hr>
<div class="container">
    <form action="<?php echo isset($tutor) ? "atualizar.php" : 'inserir.php' ?>" method="post" enctype="multipart/form-data">


    <label for="nome" class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $tutor['nome'] ?? "" ; ?>"><br>
   
    <input type="hidden" name="codigo" id="codigo" value="<?php echo $tutor['codigo'] ?? ""; ?>"><br>


    <label for="sexo" class="form-label">Sexo</label><br>
    <input  name="sexo" id="sexo" value="<?php echo $tutor['sexo'] ?? ""; ?>"><br>



    <label for="polo" class="form-label">Polo</label><br>
    <input  name="polo" id="polo" value="<?php echo $tutor['polo'] ?? ""; ?>"><br>
    
    <label for="areaformacao" class="form-label">Area Formação</label><br>
    <input  name="areaformacao" id="areaformacao" value="<?php echo $tutor['areaformacao'] ?? ""; ?>"><br>

    <label for="tipo" class="form-label">Tipo</label><br>
    <input  name="tipo" id="tipo" value="<?php echo $tutor['tipo'] ?? ""; ?>"><br>

   <br>

    
    <button type="submit" class="btn btn-success">Cadastrar</button><br>

    </form>
    </div>
    
    <br><br><br> <br> <br> <br> <br> 
    <?php require_once "../template/rodape.php"; ?>