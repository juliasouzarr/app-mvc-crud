<?php
include '../model/conexao.class.php';
include '../model/manager.class.php';
$manager = new Manager();

$id = $_POST['id'];

if (isset($id) && !empty($id)) {
   
    $manager->delete_cliente($id);
   
    header("Location: ../index.php?cod=2");
}

?>