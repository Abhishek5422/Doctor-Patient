
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <style type="text/css">          
      .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important; 
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
   </style>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               REGISTER NOW
            </h1>
            
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <label>Patient Name</label>
                       
                     <input type="text" name="name"  class="form-control my-input" id="name" >
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="email" >
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="Password"  class="form-control my-input" id="Password" >
                  </div>
                  <div class="form-group">
                     <label>Phone Number</label>
                     <input type="text"  name="phone" id="phone"  class="form-control my-input" >
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input type="Address" name="Address"  class="form-control my-input" id="Address" >
                     <div class="form-group"><br>
                        <label>Upload Image</label>
                     <input type="file" name="Patient_image"  class="form-control my-input" id="image" placeholder="Patient image" img src="Patient image ">
                  </div>
                  </div>
                  <div class="text-center ">
                     <button type="submit" name="button" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                   </form>
                 
                 
             
            </div>
            <br>
            <center>Already Registered.... <a href="patient_login.php">Login Now</a>
            <br><br><br>
            <a href="../index.php">
            <img src="images/home.jpeg" style="height: 60px; width: 60px;">
            <br><br><br>
            </center>
            </a>
            <br><br><br>
         </div>
      </div>
   </div>
</body>
<?php
include('../connect.php');
if(isset($_POST['button']))
{
   $patient_name=$_POST['name'];
  $Email=$_POST['email'];
   $password=$_POST['Password'];
   $phone=$_POST['phone'];
   $Address=$_POST['Address'];
    $Image=$_FILES['Patient_image']['name'];
    $images = explode('.',$Image);
    $extensionImage=end($images);
    $allowedExtsImage = array("jpeg", "jpg", "png");
    $time = Time();
    $Photo=$time.'.'.$extensionImage;
    //End Image Processing
    if(in_array($extensionImage, $allowedExtsImage))
    {
         move_uploaded_file($_FILES['Patient_image']['tmp_name'], 'patient/'.$Photo);

         $insert="INSERT INTO patient(Patient_name,Patient_email,Password,Phone_Number,Patient_Address, Patient_image) values ('$patient_name','$Email',' $password','$phone','$Address','$Photo')";
         $execute=mysqli_query($connect,$insert);
          if ($execute==1)
       {
            echo "<script>alert(' succesfully inserted')</script>";
            echo "<script>window.location.href='Patient_login.php'</script>";
        }

       else

       {
         echo "<script>alert('Try Again')</script>";
            echo "<script>window.location.href='registration.php'</script>";
       }
      
    }
    else
    {
      echo "<script>alert('invalid image')</script>";
      echo "<script>window.location.href='registration.php'</script>";

    }

}
?>

     

