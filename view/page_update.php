<?php

include("../model/conexao.class.php");
include("../model/manager.class.php");
$manager = new Manager();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="shortcut icon" href="../resources/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 20px;
            background-color: #ffffff;
        }

        * {
            font-family: "Open Sans", sans-serif;
        }

        .thead {
            background-color: #f7f7f7;
        }
    </style>
</head>


<body>

    <div class="container">
        <h2 class="text-center py-5">Atualizar Usuário</h2>

        <form action="../controller/update_client.php" method="POST">
            <div class="row g-3">
                <?php foreach ($manager->list_client_by_id($_POST['id']) as $data):?>
                <div class="col-md-6">
                    <label for="name" class="form-label"> Nome
                        <i class="bi bi-person"></i>
                    </label>
                    <input type="text" name="name" class="form-control" required autofocus value="<?= $data['name'] ?>"> 
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i> </label> <input type="email" class="form-control" name="email" required  value="<?= $data['email'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="cpf" class="form-label">CPF <i class="bi bi-credit-card-2-front"></i></label> <input type="text" class="form-control" name="cpf" required  value="<?= $data['cpf'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"></i></label> <input type="date" class="form-control" name="birth" required  value="<?= $data['birth'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label">Telefone <i class="bi bi-whatsapp"></i> </label> <input type="text" class="form-control" name="phone" required  value="<?= $data['phone'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Endereço <i class="bi bi-map"></i> </label> <input type="text" class="form-control" name="address" required  value="<?= $data['address'] ?>">
                </div>
                <input type="hidden" name="id" value="<?= $data['id']?>">
                    <?php endforeach;?>
                <hr class="my-4">

                <div class="col-md-12">
                    <button class="btn btn-lg btn-success">Atualizar</button>
                    <a href="../index.php" class="btn btn-lg btn-danger">Cancelar</a>
                </div>

            </div>
        </form>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</body>

</html>