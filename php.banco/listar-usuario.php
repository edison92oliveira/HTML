<h1>lasta de usuario</h1>

<?php 

$sql = "SELECT * FROM user";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qdt > 0){
    while($res = $res->fetch_object){
        print $row->id;
        print $row->nome;
        print $row->ende;
        print $row->email;
        
    }
}

?>