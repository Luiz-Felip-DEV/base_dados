<?php 

require_once('conexao.php');
class crud {

    public function inserirDados($nome, $sobrenome, $email, $senha, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$nome','$sobrenome','$email','$senha', '$telefone')";
        
        $result = mysqli_query($conn,$query);
    }
}

?>