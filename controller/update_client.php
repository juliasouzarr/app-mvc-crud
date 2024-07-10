<?php

include '../model/conexao.class.php';
include '../model/manager.class.php';

$manager = new Manager();
var_dump($_POST);

if (!empty($_POST)) {
    $manager->update_client($_POST);
    header("Location: ../index.php?cod=3");
}
