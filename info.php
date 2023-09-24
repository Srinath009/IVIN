<?php
            session_start();
            $ROLLNO = $_SESSION['ROLLNO'];
            $Name = $_SESSION['Name'];
            $FatherName = $_SESSION['FatherName'];
            $Branchcode = $_SESSION['Branchcode'];
            $Gender = $_SESSION['Gender'];
            $Phoneno = $_SESSION['Phoneno'];
            $Reservation = $_SESSION['Reservation'];
            $DOB = $_SESSION['DOB'];
            $Address = $_SESSION['Address'];
            $Moles = $_SESSION['Moles'];
            $Emailid = $_SESSION['Emailid'];
            $Religion = $_SESSION['Religion'];
            $AadhaarCardNo = $_SESSION['AadhaarCardNo'];
            $admissioncategory = $_SESSION['addmissioncategory'];

        //     echo $ROLLNO;
        //     echo $Name;
        //     echo $FatherName;
        //     echo $Branchcode;
        //     echo $Gender;
        //     echo $Phoneno;
        //     echo $Reservation;
        //     echo $DOB;
        //     echo $Address;
        //     echo $Moles;
        //     echo $Emailid;
        //     echo $Religion;
        //     echo $AadhaarCardNo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="icon" href="assets/img.png" />
    <title>INFORMATION</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  </head>
<body>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading card-header bg-transparent text-center">
            	<h1>STUDENTS PROFILE</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3><?php echo $Name; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $ROLLNO; ?></p>
            <p class="mb-0"><strong class="pr-1">Academic Year:</strong>20<?php echo $ROLLNO[0],$ROLLNO[1]; ?></p>
            <p class="mb-0"><strong class="pr-1">College Code  :</strong>89</p>
          </div>
        </div>
        <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
          <button  onclick="location.href='/ivin/homepage.php'" type="submit" id="back" class="btn btn-secondary btn-lg" >BACK TO HOME PAGE</button>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">DOB (YYYY-MM-DD)</th>
                <td width="2%">:</td>
                <td><?php echo $DOB; ?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $Gender; ?></td>
              </tr>
              <tr>
                <th width="30%">Phone Number</th>
                <td width="2%">:</td>
                <td><?php echo $Phoneno; ?></td>
              </tr>
              <tr>
                <th width="30%">Father Name</th>
                <td width="2%">:</td>
                <td><?php echo $FatherName; ?></td>
              </tr>
              <tr>
                <th width="30%">Email id </th>
                <td width="2%">:</td>
                <td><?php echo $Emailid; ?></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
        <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Personal Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td><?php echo $Religion; ?></td>
              </tr>
              <tr>
                <th width="30%">Reservation</th>
                <td width="2%">:</td>
                <td><?php echo $Reservation; ?></td>
              </tr>
              <tr>
                <th width="30%">Addmission Category</th>
                <td width="2%">:</td>
                <td><?php echo $admissioncategory; ?></td>
              </tr>
              <tr>
                <th width="30%">Moles</th>
                <td width="2%">:</td>
                <td><?php echo $Moles; ?></td>
              </tr>
              <tr>
                <th width="30%">Aadhaar Card Number</th>
                <td width="2%">:</td>
                <td><?php echo $AadhaarCardNo; ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $Address; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</body>
</html>


<style>

body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}

.student-profile .card {
    border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}

.student-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}

.student-profile .card p {
    font-size: 16px;
    color: #000;
}

.student-profile .table th,
.student-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
}

</style>