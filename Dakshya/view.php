<?php
include("config.php");
if(isset($_REQUEST['id'])){
include("header.php");
  
  $id=$_REQUEST['id'];
  $sql5="SELECT * FROM employee WHERE e_uid='$id'";
  $row5=$conn->query("$sql5");
  if($row5->rowCount()>0){
    $result5=$row5->fetch(PDO::FETCH_ASSOC);

?>
<h3 style="color:gray;text-align:center;"><strong>Attendance Summary</strong></h3>

<div class="card">
  <div class="card-body">
    <h5 style="color:gray;font-weight:bold;display:inline-block;">User Id:</h5><u><?php echo $result5['e_uid']; ?></u><br>
    <h5 style="color:gray;font-weight:bold;display:inline-block;">Name:</h5><u><?php echo $result5['e_name']; ?></u><br>
    <h5 style="color:gray;font-weight:bold;display:inline-block;">Phone_No:</h5><u><?php echo $result5['e_phone']; ?></u><br>
    <h5 style="color:gray;font-weight:bold;display:inline-block;">Today Date:</h5><u><?php echo date("d /m/ Y"); ?></u><br>
    <h5 style="color:gray;font-weight:bold;display:inline-block;">Total Work Per One Week:</h5><u>76 Hour</u><br>
    
  </div>
</div> 

            <!-- table start -->
<table class="table table-bordered table-responsive table-hover">
  <thead class="table-dark">
     <tr>
      <th scope="col">R.No.</th>
      <th scope="col">Date</th>
      <th scope="col">Day</th>
      <th scope="col">In-Time</th>
      <th scope="col">Out-Time</th>
      <th scope="col">Work Hour</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql6="SELECT * FROM attendance WHERE u_id='$id'";
  $row6=$conn->query("$sql6");
  if($row6->rowCount()>0){
    while($result6=$row6->fetch(PDO::FETCH_ASSOC)){
      
    ?>
    <tr>
      <th scope="row"><?php echo $result6["a_id"]; ?></th>
      <td><?php echo $result6["date"]; ?></td>
      <td><?php echo $result6["day"]; ?></td>
      <td><?php echo $result6["in_time"]; ?></td>
      <td><?php echo $result6["out_time"]; ?></td>
      <td>66 hour</td>
    </tr>
    <?php }}else{ echo "sorry No Record Found."; } ?>
  </tbody>
</table>
<?php
}else {
  echo "there is no record found.";
}
include("login_footer.php");
}
?>