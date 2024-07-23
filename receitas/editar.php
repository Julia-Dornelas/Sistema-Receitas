<?php
// Pega id na URL
$id = $_GET['id'];
// Constroi string com código sql
$sql = "select * from receitas where id = '$id'; ";
// Inclui a conexão com o banco de dados
include '../includes/conexao.php';
// Executa string $sql no banco de dados
$resultado = $conexao->query($sql);
// Transforma dados em objeto
$item = mysqli_fetch_object($resultado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="corzinha">
    <h1 class="text-center corzinha text-white ">Receitas Dornelas</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?> <br>
            <div class="col-9 dados"> 
                <h3>Lista de cozinheiras</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campoId" value="<?php echo $id; ?>">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" value="<?php echo $item->nome; ?>" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $item->email; ?>" placeholder="Email" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Telefone:</label>
                        <input type="text" class="form-control" id="inputCpf" value="<?php echo $item->telefone; ?>"placeholder="(00) 0 0000-0000" name="campoTelefone" required>
                    </div> <br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Especialidade:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="campoEspecialidade" rows="2"><?php echo $item->especialidade; ?></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-info mb-3">Gravar</button>
                        <a href="./" class="btn btn-secondary mb-3">Voltar</a>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>