<?php
session_start();
unset($_SESSION["error"]);

if( isset($_POST["submit"] ) ){
    $email=$_POST["admin_email"];
    $password=$_POST["admin_password"];
    if(!empty($email) ){
       if(!empty($password)){
            if($email=="admin@oxu.az"){
               if($password=="admin"){
                    $_SESSION["login"]=true;
                    header("Location:list.php");
                }
                else{
                    $_SESSION["error"]="Daxil etdiyiniz şifrə səhvdir" ;
            
                }
            }
            else{
                $_SESSION["error"]="Daxil etdiyiniz e-poçt səhvdir" ;
        
            }
        }
        else{
            $_SESSION["error"]="Şifrənizi daxil edin!" ;
   
        }
    }
    else{
        $_SESSION["error"]="E-poçtunuzu daxil edin!" ;
    }
}
else{
    unset($_SESSION["error"]);
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{ width:900px; margin:0 auto}
        form{ width:800px; margin:20px auto}
        p{ padding:5px; border-radius:3px;}
    </style>
    <body>
        <h1 class="text-center">Admin panel</h1>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">E-poçtunuzu daxil edin</label>
                    <div class="col-sm-6">
                        <input type="email" id="inputEmail" class="form-control" name="admin_email" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Şifrənizi daxil edin</label>
                    <div class="col-sm-6">
                        <input id="inputPassword" type="password" class="form-control" name="admin_password" >
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <input type="submit" class="btn btn-success" name="submit" value="Daxil ol">
                    </div>
                </div>
            </form>
            <div>
                <?php if(isset($_SESSION["error"]) ) { ?>
                    <p class="bg-danger"><?=$_SESSION["error"]?></p>
                <?php } ?>
            </div>
                
    </body>
</html>
