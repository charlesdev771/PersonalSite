<?php

class Connection

{

    function getConn_and_incert()
    {
        $verification = false;
        try {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $msg = $_POST['textArea'];

          $Conn = new PDO('mysql:host=127.0.0.1;dbname=assunto', $username="root", $password="");
          $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt = $Conn->prepare('INSERT INTO msgs (name,email,msg) VALUES(:name,:email,:msg)');
          $stmt->execute(array(
              ':name' => $name,
              ':email' => $email,
              ':msg' => $msg
            ));
        }
        catch (\Throwable $error) {
            echo "Erro. Code" . $error->getMessage();
        }

        header("location: ../home/index.php");

    }


}

$ex = new Connection();
$ex->getConn_and_incert();

?>