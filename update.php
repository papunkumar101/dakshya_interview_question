<?php
include("config.php");
if(isset($_REQUEST['id'])){
include("header.php");

  $id=$_REQUEST['id'];
  $name=$_REQUEST['name'];
  $phone=$_REQUEST['phone'];
  $uid=$_REQUEST['uid'];
  $pass1=$_REQUEST['pass1'];
  $pass2=$_REQUEST['pass2'];
  if(isset($_REQUEST['update'])){
    if($pass2===$pass1){
    $sql7="UPDATE employee SET e_name='$name',e_phone='$phone',e_uid='$uid',e_pass='$pass1' WHERE e_uid='$id'";
    $conn->exec($sql7);
    $_SESSION["msg"]="<div class='alert alert-success' role='alert'>Succefully Updated.</div>";
    echo "<script>window.location.replace('dashboard.php')</script>";
    }else{
       $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Password Don't Match.</div>";
    echo "<script>window.location.replace('update.php')</script>";
    }
}
?>
<h3 class="text-center" style="color:gray;"><strong>Update A Exist Employee </h3><hr>
<form action="" method="post">
  <div class="container text-center">
    <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    //=========================================================================================================================================================//
  $sql8="SELECT * FROM employee WHERE e_uid='$id'";
  $row8=$conn->query("$sql8");
  if($row8->rowCount()>0){
    $result8=$row8->fetch(PDO::FETCH_ASSOC);
    ?>
  <input class="mx-auto" type="text" value="<?php echo $result8['e_name'];?>" name="name" placeholder="Name" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;">
  <input class="mx-auto" type="number" value="<?php echo $result8['e_phone'];?>" name="phone" placeholder="Phone No." style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;">
  <input class="mx-auto" type="text" value="<?php echo $result8['e_uid'];?>" name="uid" placeholder="User ID" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;">
  <input class="mx-auto" type="Password" value="<?php echo $result8['e_pass'];?>" name="pass1" placeholder="Password" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;">
  <input class="mx-auto " type="Password" value="<?php echo $result8['e_pass'];?>" name="pass2" placeholder="Confirm Password" style=" border: 0; outline: 0;border-bottom: 2px solid black;background-color:#EBF5FB;display:block;margin-top:5px;padding:3px;">
  <?php } ?>
  <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:10px;margin-bottom:20px;">
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  </div>
  </div>
</form>
<?php
include("login_footer.php");
}
?>