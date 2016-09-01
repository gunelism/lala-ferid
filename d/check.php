 <?php
if (isset($_POST['submitcontact'])) {
    $email = $_POST['full_name'];
    $pass = $_POST['pass'];

    session_start();

    if (!empty($email) && !empty($pass)) { 
        if ($email=="admin" && $pass=="admin") {
            $_SESSION['giris']='true';
          header('Location:show.php');

        }
        // else{
        //     $_SESSION['msj'] = "The Email and Password does not match";
        //     header('Location:index.php');
        // }

    }
    // else{
    //     $_SESSION['msj'] = 'Do not keep the input blank!';
    //     header('Location:index.php');
    // }
}else{
    header('Location:index.php');
}

?>
