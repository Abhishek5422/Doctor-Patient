
<br><br><br>
<br><br><br>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <style type="text/css">body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }</style>
<?php
include('../connect.php');
$id=$_GET['id'];
$select="SELECT * from booking where Booking_id='$id'";
$execute=mysqli_query($connect,$select);
$fetch=mysqli_fetch_array($execute);

?>
<form method="post" enctype="multipart form-data">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <input type="hidden" name="Booking_id" value="<?php echo $fetch['Booking_id']?>">
                        <input type="hidden" name="Patient_id" value="<?php echo $fetch['Patient_id']?>">
                        <input type="hidden" name="patientemail" value="<?php echo $fetch['Patient_mail']?>">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" name="CardNumber" class="form-control" id="cardNumber" placeholder="Valid Card Number" value="" 
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" name="expiry_date" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" name="CVC_Code" value="" class="form-control" id="cvCode" placeholder="CV"required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>350</span> Final Payment</a> 
                </li>
            </ul>
            <br/>
           <center>
            <button name="button">Pay Now</button></center>
        </div>
    </div>
</div>
</body>
</form>
<?php
include('../connect.php');
if(isset($_POST['button']))
{
 $Booking_id=$_POST['Booking_id'];
 $Patient_id=$_POST['Patient_id'];
 $patient_mail=$_POST['patientemail'];  
 $Card_Number=$_POST['CardNumber'];
 $Expiry_Date=$_POST['expiry_date'];
 $CVC_Code=$_POST['CVC_Code'];

$insert1="INSERT INTO payment_details(Booking_id,Patient_id,Patient_Email,Card_Number,Expiry_Date,CVC_Code,Payment) values ('$Booking_id','$Patient_id','$patient_mail','$Card_Number','$Expiry_Date','$CVC_Code','250')";
$execute1=mysqli_query($connect,$insert1);
if ($execute1==1)
{
    $update="UPDATE booking set Payment_status='Payed' WHERE Booking_id='$Booking_id'";
    $execute2=mysqli_query($connect,$update);
    if($execute2==1)
    {
        echo "<script>alert('Payment Completed')</script>";
        echo "<script>window.location.href='mybooking.php'</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
        echo "<script>window.location.href='mybooking.php'</script>";
    }

}
else
{
    echo "<script>alert('Try Again')</script>";
    echo "<script>window.location.href='mybooking.php'</script>";
}

}
?>