<?php 

switch($_REQUEST["acao"]){
    case 'cadastrar';
        $nome= $_POST['nome'];
        $ende= $_POST['ende'];
        $email= $_POST['email'];

        $sql = "INSERT INTO user (nome, ende, email) VALUES ('($nome', '($ende)', ($email)')"; 

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Cadastro realizado com sucesso')";
        }
    break;
}



?>