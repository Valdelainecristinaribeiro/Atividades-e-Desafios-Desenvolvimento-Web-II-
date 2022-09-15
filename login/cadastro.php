<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Favor inserir o nome e o CPF para cadastro.</p>
        <form action="arquivos.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
                <span class="help-block"></span>
            </div>   
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    
</body>
</html>
