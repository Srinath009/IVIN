<?php
   session_start();
   $ROLLNO = $_SESSION['ROLLNO'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="assets/img.png" />
        <title>RESULTS</title>
    </head>
    <body onload="DrawCaptcha();" oncontextmenu="return false">
       <section class="container">
            <div class="box-container">
                    <form class="formbox" id="myForm" name="searchResult" action="http://results.jntuh.ac.in/resultAction" method="post">
                        <input type="hidden" name="degree" value="btech"/>
                        <input type="hidden" name="etype" value="r17"/>
                        <input type="hidden" name="result" value="null"/>
                        <input type="hidden" name="grad" value="null"/>
                        <input type="hidden" name="type" value="intgrade"/>
                        <input type="hidden" name="htno" value="<?php echo $ROLLNO;?>" />                         
                        <br>
                        <label for="sem">CHOOSE THE SEMESTER 
                            <select id="sem" name="examCode">
                                <option value="">SEM</option>
                                <option value="1560">SEM 3  /   2-1</option>
                                <option value="1503">SEM 2  /   1-2</option>
                                <option value="1467">SEM 1  /   1-1</option>
                            </select>
                        </label>
                        <br>
                        <input id="submit" type="submit" value="Submit">
                    </form>
                    <button  onclick="location.href='/ivin/homepage.php'" type="submit" id="back" class="box" >BACK TO HOME PAGE</button>
            </div>
       </section>
    </body>
    </html>


<style>
body {
    width: 100%;
    height: 100vh;
    margin: 0;
    background-color: #e7e7e7;
      color: #080808;
    font-family: Tahoma;
      font-size: 16px;
      font-weight: bolder;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .box-container {
    position: relative;
  }
    
  form {
    width: 60vw;
      max-width: 500px;
      min-width: 300px;
      margin: 0 auto;
    padding: 250px;
    text-align: center;
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

  label {
    display: block;
      margin: 0.5rem 0;
  }
  
  input,
  textarea,
  select {
    margin: 10px 0 0 0;
      width: 100%;
    min-height: 2em;
  }
  
  input, textarea {
    background-color: #0a0a23;
    border: 1px solid #0a0a23;
    color: #ffffff;
  }
    
  input[type="submit"] {
    display: block;
    width: 60%;
    margin: 1em auto;
    height: 2em;
    font-size: 1.1rem;
    background-color: #000000;
    border-color:#333333;
    min-width: 300px;
  }

  .box {
    background-color: #ffffff;
    color: rgb(2, 2, 2);
    display: block;
    padding: 13px;
    border-radius: 5px;
    outline: none;
    font-size: 18px;
    letter-spacing: 1.5px;
    font-weight: bold;
    width: 60vw;
      max-width: 500px;
      min-width: 300px;
      margin: 0 auto;
    cursor: pointer;
    margin: 4rem;
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


</style>