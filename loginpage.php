<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/img.png" />
    <title>IVIN(Integrated Vignan INformation)</title>
    <script src="/ivin/sweetalert.min.js" ></script>
    <script>
    function capitalizeMe(element) {
    element.value = element.value.toUpperCase();
    }
    </script>
  </head>
  <body >
    <section class="container">
      <div class="login-container">
        <div class="circle circle-one"></div>
        <div class="form-container">
            <img
            src="./assets/img.png"
            alt="VIGNAN"
            class="logo"
          />
          <h1 class="opacity">LOGIN</h1>
          <form action="" method="post" enctype="multipart/form-data">
            <input class="roll-no" minlength="10" maxlength="10" type="text" onkeyup="capitalizeMe(this);" placeholder="ROLL NUMBER" name="rollno" required />
            <input class="date" type="text" minlength="10" maxlength="10" placeholder="YYYY-MM-DD" name="dob" required />
            <input type="submit" class="opacity box" required />
            <p>IVIN-Integrated Vignan INformation</p>
          </form>
        </div>
        <div class="circle circle-two"></div>
      </div>
      <div class="theme-btn-container"></div>
      <button  onclick="location.href='/ivin/index.php'" type="submit" id="back" class="box" >BACK TO MAIN PAGE</button>
    </section>
  </body>
</html>

<?php
    session_start();
    @$ROLLNO = $_POST['rollno'];
    @$DOB = $_POST['dob'];
    $_SESSION['Roll'] = $ROLLNO;
    $_SESSION['Date'] = $DOB;

    
    // Database connection
    $con = new mysqli("localhost","root","","loginpage");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from students where ROLLNO = ?");
        $stmt->bind_param("s",$ROLLNO);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['DOB'] === $DOB){
                echo '
                <script>
                swal("Good job!", "YOU ENTERED THE CORRECT DETAILS!", "success")
                .then((value) => {
                  window.location.href = "homepage.php";
                });
                </script>';
            }
            else{
                echo '
                <script>
                    swal({
                        title: "ERROR!!",
                        text: "Enter Correct Date Of Birth!",
                        icon: "error",
                        button: "OK",
                    });
                </script>';
            }
        }
        elseif($ROLLNO != ""){
            echo '
                <script>
                    swal({
                        title: "ERROR!!",
                        text: "Enter Correct Roll Number!",
                        icon: "error",
                        button: "OK",
                    });
                </script>';
        }
    }
?>


<style>


* {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  background-image: url("./assets/boom1.jpg");
  background-color: #1a1a2e;
  background-position: center; 
  background-repeat: no-repeat;
  background-size: cover; 
  margin: 0;
  box-sizing: border-box;
  font-family: "poppins";
  color: white;
  letter-spacing: 1px;
}

a {
  text-decoration: none;
  color: white;
}

h1 {
  font-size: 2.5rem;
}

.container {
  display: flex;
  justify-content: center;
  flex-direction:column;
  align-items: center;
  height: 100vh;
}

.login-container {
  position: relative;
  width: 22.2rem;
}
.form-container {
  border: 1px solid hsla(0, 0%, 65%, 0.158);
  box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  backdrop-filter: blur(20px);
  z-index: 99;
  padding: 2rem;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
}

.login-container form input[class="roll-no"], input[class="date"]{
  display: block;
  padding: 14.5px;
  width: 100%;
  margin: 2rem 0;
  color: white;
  outline: none;
  background-color: #9191911f;
  border: none;
  border-radius: 5px;
  font-weight: 500;
  letter-spacing: 0.8px;
  font-size: 15px;
  backdrop-filter: blur(15px);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.roll-no::placeholder, .date::placeholder{
  color: white;
}

.login-container form input:focus {
  box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
  animation: wobble 0.3s ease-in;
  -webkit-animation: wobble 0.3s ease-in;
}

.box {
  background-color: #0f3460;
  color: white;
  display: block;
  padding: 13px;
  border-radius: 5px;
  outline: none;
  font-size: 18px;
  letter-spacing: 1.5px;
  font-weight: bold;
  width: 100%;
  cursor: pointer;
  margin-bottom: 2rem;
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
    background-color: #E2D1F9;
    color: #0f3460;
    border: solid;
    border-color: #0f3460;
    border-width: 2px;
    position: relative;
    width: 22.1rem;
    margin:20px;
  }

.circle {
  width: 8rem;
  height: 8rem;
  background: rgb(187, 46, 149);
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  position: absolute;
}

.logo {
  position: absolute;
  top: 15px;
  right: 30px;
  width: 30%;
}

.circle-one {
  top: 0;
  left: 0;
  z-index: -1;
  transform: translate(-45%, -45%);
  -webkit-transform: translate(-45%, -45%);
  -moz-transform: translate(-45%, -45%);
  -ms-transform: translate(-45%, -45%);
  -o-transform: translate(-45%, -45%);
}

.circle-two {
  bottom: 0;
  right: 0;
  z-index: -1;
  transform: translate(45%, 45%);
  -webkit-transform: translate(45%, 45%);
  -moz-transform: translate(45%, 45%);
  -ms-transform: translate(45%, 45%);
  -o-transform: translate(45%, 45%);
}

.opacity {
  opacity: 1;
}

@keyframes wobble {
  0% {
    transform: scale(1.025);
    -webkit-transform: scale(1.025);
    -moz-transform: scale(1.025);
    -ms-transform: scale(1.025);
    -o-transform: scale(1.025);
  }
  25% {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
  }
  75% {
    transform: scale(1.025);
    -webkit-transform: scale(1.025);
    -moz-transform: scale(1.025);
    -ms-transform: scale(1.025);
    -o-transform: scale(1.025);
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
  }
}


</style>