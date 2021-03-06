<?php
include("config.php");
if(isset($_REQUEST['id'])){
include("header.php");

  
  $name=$_REQUEST['name'];
  $phone=$_REQUEST['phone'];
  $uid=$_REQUEST['uid'];
  $pass1=$_REQUEST['pass1'];
  $pass2=$_REQUEST['pass2'];
  if(isset($_REQUEST['register'])){
    if($pass2===$pass1){
    $sql4="INSERT INTO Employee(e_name,e_phone,e_uid,e_pass) VALUES('$name','$phone','$uid','$pass1')";
    $conn->exec($sql4);
    $_SESSION["msg"]="<div class='alert alert-success' role='alert'>Succefully Registred.</div>";
    }else{
       $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Password Don't Match.</div>";
    echo "<script>window.location.replace('register.php')</script>";
    }
}
?>
<h3 class="text-center" style="color:gray;"><strong>Register A New Employee </h3><hr>
<form action="" method="post">
  <div class="container text-center">
    <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    ?>
  <input class="mx-auto" type="text" name="name" placeholder="Name" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;" required>
  <input class="mx-auto" type="number" name="phone" placeholder="Phone No." style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;" required>
  <input class="mx-auto" type="text" name="uid" placeholder="User ID" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;" required>
  <input class="mx-auto" type="Password" name="pass1" placeholder="Password" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;" required>
  <input class="mx-auto " type="Password" name="pass2" placeholder="Confirm Password" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;" required>
  <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:10px;margin-bottom:20px;">
  <button type="submit" name="register" class="btn btn-primary">Register</button>
  </div>
  </div>
</form>
<?php
include("login_footer.php");
}
?>
