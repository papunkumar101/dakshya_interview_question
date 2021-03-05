<?php
include("config.php");
include("header.php");

 $e_uid=$_REQUEST["adid"];
 $e_pass=$_REQUEST["adpass"];

if (isset($_REQUEST["login"])) {
  $sql="SELECT * FROM admin WHERE ad_uid='$e_uid' AND ad_pass='$e_pass'";
  $row=$conn->query("$sql");
  if($row->rowCount()>0){
    $result=$row->fetch(PDO::FETCH_ASSOC);
    $_SESSION["admin"]=$result["ad_uid"];
    
    echo "<script>window.location.replace('dashboard.php')</script>";
  }else{
    
    $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Credential Don't Match</div>";
  //echo "<script>window.location.replace('index.php')</script>";
  }
  
}
?>
<div class="container">
  <h3 style="text-align:center;color:blue;text-shadow:2px 2px red;"><b>Welcome To Dakshya Computech </b></h3>
  <h6 class="text-center px-5"><em>This for Dakshya computech Admin.</em></h6>
  <hr>
  <form action="" method="post">
    <h4 style="font-weight:bold; text-align:center; color:gray;">Admin Login</h4>
  <div class="mb-3">
    <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    ?>
    <input type="text" name="adid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your User ID" required>
  </div>
  <div class="mb-3">
    <input type="password" name="adpass" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" required>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" name="login" class="btn btn-primary">Sig-in</button>
</div>
</form>
</div>

<?php
include("public_footer.php")
?>
