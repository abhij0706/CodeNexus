<?php
include "../admin/includes/navbar1.php";

$subject=$_REQUEST['sub'];

?>

<html>
    <head>
        <style>
				body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
}

    {
  border: 1px dotted black;
}

p.question {
  font-family: Arial, sans-serif;
  font-size:25px;
  color: black;
  margin-bottom:0px;
}

h1.quizHeader {
  font-family: Arial, sans-serif;
  border-bottom: 2px solid #a2a2a2;
  margin-top: 30px;
}

h2.quizScore{
  font-family: Arial, sans-serif;
  font-size:25px;
}

div.quizAnswers{
  font-family: Arial, sans-serif;
  font-size:16px;
  color: #424242;
  padding: 4px 0 4px 0;
}

label {
  font-family: Arial, sans-serif;
  font-size:20px;
  color: #424242;
  vertical-align:top;
}

input.answer[type="radio"] {
  margin-bottom: 18px;
}

input.quizSubmit[type="submit"] {
  -webkit-background-clip: border-box;
  -webkit-background-origin: padding-box;
  -webkit-background-size: auto;
  -webkit-transition-delay: 0s, 0s;
  -webkit-transition-duration: 0.2s, 0.2s;
  -webkit-transition-property: color, background-color;
  -webkit-transition-timing-function: ease, ease;
  box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px 0px;
  color: #ffffff;
  background-color: #c30b0a;
  margin: 0;
  border: 0;
  outline: 0;
  text-transform:uppercase;
  height:35px;
  width:85px;
  border: 1px solid #5E5E5E;
  border-radius:5px;
  
 }
 input.btnhide[type="submit"] {
  -webkit-background-clip: border-box;
  -webkit-background-origin: padding-box;
  -webkit-background-size: auto;
  -webkit-transition-delay: 0s, 0s;
  -webkit-transition-duration: 0.2s, 0.2s;
  -webkit-transition-property: color, background-color;
  -webkit-transition-timing-function: ease, ease;
  box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px 0px;
  color: #ffffff;
  background-color: #c30b0a;
  margin: 0;
  border: 0;
  outline: 0;
  text-transform:uppercase;
  height:35px;
  width:85px;
  border: 1px solid #5E5E5E;
  border-radius:5px;
  margin-bottom: 5px;
  
 }


input.quizSubmit[type="submit"]:hover {
  color: #ffffff;
  background: #680f11;
  text-decoration: none;
}

table {
  background-color: #F2F2F2;
  border:1px solid #BDBDBD;
  border-radius:5px;
  padding:10px;
  padding-left:25px;
  margin-left:20%;
}

.submitter {
	  width:85px;
	  margin-left:47%;
}

.hide {
	  display:none;
}

</style>
    <head>
<body>
	
  <h1 class="quizHeader"><center>Java Certification</center></h1>
  
	<table style="width:1000px">
	<tr>
	  <td>
	  	<div class="q">
	  		<p class="question">1. Number of primitive data types in Java are?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">1</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>7</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>5</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>4</label>
    		</ul>
	  	</div>
	  </td>
</tr>
<tr>
	  <td>
	  	<div>
	  		<p class="question">2. What is the size of float and double in java?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>32-68</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">32-64</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>40-52</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>18-36</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3. Arrays in java are-</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>Object ref</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">object</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>primative DT</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>none</label>
	    	</ul>
		</div>
	  </td>
      <tr>
	  <td>
	  	<div>
	  		<p class="question">4. In which of the following is toString() method defined? </p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>obj</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">string</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>util</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>none</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
    <tr>
	  <td>
	  	<div>
	  		<p class="question">5. Sample</p>

	    	<ul>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="1">
	        <label id="correctString5">correct answer 4</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>wrong answer</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	</table>
<br/>
  <div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="Submit" />
    </div>
	<div class="submitter">
          <input class="btnhide" id="certificate" onClick="showcertificate()"
          type="submit" value="Certificate"  />
    </div>
  
  
<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
	<div class="quizAnswers" id="correctAnswer5"></div>

<!--show score upon submit-->
    <div>
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	</div>

</body>
<script type="text/javascript">
var calcScore;
function submitQuiz() {
		console.log('submitted');

	// get each answer score
		function answerScore (qName) {
			var radiosNo = document.getElementsByName(qName);

			for (var i = 0, length = radiosNo.length; i < length; i++) {
   				if (radiosNo[i].checked) {
			// do something with radiosNo
					var answerValue = Number(radiosNo[i].value);
				}
			}
			// change NaNs to zero
			if (isNaN(answerValue)) {
				answerValue = 0;
			}
			return answerValue;
		}

	// calc score with answerScore function
	   calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4')+answerScore('q5'));
		console.log("CalcScore: " + calcScore); // it works!

	// function to return correct answer string
		function correctAnswer (correctStringNo, qNumber) {
			console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
			return ("<center><h3 style='padding: -40px;'><u>The correct answer for question No " + qNumber + ": &nbsp;<strong>" +
				(document.getElementById(correctStringNo).innerHTML) + "</strong></u></h3></center>");
			}

	// print correct answers only if wrong (calls correctAnswer function)
		if (answerScore('q1') === 0) {
			document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
		}
		if (answerScore('q2') === 0) {
			document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
		}
		if (answerScore('q3') === 0) {
			document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
		}
		if (answerScore('q4') === 0) {
			document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString4', 4);
		}
		if (answerScore('q5') === 0) {
			document.getElementById('correctAnswer5').innerHTML = correctAnswer('correctString5', 5);
		}
	

	// calculate "possible score" integer
		var questionCountArray = document.getElementsByClassName('question');

		var questionCounter = 0;
		for (var i = 0, length = questionCountArray.length; i < length; i++) {
			questionCounter++;
		}

	// show score as "score/possible score"
		var showScore = "<center><h1 style='background:green;'>Your Score: " + calcScore +"/" + questionCounter+"</center>";
	// if 4/4, "perfect score!"
		if (calcScore === questionCounter) {
			showScore = showScore + "&nbsp; <strong><center>Perfect Score!</center></strong>"
		};
		document.getElementById('userScore').innerHTML = showScore;	
	}
document.querySelector('.btnhide').style.display = 'none'; 
document.querySelector('.quizSubmit').addEventListener('click', showBtn); 
 
function showBtn(e) { 
 document.querySelector('.btnhide').style.display = 'block'; 
 e.preventDefault(); 
}

function showcertificate()
{
	var subject = '<?php echo $subject; ?>';
	location.href = "certificate.php?ahcbsgchabc="+subject+"&utfcahrencode8="+calcScore+"";
}


</script>
