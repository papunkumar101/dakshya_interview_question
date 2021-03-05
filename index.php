<?php
include("config.php");
include("header.php");

 $e_uid=$_REQUEST["euid"];
 $e_pass=$_REQUEST["epass"];

if (isset($_REQUEST["login"])) {
  $sql="SELECT * FROM employee WHERE e_uid='$e_uid' AND e_pass='$e_pass'";
  $row=$conn->query("$sql");
  if($row->rowCount()>0){
    $result=$row->fetch(PDO::FETCH_ASSOC);
    $_SESSION["name"]=$result["e_name"];
    $_SESSION["uid"]=$result["e_uid"];
    
    echo "<script>window.location.replace('home.php')</script>";
  }else{
    
    $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>You Are Not Registrate. Please Consult With Admin</div>";
  //echo "<script>window.location.replace('index.php')</script>";
  }
  
}
?>
<div class="container my-10">
  <h3 style="text-align:center;color:orange;text-shadow:2px 2px gray;"><b>Welcome To Dakshya Computech </b></h3>
  <h6 class="text-center px-5"><em>This for Dakshya computech employee.</em></h6>
  <hr>
  <form method="post" action="">
    <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    ?>
    <h4 style="font-weight:bold; text-align:center; color:gray;">Employee Login</h4>
  <div class="mb-3">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your User ID" name="euid" required>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" name="epass" required>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-primary mb-5" name="login">Sig-in</button>
</div>
</form>
</div>

<?php
include("public_footer.php")
?>
