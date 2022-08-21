<?php include("db.php");?>
<?php
if (isset($_POST['signupbtn']))
{
    $fName = mysqli_real_escape_string($conn,$_POST['fName']);
    $lName = mysqli_real_escape_string($conn,$_POST['lName']);
    $aadhaar = mysqli_real_escape_string($conn,$_POST['aadhaar']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $DOB = mysqli_real_escape_string($conn,$_POST['DOB']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $DOAP = mysqli_real_escape_string($conn,$_POST['DOAP']);
    $slot = mysqli_real_escape_string($conn,$_POST['slot']);
    $sql = "INSERT INTO vaccination(fName,lName,aadhaar,address,gender,DOB,number,DOAP,slot) VALUES ('$fName','$lName','$aadhaar','$address','$gender','$DOB','$number','$DOAP','$slot')";
    mysqli_query($conn,$sql);
    echo"<center>your data has been saved successfully!!!<br>we will call you to confirm the details.<br>go to home page to surf more.</center>";
    
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}


.container1 {
  float:right;
  width:900px;
  position: relative;

}

.image1 {
  display: block;
  width: 900px;
  height: auto;
}

.overlay1 {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 900px;
  height: 0;
  transition: .5s ease;
  opacity:0.75;
}

.container1:hover .overlay1 {
  bottom: 0;
  height:100%;
}

.text1 {
  white-space: nowrap; 
  color: white;
  font-size: 60px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.container2 {
  float:left;
  position: relative;
  width: 900px;
  cursor:pointer;
}

.image2 {
  display: block;
  width: 100%;
  height: auto;
  cursor:pointer;
}

.overlay2 {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #6B8E23;
  overflow: hidden;
  width: 900px;
  height: 0px;
  transition: .5s ease;
  opacity:0.75;
  cursor:pointer;
}

.container2:hover .overlay2 {
  bottom: 0;
  height: 100%;
  cursor:pointer;
}

.text2 {
  white-space: nowrap; 
  color: white;
  font-size: 60px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  cursor:pointer;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.mySlides {display:none;}
.p100{
background-color:#097770;
font-family:"Times New Roman",Times,sans-serif;
padding:20px;
}

.p101{
background-color:teal;
font-size:20px;
text-align:center;
}
.p2{
background-color:rgb(170,143,150);

}

.dropbtn {
  background-color:#20639B;
  color: WHITE;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right:0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  font-size:15px;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#20639B ;color:white;}
.dropdown:hover .dropdown-content {color:; display: block;}
.dropdown:hover .dropbtn {background-color: #1e3d59;}

.show {display: block;}
.sidenav {
  height:100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 10;
  left: 10;
  background:url('back12.jpg');
  background-color:#3caea3;
  overflow-x: hidden;
  padding-top: 2px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 20px 1px;
}

.footer_container{
    width: 100%;
    background:url('bg main 3.jpg');
    background-position:center;
color:black;
background-color:#ed553b;
}
.footer_container strong{
    font-weight: bold;

}
.footer_container div.container{
    width: 200px;
    float: left;

}
.footer_container ul{
    list-style: none;
    margin: 0;
    padding: 0;
    color:black;
}
.footer_container ul li {
    width: 300px;
    float: left;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

::selection{
  background: rgba(23,162,184,0.3);
}
.wrapper{
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.wrapper .box{
  background: white;
  width: calc(33% - 10px);
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.15);
}
.leftquote{
  font-size: 100px;
  color: #17a2b8;
  padding-top: 0px;
}
.wrapper .box .content{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0px;
}
.box .info .name{
  font-weight: 600;
  font-size: 30px;
}
.box .info .job{
  font-size: 16px;
  font-weight: 500;
  color: #17a2b8;
}
.box .info .stars{
  margin-top: 5px;
  font-size: 36px;
}
.box .info .stars b{
  color: #17a2b8;
}

.content .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #fff;
}


@media (max-width: 1045px) {
  .wrapper .box{
    width: calc(50% - 10px);
    margin: 10px 0;
  }
}
@media (max-width: 702px) {
  .wrapper .box{
    width: 100%;
  }
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 75px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: orchid;
  color: white;
}
.coorperate{}

* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=number],input[type=date] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 20px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;

}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=number]:focus,input[type=date]:focus {
  background-color: #ddd;
  outline: faded;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
  padding: 5px;
}

.container {
  padding: 36px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 5px solid #000000;
  margin-bottom: 20px;
}
body{  background-color: white; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right,rgb(0,128,0) 40.5%,rgb(34,139,34) 15%, rgb(152,251,152) 20%, rgb(173,255,47) 20%, rgb(154,205,50) 20%);}
</style>
<body bgcolor="pink">
<div class="sidenav">
<img src="logo.png" height="80px" width="200px" style="padding:10px"/>
<a href="http://localhost/checkup/appointment1.php">Book an Appointment</a>
<a href="http://localhost/checkup/checkup1.php">Book for Checkup</a>
<a href="http://localhost/checkup/covid1.php">COVID TEST</a>
<a href="http://localhost/checkup/vaccine.php">VACCINATION</a>
<ul>
<li> <i class="material-icons">local_post_office</i> <a href="mailto:password@cumail.in">mail us</a></li>
<li> <i class="material-icons">local_phone</i> <a href="tel:57924357">call us</a></li>
</ul>

<p style="font-size:20px; padding:10px; color:black"> <i class="material-icons">place</i> 37, sardar patel road,<br/>bandra west,<br/>Mumbai (400001).</p>
</div>
<div class="main">
<img src="logo.png" height="100px" width="300px" style="border:dashed; border-color:rgb(170,143,170); "/>
<a href="#" class="fa fa-facebook" style="position:top-right"></a>
<a href="#" class="fa fa-twitter" style="position:top-right" padding="40px"></a>
<a href="#" class="fa fa-instagram"></a>
FOR EMERGENCY: <i class="fa fa-phone" style="font-size:30px"></i>2147.    
CALL AT:<i class="fa fa-user-md"></i> 1800564
<div class="p100" align="center">MOTHER TERESA HOSPITAL</div>
<div class="p2" align="center" style="background-color:teal">

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">ABOUT US</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/introduction.html"><b>&#187;</b> Introduction.</a>
    <a href="http://localhost/checkup/mission.html"><b>&#187;</b> Mission & Vision.</a>
    <a href="http://localhost/checkup/home page2.html"><b>&#187;</b> home page</a>
  </div>
</div>

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">SERGICAL DEPT.</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/accident.html"><b>&#187;</b> Accident & Emergency.</a>
    <a href="http://localhost/checkup/radiology.html"><b>&#187;</b> Radiology.</a>
    <a href="http://localhost/checkup/urology.html"><b>&#187;</b> Urology.</a>
    <a href="http://localhost/checkup/joint.html"><b>&#187;</b> Joint Replacement.</a>
    <a href="http://localhost/checkup/plastic.html"><b>&#187;</b> Plastic Surgery.</a>
  </div>
</div>

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">MEDICAL DEPT.</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/cardiology.html"><b>&#187;</b> Cardiology.</a>
    <a href="http://localhost/checkup/neurology.html"><b>&#187;</b> Neurology.</a>
    <a href="http://localhost/checkup/nephrology.html"><b>&#187;</b> Nephrology.</a>
    <a href="http://localhost/checkup/dental.html"><b>&#187;</b> Dental.</a>
    <a href="http://localhost/checkup/dermatology.html"><b>&#187;</b> Dermatology.</a>
  </div>
</div>

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">PATIENT CARE</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/appointment1.php" target="_blank"><b>&#187;</b> Book An Appointment.</a>
    <a href="http://localhost/checkup/checkup1.php" target="_blank"><b>&#187;</b> Routine Checkup.</a>
    <a href="http://localhost/checkup/health.html"><b>&#187;</b> Health Tips.</a>
    <a href="http://localhost/checkup/facilities.html"><b>&#187;</b> Facilities.</a>
  </div>
</div>

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">COORPERATE & TPA</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/coorperate.html"><b>&#187;</b> coorperate and tpa</a>

  </div>
</div>

<div class="dropdown" style="padding:20px;">
  <button class="dropbtn">CONTACT US.</button>
  <div class="dropdown-content" style="left:0;">
    <a href="http://localhost/checkup/query1.php" target="_blank"><b>&#187;</b> Post a query</a>
    <a href="http://localhost/checkup/feedback1.php" target="_blank"><b>&#187;</b> feedback</a>
    <a href="tel:57924357"><b>&#187;</b> call us.</a>
    <a href="mailto:password@cumail.in"><b>&#187;</b> mail us.</a>
  </div>
</div>

</div>
<div class="modal-content">
    <form action="vaccine.php" method="post">
<div class="container">
      <h1 style="color:#6B8E23">VACCINE FORM</h1>
      <p>Please fill this form for VACCINATION.</p>
      <hr>

    <label for="fName"><b style="font-size:20px;  color:#6B8E23;">First Name : </b></label>
        <input type="text" placeholder="Enter first name" name="fName" id="fName" style="width:36%;font-size:20px" required>
    <label for="lName"><b style="font-size:20px;  color:#6B8E23;">Last Name : </b></label>
        <input type="text" placeholder="Enter lastName" name="lName" id="lName" style="width:36%;font-size:20px" required>
    <br>
       <b style="font-size:20px; color:#6B8E23;"> Gender :</b> Male <input type="radio" name="gender" value="m" id="male"> Female <input type="radio" name="gender" value="f" id="female"> Others <input
            type="radio" name="gender"  value="o" id="other" required>
    <br><br>
    <label for="number"><b style="font-size:20px;  color:#6B8E23;">Phone Number : </b></label>
        <input type="number" placeholder="Enter number" name="number" id="number" min="1000000000" max="9999999999" style="width:36%;font-size:20px" required>
   
    <label for="DOB"><b style="font-size:20px;  color:#6B8E23;">DOB<b style="color:red">***</b> : </b></label>
        <input type="date" name="DOB" id="DOB" min="1901-01-01" max="2003-07-16" style="width:36%;font-size:20px" required>
    <br><br>
    <label for="aadhaar"><b style="font-size:20px;  color:#6B8E23;">Aadhaar Number : </b></label>
        <input type="number" placeholder="Enter Aadhaar number" name="aadhaar" id="aadhaar" min="100000000000" max="999999999999" style="width:80%;font-size:20px" required>
    <br>
    <label for="address"><b style="font-size:20px;  color:#6B8E23;">Address : </b></label>
    <div>
        <br> <textarea name="address" placeholder="Enter Address" id="address" cols="30" rows="10" style="width:30%;font-size:20px"></textarea>
    </div>
    <br>

                <label for="DOAP"><b style="font-size:20px;  color:#6B8E23;">Date of Appointment : </b></label>
                <input type="date" name="DOAP" id="DOAP" min="2021-07-13" max="2021-07-29" style="font-size:20px" required><br>

            
       <b style="font-size:20px; color:#6B8E23;"> Slot :</b> 1st slot <input type="radio" name="slot" value="first" id="first"> 2nd slot <input type="radio" name="slot" value="second" id="second"> 3rd slot <input
            type="radio" name="slot"  value="third" id="third"> 4th slot <input type="radio" name="slot"  value="fourth" id="fourth" required>
            <br>
            <br>
            <b style="color:red">***</b><b style="font-size:15px"> age should be greater than 18 to bet eligibility for vaccination.</b>
            <br>
            <br>
            <div class="signupbtn" >
                <input type="submit" value="Submit Now" name="signupbtn" style="background-color: #04AA6D; padding:15px; width:100%;font-size:20px;cursor:pointer">
            </div>
            <div class="cancelbtn">
                <input type="reset" value="Reset Now" name="submit" style="background-color:#f44336; padding:15px; width:100%;font-size:20px;cursor:pointer">
            </div>
</div>
</form>
</div>
<div class="footer_container">
    <div class="container" style="font-size:15px; padding:30px; padding-left:100px">
        <strong>ABOUT US</strong>
        <ul style="list-style-type:arrow">
            <li><b>&#187;</b><a href="http://localhost/checkup/introduction.html"> introduction</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/mission.html"> mission & vision</a></li>
        </ul>
    </div>
    <div class="container"  style="font-size:15px; padding:30px; padding-left:100px">
        <strong>SERGICAL</strong>
        <ul style="list-style-type:disc">
            <li><b>&#187;</b><a href="http://localhost/checkup/accident.html"> Accident & <br/>emergency</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/radiology.html"> Radiology</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/urology.html"> Urology</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/joint.html"> Joint Replacement</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/plastic.html"> Plastic Surgery</a></li>
        </ul>
    </div>
    <div class="container"  style="font-size:15px; padding:30px; padding-left:100px">
        <strong>MEDICAL</strong>
        <ul style="list-style-type:disc">
            <li><b>&#187;</b><a href="http://localhost/checkup/cardiology.html"> Cardiology</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/neurology.html"> Neurology</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/nephrology.html"> Nephrology</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/dental.html"> Dental</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/dermatology.html"> Dermatology</a></li>
        </ul>
    </div>
    <div class="container"  style="font-size:15px; padding:30px; padding-left:100px">
        <strong>PATIENT CARE</strong>
        <ul style="list-style-type:disc">
            <li><b>&#187;</b><a href="http://localhost/checkup/appointment1.php" target="_blank"> For<br/>Appointment</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/health.html"> Health Tips</a></li>
            <li><b>&#187;</b><a href="http://localhost/checkup/facilities.html"> Facilities</a></li>            
        </ul>
    </div>
    <div class="container"  style="font-size:15px; padding:30px; padding-left:100px">
        <strong>CONTACT US</strong>
        <ul style="list-style-type:disc">
            <li> <i class="material-icons">place</i> 37, sardar patel <br/>road,bandra west,<br/>Mumbai (400001).</li>
            <li> <i class="material-icons">local_post_office</i> <a href="mailto:password@cumail.in">password@cumail.in</a></li>
            <li> <i class="material-icons">local_phone</i> <a href="tel:749547854">749547854,</a></li>
            <li> <i class="material-icons">local_phone</i> </b> <a href="tel:653874">653847</a></li>
            <li><a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </li>            
        </ul>
    </div>
<p class="p200"><br/><br/><br/>`</p><br/>`<br/><p class="p200"><br/>`</p>
</div>
<br/>
<p class="p101"> &copy;MOTHER TERESA HOSPITAL,All Rights Reserved. </p>
</div>
</body>
</html>