<?php
        session_start();
        $ROLLNO = $_SESSION['Roll'];
        $DOB = $_SESSION['Date'];

        $conn = mysqli_connect("localhost", "root", "", "loginpage");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM students where ROLLNO = '$ROLLNO' and DOB = '$DOB'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        $_SESSION['ROLLNO'] =  $row["ROLLNO"] ;
        $_SESSION['Name'] =  $row["Name"] ;
        $_SESSION['FatherName'] =  $row["FatherName"] ;
        $_SESSION['Branchcode'] =  $row["Branchcode"] ;
        $_SESSION['Gender'] =  $row["Gender"] ;
        $_SESSION['Phoneno'] =  $row["Phoneno"] ;
        $_SESSION['Reservation'] =  $row["Reservation"] ;
        $_SESSION['DOB'] =  $row["DOB"] ;
        $_SESSION['Address'] =  $row["Address"] ;
        $_SESSION['Moles'] =  $row["Moles"] ;
        $_SESSION['Emailid'] =  $row["Emailid"] ;
        $_SESSION['Religion'] =  $row["Religion"] ;
        $_SESSION['AadhaarCardNo'] =  $row["AadhaarCardNo"] ;
        $_SESSION['addmissioncategory'] =  $row["admissioncategory"] ;
        $_SESSION['TotalAmountFee'] =  $row["TotalAmountFee"] ;
        $_SESSION['Duefees'] =  $row["Duefees"] ;
        }
        }
        $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img.png" />
    <title>IVIN</title>
</head>
<body>
    <div class="container">
        <P>HELLO <span id="name" ><?php echo $_SESSION['Name'];?></span> YOU CAN ACCESS YOUR</P>
        <button  onclick="location.href='/ivin/info.php'" type="submit" class="box" >INFORMATION</button>
        <button onclick="location.href='/ivin/markspage.php'" type="submit" class="box" >MARKS</button>
        <button onclick="location.href='/ivin/businformation.php'" type="submit" class="box" >BUS DETAILS</button>
        <button onclick="location.href='/ivin/onlinepayment.php'" type="submit" class="box" >ONLINE FEE PAYMENT</button> 
        <button onclick="location.href='/ivin/onlineexam.php'" type="submit" class="box" >ONLINE EXAMINATION</button>
        <button  onclick="location.href='/ivin/loginpage.php'" type="submit" id="back" class="box" >BACK TO LOGIN PAGE</button>
    </div>
</body>
</html>


<style>

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body{
    background: url("./assets/boom2.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.container{
    width: 80%;
    align-items: center;
    display: flex;
    flex-direction: column;
    padding: 0 auto;
    margin: 0 auto;

}

p{
    text-align: center;
    color:rgb(9, 9, 116);
    border: #880761;
    border-style:inherit;
    font-size: 30px;
    font-weight: bold;
    width: 50%;
    min-width: 500px;
}

.box {
    background-color: #21605d;
    color: white;
    display: block;
    padding: 13px;
    border-radius: 5px;
    outline: none;
    font-size: 18px;
    letter-spacing: 1.5px;
    font-weight: bold;
    width: 50%;
    min-width: 500px;
    cursor: pointer;
    margin-bottom: 4rem;
    transition: all 0.1s ease-in-out;
    border: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
  }
  
  .box:hover {
    box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
    transform: scale(1.02);
    -webkit-transform: scale(1.02);
    -moz-transform: scale(1.02);
    -ms-transform: scale(1.02);
    -o-transform: scale(1.02);
  }

  #back {
    background-color: rgb(255, 252, 252);
    color: #21605d;
    border: solid;
    border-color: #21605d;
    border-width: 2px;
  }

  #name {
    color: #21605d;
    font-style: italic;
    text-decoration: underline;
  }

</style>