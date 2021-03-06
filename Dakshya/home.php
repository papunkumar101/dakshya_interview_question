<?php
include("config.php");
if (isset($_SESSION["name"])) {
include("header.php");

date_default_timezone_set("Asia/Kolkata");
  $date=date("d/F/Y");
  $time=date("h:i:s A");
  $day=date("l");
  $uid=$_SESSION["uid"];
 
if(isset($_REQUEST["one"])){
  $sql2="INSERT INTO attendance(u_id,day,in_time,date) VALUE('$uid','$day','$time','$date')";
  $conn->exec($sql2);
  $_SESSION["msg"]="<div class='alert alert-success' role='alert'>Your In Time Updated Succefully.</div>";
}
if(isset($_REQUEST["two"])){
  $sql3="UPDATE attendance SET out_time='$time' WHERE date='$date' AND u_id='$uid'";
  $conn->exec($sql3);
  $_SESSION["msg"]="<div class='alert alert-warning' role='alert'>Out Time Updated Succefully.</div>";
}

?>
<h4>Welcome <?php echo $_SESSION["name"]; ?>,</h4>
<h6 class="text-center px-10"><em>Please Press Bellow Button After Into The Office And Out From The Office so That We Can Calculate Your Working Hour.</em></h6><hr>
<form action="" method="post">
  <?php if(isset($_SESSION["msg"])){
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
    }
    ?>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-success my-3" id="one" type="submit" onclick="intime()" name="one">In Time</button>
  <button class="btn btn-warning mb-5 id="two" text-danger" type="submit" onclick="outtime()" name="two">Out Time</button>
</div>
</form>
<?php
include("login_footer.php");
}else {
   $_SESSION['msg']="<div class='alert alert-danger' role='alert'>  Login To Continue</div>";
 echo "<script>window.location.replace('index.php')</script>";
}
?>
<script>
  let btn_one=document.getElementById("one");
  let btn_two=document.getElementById("two");
function intime(){
 // btn_two.style.disabled = true;
  alert("Your in time Registred.");
}
function outtime(){
  alert(" Your Out Time Registred.");
}
  
</script>
