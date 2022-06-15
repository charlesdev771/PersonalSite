<?php

class Connection
{

    function get_conn()
    {
        try 
        {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=nome', $username = 'root', $pass='');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (\Throwable $th) 
        {
            echo $th;
        }

        return $conn;
    }

    function Insert_in_db($conn)
    {

        try 
        {
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $texto = $_POST['textArea'];

            $stmt = $conn->prepare('INSERT INTO nome (nome, email, texto) VALUES(:nome, :email, :texto');
            $stmt->execute(array(
                ':nome' => $nome,
                ':email' => $email,
                ':texto' => $texto
            ));
    
            header('location: ../index.php');
        }catch (Throwable $th)
        {
            echo $th;
        }

    }
}


?>