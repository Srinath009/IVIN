<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img.png" />
    <title>Quiz</title>

    <!-- css file link -->
    <link rel="stylesheet" href="/quiz.css">
</head>
<body>
    <img src="assets/img.png" alt="img" id="img" class="img">
    <h1 id="title">Quiz</h1>

    <!-- quiz-container -->
    <div id="quiz-container">
        <!-- question container -->
        <div class="questions">
            <h2 id="question"></h2>
            <ol type="A">
                <li class="option"><span id="option0" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option1" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option2" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option3" onclick="calcScore(this)"></span></li>
            </ol>
            <h4 id="stat"></h4>
        </div>

        <div class="buttons">
            <button type="button" class="next">Next</button>
        </div>

    </div>

    <!-- scoreboard section -->
    <div id="scoreboard">
        <img src="assets/img.png" alt="">
        <h2 id="score-title">Your Score</h2>
        <h2 id="score"></h2>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to Quiz</button>
        <button type="button" id="check-answer" onclick="checkAnswer()">Check Answers</button>
    </div>

    <!-- answers section -->
    <div id="answerBank">
        <h2>Answers :</h2>
        <ol type="1" id="answers">

        </ol>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to Quiz</button>
    </div>

    <!-- javascript file source -->
    <script src="/quiz.js"></script>
</body>
</html>

<script>
    //Question bank
var questionBank= [
    {
        question : 'Who developed Python Programming Language?',
        option : ['Wick van Rossum','Rasmus Lerdorf','Guido van Rossum','Niene Stom'],
        answer : 'Guido van Rossum'
    },
    {
        question : ' Which type of Programming does Python support?',
        option : ['object-oriented programming','structured programming',' functional programming','all of the mentioned'],
        answer : 'all of the mentioned'
    },
    {
        question : 'Is Python case sensitive when dealing with identifiers?',
        option : ['no','yes','machine dependent','none of the mentioned'],
        answer : 'no'
    },
    {
        question : 'All keywords in Python are in _________',
        option : ['Capitalized',' lower case','UPPER CASE','None of the mentioned'],
        answer : 'None of the mentioned'
    },
    {
        question : 'Which of the following is used to define a block of code in Python language?',
        option : [' Indentation','Key','Brackets','All of the mentioned'],
        answer : 'Indentation'
    },
    {
        question : ' Which of the following character is used to give single-line comments in Python?',
        option : ['//','#','!','/*'],
        answer : '#'
    },
    {
        question : ' Python supports the creation of anonymous functions at runtime, using a construct called __________',
        option : ['pi','anonymous','lambda','none of the mentioned'],
        answer : ' lambda'
    },
    {
        question : 'What is the order of precedence in python?',
        option : [' Exponential, Parentheses, Multiplication, Division, Addition, Subtraction',' Exponential, Parentheses, Division, Multiplication, Addition, Subtraction','Parentheses, Exponential, Multiplication, Division, Subtraction, Addition','Parentheses, Exponential, Multiplication, Division, Addition, Subtraction'],
        answer : 'Parentheses, Exponential, Multiplication, Division, Addition, Subtraction'
    }
]

var question= document.getElementById('question');
var quizContainer= document.getElementById('quiz-container');
var scorecard= document.getElementById('scorecard');
var option0= document.getElementById('option0');
var option1= document.getElementById('option1');
var option2= document.getElementById('option2');
var option3= document.getElementById('option3');
var next= document.querySelector('.next');
var points= document.getElementById('score');
var span= document.querySelectorAll('span');
var i=0;
var score= 0;

//function to display questions
function displayQuestion(){
    for(var a=0;a<span.length;a++){
        span[a].style.background='none';
    }
    question.innerHTML= 'Q.'+(i+1)+' '+questionBank[i].question;
    option0.innerHTML= questionBank[i].option[0];
    option1.innerHTML= questionBank[i].option[1];
    option2.innerHTML= questionBank[i].option[2];
    option3.innerHTML= questionBank[i].option[3];
    stat.innerHTML= "Question"+' '+(i+1)+' '+'of'+' '+questionBank.length;
}

//function to calculate scores
function calcScore(e){
    if(e.innerHTML===questionBank[i].answer && score<questionBank.length)
    {
        score= score+1;
        document.getElementById(e.id).style.background= 'limegreen';
    }
    else{
        document.getElementById(e.id).style.background= 'tomato';
    }
    setTimeout(nextQuestion,300);
}

//function to display next question
function nextQuestion(){
    if(i<questionBank.length-1)
    {
        i=i+1;
        displayQuestion();
    }
    else{
        points.innerHTML= score+ '/'+ questionBank.length;
        quizContainer.style.display= 'none';
        scoreboard.style.display= 'block'
    }
}

//click events to next button
next.addEventListener('click',nextQuestion);

//Back to Quiz button event
function backToQuiz(){
    location.reload();
}

//function to check Answers
function checkAnswer(){
    var answerBank= document.getElementById('answerBank');
    var answers= document.getElementById('answers');
    answerBank.style.display= 'block';
    scoreboard.style.display= 'none';
    for(var a=0;a<questionBank.length;a++)
    {
        var list= document.createElement('li');
        list.innerHTML= questionBank[a].answer;
        answers.appendChild(list);
    }
}


displayQuestion();
</script>


<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: sans-serif;
    background: linear-gradient(115deg, rgba(101,151,209,0.8),rgba(202,102,211,0.5)),url(/quizbg.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}
img{
    width: 5.1rem;
    height: 4.8rem;
    border-radius: 50%;
}
.img{
    position: fixed;
}
#title{
    text-align: center;
    padding: 0.8rem 0;
    font-size: 3rem;
    color: rgb(49,70,7);
    background: rgba(105,224,90,0.55);
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.questions{
    margin: 3rem auto;
    width: 90vw;
    padding: 2rem;
    background: rgba(0,255,221,0.45);
    cursor: default;
    border-radius: 1rem;
}
#question{
    margin-bottom: 1rem;
}
.option{
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
    border-bottom: solid 0.1rem blue;
    width: 15rem;
    background: lightblue;
    border-radius: 1rem;
}
.option:hover{
    color: white;
}
ol{
    position: relative;
    padding: 0 1.5rem;
    color: rgb(1,73,73);
}
span{
    display: block;
    padding: 0.1rem 0.7rem;
    border-radius: 1rem;
}
#answer{
    margin-top: 2.5rem;
}
#stat{
    margin-top: 1.5rem;
    color: rgb(6,17,168);
}
.buttons{
    text-align: center;
}
button{
    padding: 0.2rem 1.5rem;
    border: none;
    outline: none;
    font-size: 1.5rem;
    border-radius: 1.5rem;
    color: rgba(93,53,156,0.98);
    background: rgba(161,177,19,0.82);
}
button:active{
    background: lavender;
}
#scoreboard,#answerBank{
    width: 20rem;
    background: rgba(230,230,250,0.77);
    padding: 2rem;
    text-align: center;
    margin: auto;
    position: relative;
    top: 5rem;
    display: none;
}
#score-title{
    margin: 1rem 0;
}
#score-btn,#check-answer{
    margin-top: 1rem;
}
#score{
    font-size: 2.5rem;
}
#answerBank li{
    text-align: left;
    margin-bottom: 0.2rem;
    font-size: larger;
}
#answers{
    margin-top: 1rem;
}
</style>