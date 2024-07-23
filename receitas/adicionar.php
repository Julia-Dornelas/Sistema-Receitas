<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body class="corzinha">
    <h1 class="text-center corzinha text-white ">Receitas Dornelas</h1>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3>Lista de receitas</h3>
                <form action="add.php" method="post">

                    <div class="form-group ">
                        <label for="inputtext4">Nome:</label>
                        <input type="text" class="form-control" id="inputtext4" placeholder="Nome" name="campoNome" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="campoEmail" required>
                    </div> <br>

                    <div class="form-group ">
                        <label for="inputCpf">Telefone:</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="(00) 0 0000-0000" name="campoTelefone" required>
                    </div> <br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Especialidade:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="campoEspecialidade" rows="2"></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-info mb-3">Gravar</button>
                        <a href="./" class="btn btn-secondary mb-3">Voltar</a>
                </form>

            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>