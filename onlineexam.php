<?php
            session_start();
            $ROLLNO = $_SESSION['ROLLNO'];
            $Name = $_SESSION['Name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img.png" />
    <title>ONLINE EXAMINATION</title>
</head>
<body>
<P>HEY <span id="name" ><?php echo $Name;?></span> YOU CAN WRITE QUIZ AND PRACTICE CODING HERE</P>
    <div class="container">
        <button onclick="location.href='/ivin/quiz.php'" type="submit" class="box" >QUIZ</button>
        <button onclick="location.href='https://www.hackerrank.com/'" type="submit" class="box" >HACKER RANK</button>
        <button onclick="location.href='https://www.w3schools.com/'" type="submit" class="box" >W3 SCHOOL</button>
        <button onclick="location.href='https://practice.geeksforgeeks.org/home'" type="submit" class="box" >GeeksForGeeks</button>
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
    background: #00FFFF; 
    background: -webkit-linear-gradient(to right, #FF69B4, #00FFFF);  
    background: linear-gradient(to right, #FF69B4, #00FFFF); 
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
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
    color:black;
    border: #880761;
    border-style:inherit;
    font-size: 30px;
    font-weight: bold;
    width: 90%;
    min-width: 500px;
    margin:25px auto;
    padding:auto 0;
}

.box {
    background-color: black;
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
    color: white;
    font-family: "Lucida Handwriting";
  }

</style>

