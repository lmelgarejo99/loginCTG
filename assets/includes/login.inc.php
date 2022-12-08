<?php

if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if (empty($mailuid) || empty($password)){
        header("Location: ../login.php?error=EmptyFields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE emailUsers=?;";
        $stmt = mysqli_stmt_init($conexion);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.html?error=SQLerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = get_result($stmt);
            if($row = array_shift($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false){
                    header("Location: ../login.php?error=WrongPassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['nameUsers'];
                    header("Location: ../services.html?login=Success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=WrongPassword");
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=NoUser");
                exit();
            }
        }
    }

}
else{
    header("Location: ../index.html");
    exit();
}

function get_result( $Statement ) {
   $RESULT = array();
   $Statement->store_result();
   for ( $i = 0; $i < $Statement->num_rows; $i++ ) {
       $Metadata = $Statement->result_metadata();
       $PARAMS = array();
       while ( $Field = $Metadata->fetch_field() ) {
           $PARAMS[] = &$RESULT[ $i ][ $Field->name ];
       }
       call_user_func_array( array( $Statement, 'bind_result' ), $PARAMS );
       $Statement->fetch();
   }
   return $RESULT;
}