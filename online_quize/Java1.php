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
	  		<p class="question">1. Which of the following option leads to the portability and security of Java?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">Bytecode is executed by JVM</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>The applet makes the Java code secure and portable</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>Use of exception handling</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>Dynamic binding between objects</label>
    		</ul>
	  	</div>
	  </td>
</tr>
<tr>
	  <td>
	  	<div>
	  		<p class="question">2. Which of the following is not a Java features?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>Dynamic</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">Use of pointers</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>Architecture Neutral</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>Portable</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3. _____ is used to find and fix bugs in the Java programs.</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>JDK</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
			<label>JVM</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
			<label id="correctString3">JDB</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>JRE</label>
	    	</ul>
		</div>
	  </td>
      <tr>
	  <td>
	  	<div>
	  		<p class="question">4. Which of the following is a valid declaration of a char?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>char ca = 'tea';</label>
	        <br>
			<input class="answer" type="radio" name="q4" value="0">
	        <label>char cr = \u0223;</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>char cc = '\itea';</label>
	        <br>
			<input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">char ch = '\utea';</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
    <tr>
	  <td>
	  	<div>
	  		<p class="question">5. What does the expression float a = 35 / 0 return?</p>

	    	<ul>
			<input class="answer" type="radio" name="q5" value="1">
	        <label id="correctString5">Infinity</label>
	        <br>
			<input class="answer" type="radio" name="q5" value="0">
	        <label>0</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>Not a number</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>None</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">6. Which of the following for loop declaration is not valid?</p>

	    	<ul>
			<input class="answer" type="radio" name="q6" value="0">
	        <label>for ( int i = 7; i <= 77; i += 7 )</label>
	        <br>
			<input class="answer" type="radio" name="q6" value="1">
	        <label id="correctString6">for ( int i = 99; i >= 0; i / 9 )</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>for ( int i = 20; i >= 2; - -i )</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>for ( int i = 2; i <= 20; i = 2* i )</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">7. An interface with no fields or methods is known as a ______.</p>

	    	<ul>
			<input class="answer" type="radio" name="q7" value="0">
	        <label>Runnable Interface</label>
	        <br>
			<input class="answer" type="radio" name="q7" value="0">
	        <label>Abstract Interface</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="1">
	        <label id="correctString7">Marker Interface</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>CharSequence Interface</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">8. Which option is false about the final keyword?</p>

	    	<ul>
			<input class="answer" type="radio" name="q8" value="0">
	        <label>A final method cannot be overridden in its subclasses.</label>
	        <br>
			<input class="answer" type="radio" name="q8" value="0">
	        <label>A final class cannot be extended.</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label>A final method can be inherited.</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="1">
	        <label id="correctString8">A final class cannot extend other classes.</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">9.  In java, jar stands for_____.</p>

	    	<ul>
			<input class="answer" type="radio" name="q9" value="1">
	        <label id="correctString9">None of the below</label>
	        <br>
			<input class="answer" type="radio" name="q9" value="0">
	        <label>Java Archive Runner</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>Java Application Resource</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>Java Application Runner</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">10. What is meant by the classes and objects that dependents on each other?</p>

	    	<ul>
			<input class="answer" type="radio" name="q10" value="0">
	        <label>Cohesion</label>
	        <br>
			<input class="answer" type="radio" name="q10" value="1">
	        <label id="correctString10">Tight Coupling</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>Loose Coupling</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>None of the above</label>
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
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="quizAnswers" id="correctAnswer7"></div>
	<div class="quizAnswers" id="correctAnswer8"></div>
	<div class="quizAnswers" id="correctAnswer9"></div>
	<div class="quizAnswers" id="correctAnswer10"></div>

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
		//window.location.href = "http://localhost:8080/CodeNexus/online_quize/certivaluejava.php";
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
	   calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4')+answerScore('q5')+answerScore('q6')+answerScore('q7')+answerScore('q8')+answerScore('q9')+answerScore('q10'));
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
		if (answerScore('q6') === 0) {
			document.getElementById('correctAnswer6').innerHTML = correctAnswer('correctString6', 6);
		}
		if (answerScore('q7') === 0) {
			document.getElementById('correctAnswer7').innerHTML = correctAnswer('correctString7', 7);
		}
		if (answerScore('q8') === 0) {
			document.getElementById('correctAnswer8').innerHTML = correctAnswer('correctString8', 8);
		}
		if (answerScore('q9') === 0) {
			document.getElementById('correctAnswer9').innerHTML = correctAnswer('correctString9', 9);
		}
		if (answerScore('q10') === 0) {
			document.getElementById('correctAnswer10').innerHTML = correctAnswer('correctString10', 10);
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
