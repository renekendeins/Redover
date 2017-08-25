<?php





try {
    

} catch (Exception $e) {
    echo "Error, try later!";
    echo "Error at line: " . $e -> getLine();
}




if(isset($_POST['submitRgistry'])){
    $username = strip_tags($_POST["username"]);
    $email = strip_tags($_POST["email"]);
    $password = strip_tags($_POST["password"]);
    $verPassword = strip_tags($_POST['verPassword']);
    $passwordEncrypt = password_hash($password, PASSWORD_DEFAULT, array("cost" => 12));

    if($password != $verPassword){
        echo "Error, try later!";
        exit;
    }else{

    }
    require('db_con.php');  
    require("functions.php");
    $user_id = "" . generateId();
    $query = "INSERT INTO list_r (USERNAME, EMAIL, PASSWORD) VALUES ('$username', '$email', '$passwordEncrypt'); ";

    $result = $base -> prepare($query);
    $result -> execute(array());
    $result -> closeCursor();

    session_start();
    $_SESSION['user'] = $_POST["username"];
    header('location:../redover.php'); 

}else if(isset($_POST['submitSignup'])){
    $username=strtolower(htmlentities(addslashes($_POST["username"])));
    $password=htmlentities(addslashes($_POST["password"]));
    $counter = 0;
    require('db_con.php');    
    $sql="SELECT * FROM list_r WHERE USERNAME= :username OR EMAIL= :username";
    $result=$base->prepare($sql);
    $result->bindValue(":username", $username);
    $result->bindValue(":password", $password);
    $result->execute();
    $result->execute(array(":username"=>$username));
    $registry_count=$result->rowCount();

    if($registry_count){
        $authenticaded = true;

        while($registry=$result->fetch(PDO::FETCH_ASSOC)){       

            if(password_verify($password, $registry['PASSWORD'])){
                $counter = $counter + 1;
            }
        }
        if($counter > 0){
            session_start();
            $_SESSION["user"]=strtolower($_POST["username"]);
            header("location:../redover.php");
            $resultado->closeCursor();
        }else{
            $resultado->closeCursor();
            echo 'Error, try later';
            exit;
        }
    }
}






?>
