<?php
include("config.php");
if(isset($_SESSION["admin"])){
include("header.php");

 $search=$_REQUEST["search"];
if(isset($_REQUEST["view"])){
  echo "<script>window.location.replace('view.php?id=$search')</script>";
}
if(isset($_REQUEST["update"])){
  echo "<script>window.location.replace('update.php?id=$search')</script>";
}
if(isset($_REQUEST["remove"])){
  $delete="DELETE  FROM employee WHERE e_uid='$search'";
  $conn->exec($delete);
   $_SESSION['msg']="<div class='alert alert-success' role='alert'>User Id Delete Succefully.</div>";
}
if(isset($_REQUEST["add"])){
  echo "<script>window.location.replace('register.php?id=$search')</script>";
}

?>
<h4>Welcome <?php echo $_SESSION["admin"];?>,</h4>
<h6 class="text-center px-20"><em>Welcome To Admin Pannel, Admin Can Do Anything Like:- Add,Delete,Update,View And Many more. </em></h6><hr>

<form class="row g-3" method="get" action="">
  <div class="mb-5" >
  <div class="col-auto my-3 " style="border:2px double black;padding:3px;">
   <h3 style="display:inline-block;"><strong> Enter Employee UserID:-</strong></h3>
   <input type="text" name="search" placeholder="Example: papun"  style="display:inline-block; margin-left:8px;" required>
  </div>
  <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    ?>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-success" name="view">View Emp. Attandance</button>
  <button type="submit" class="btn btn-warning" name="update" >Update Emp. Record</button>
  <button type="submit" class="btn btn-danger" name="remove" >Remove Emp.</button>
  <button type="submit" class="btn btn-primary" name="add" >Add New Emp.</button>
</div>
</div>
</form>
<?php
include("login_footer.php");
}else {
   $_SESSION['msg']="<div class='alert alert-danger' role='alert'>  Login To Continue</div>";
 echo "<script>window.location.replace('admin.php')</script>";
}
?>