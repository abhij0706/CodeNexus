<?php 
	session_start();
	include("../../video tutorials/java/conn.inc.php");
require("../../video tutorials/java/comments.inc.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awesome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://apis.google.com/js/platform.js"></script>

	<style type="text/css">
		#mainpagecontent {
			background-color: white;
			margin-top: 80px;
			height: auto;
			border-color: black;
		}

		.content {
			color: black !important;
		}

		.sidemenu {
			overflow-y: scroll;
		}

		/* Scrollbar styling */
		.sidemenu::-webkit-scrollbar {
			width: 5px;
		}

		.sidemenu::-webkit-scrollbar-thumb {
			background: #142b3d;
			border-radius: 0px;
		}

		.sidemenu::-webkit-scrollbar-thumb:hover {
			background: #142b3d;
		}

		iframe {
			width: 100%;
			min-width: 1200px;
			overflow-x: auto !important;
			white-space: nowrap;
            z-index:10000;
		}

		/* Compiler Section */
		#compilerSection {
			display: none;
			width: 100%;
			margin-top: 80px;
			padding: 10px;
			border: 1px solid #ddd;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index:10000; !
		}

		#compilerIframe {
			width: 100%;
			height: 700px;
			border: none;
            z-index:10000;
		}

		#openCompiler {
			position: fixed;
			bottom: 20px;
			right: 200px;
			padding: 10px 20px;
			background: #28a745;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		#closeCompiler {
            position: fixed;
			bottom: 20px;
			right: 20px;
			padding: 10px 20px;
			background:rgb(255, 0, 0);
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			 font-size: 16px; 
             display:none;
			
		}

		/* #compilerIframe {
			width: 100%;
			height: 700px;
			border: none;
            z-index:10000;
		} */

		#openGPT {
			position: fixed;
			bottom: 20px;
			right: 400px;
			padding: 10px 20px;
			background:rgb(243, 211, 6);
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		#closeGPT {
            position: fixed;
			top: 93px;
			right: 20px;
			padding: 5px 8px;
			background:rgb(255, 0, 0);
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			 font-size: 18px; 
             display:none;
			 z-index: 10000;
			
		}

		.quick-question {
			padding: 6px 12px;
			background-color: #f0f0f0;
			border: 1px solid #ccc;
			border-radius: 20px;
			cursor: pointer;
			font-size: 14px;
			transition: all 0.3s ease;
		}

		.quick-question:hover {
			background-color: #d6e6ff;
			border-color: #007bff;
		}

		 #chatSection {
            position: fixed; 
            bottom: 10px;
            right: 20px; 
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
            overflow: hidden;
            top: 0px; /* Aligns with navbar bottom */
            left: 0px; 
			right:0px;/* Adjust based on your sidebar width */
            width:100% /* 100% minus sidebar width and right margin */
            height: 100%; /* 100% minus header and footer margins */
            z-index: 9998; /* Ensure it's below compiler but above content */
            display: none; /* Make it hidden by default */
            border-radius: 5px; /* Adjust border-radius for less rounded corners if desired */
            margin-top: 80px; /* Align with other content sections */
            padding: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Adjust the chat box to fill available space */
        .chat-box {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 8px;
            max-height: calc(100% - 150px); /* Adjust based on header/footer height */
        }
		.chat-header {
		background-color: #111e2d;
		color: #fff;
		text-align: center;
		padding: 10px;
		font-weight: bold;
		}


		.chat-box .user-msg {
		align-self: flex-end;
		background-color: #dcf8c6;
		border-radius: 12px 12px 0 12px;
		max-width: 75%;
		word-wrap: break-word;
		}

		.chat-box .bot-msg {
		align-self: flex-start;
		background-color: #f1f0f0;
		border-radius: 12px 12px 12px 0;
		max-width: 75%;
		word-wrap: break-word;
		}

		.chat-input-area {
		display: flex;
		border-top: 1px solid #ccc;
		padding: 8px;
		background: #fafafa;
		}

		.chat-input-area input {
		flex: 1;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 20px;
		outline: none;
		margin-right: 8px;
		}

		.chat-input-area button {
		background-color: #007bff;
		color: white;
		border: none;
		padding: 10px 18px;
		border-radius: 20px;
		cursor: pointer;
		transition: background 0.2s;
		}

		.chat-input-area button:hover {
		background-color: #0056b3;
		}

		.quick-buttons {
		display: flex;
		flex-wrap: wrap;
		gap: 6px;
		padding: 10px;
		background-color: #fff;
		border-top: 1px solid #eee;
		}

		.quick-buttons button {
		background-color: #f5f5f5;
		border: none;
		border-radius: 20px;
		padding: 6px 12px;
		font-size: 14px;
		cursor: pointer;
		transition: background-color 0.3s;
		}

		.quick-buttons button:hover {
		background-color: #e0e0e0;
		}

	</style>
</head>
<body>

	<!------Navigation bar---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<h1 style="color: white; margin-top: 10px; font-family: Lobster, cursive;" id="myhead">CodeNexus</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../../index.php">Home</a></li>
					<li><a href="../../index.php#myservice_section">Our Service</a></li>
					<li><a href="../../index.php#faq">FAQs</a></li>
					<li id="logout" style="color:red;"><a href="../../logout.php">LogOut</a></li>
					<li><a href="../../Profile.php" id="our-location" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!------Side menu starts---->
	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<li style="background-color :red; width: 252px;"><a>Home</a></li>

			<?php 
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'projectdatabase');
				$course_name=$_GET['course_name'];
				$q="SELECT * FROM courses WHERE course_name='$course_name'";
				$result=mysqli_query($con,$q);
				while ($res=mysqli_fetch_array($result)) {
			?>
			
			<form action="fetch_main_content.php" method="POST">
				<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
				<button style="background-color: transparent; border: none; text-align:left; color: white;">
					<li style="width: 250px; height: 45px;"><?php echo $res['topic_name']; ?></li>
				</button>
			</form>

			<?php } ?>
		</ul>
	</div>
	<!------Side menu ends---->

	<!------Main Content Starts---->
	<!-- <div id="mainpagecontent" id="title" class="shadow">
		<center>
			<h1 style="color:#000957">
				<b><marquee>Welcome To  Tutorial</marquee></b>
			</h1>
		</center>
	</div> -->

	<div id="mainpagecontent"  class="shadow">
		<div class="content" id="content">
			<p>
				<?php if (isset($_SESSION['xyz'])) { echo $_SESSION['xyz']; } ?>
			</p>
		</div>
	</div>

	
	<?php 
		$q="SELECT url FROM courses WHERE course_name='$course_name'";
		$result=mysqli_query($con,$q);
		$res=mysqli_fetch_array($result);
		$iframe_url = $res['url'];
	?>
		 

<div id="mainpagecontent3" class="shadow">
	<form method="post">
		<div class="notepad">

		<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'projectdatabase');

session_start(); // Ensure session is started
$username = $_SESSION['username'];
$tid = $_SESSION['topic_id'];

// Step 1: Get video_id from courses table
$querr = "SELECT * FROM courses WHERE id = $tid";
$results1 = mysqli_query($con, $querr);

if ($row1 = mysqli_fetch_assoc($results1)) {
    $video_id = $row1['video_id'];
} else {
    echo "No Notes found for topic.";
    $video_id = null;
}

// Step 2: Save notes if submitted
if (isset($_POST["submit"]) && $video_id !== null) {
    $var = mysqli_real_escape_string($con, $_POST['notes']);
    $sql2 = "UPDATE videos SET Notes='$var' WHERE video_id='$video_id' AND username='$username'";
    mysqli_query($con, $sql2);
}

// Step 3: Fetch notes again after saving
$notesContent = '';
if ($video_id !== null) {
    $sql1 = "SELECT Notes FROM videos WHERE video_id = '$video_id' AND username = '$username'";
    $result = mysqli_query($con, $sql1);
    if ($res = mysqli_fetch_assoc($result)) {
        $notesContent = strip_tags(htmlspecialchars_decode($res['Notes'], ENT_QUOTES));
    }
}
?>

			<textarea name="notes" rows="20" id="notes"><?php echo $notesContent; ?></textarea>

			</div>
			<input type="submit" name="submit" value="Save Notes" style="position:fixed;
			margin-left:1605px;
			margin-right : 100px;
			margin-top:610px;
			padding: 1px 6px;
			background-color:rgb(255, 221, 0);
			">																  
	 </form>
</div>

	<script src="../ckeditor/ckeditor.js"></script>
			<script>
				CKEDITOR.replace('notes');
			</script>
		
		<!--- notepad ----->			
			


	<!-- Run Code Button -->
	<button id="openCompiler">Run Code</button>
    <button id="closeCompiler">Close</button>
	<!-- Compiler Section -->
	<div id="compilerSection">
		<!-- <span id="closeCompiler">&times;</span> -->
		<iframe id="compilerIframe" src="<?php echo $iframe_url; ?>"></iframe>
	</div>

	<script>
		document.getElementById("openCompiler").addEventListener("click", function () {
			document.getElementById("compilerSection").style.display = "block";
            document.getElementById("content").style.display="none";
            document.getElementById("closeCompiler").style.display="block";
            document.getElementById("sidebarleftmenu").style.display="none";
            document.getElementById("openCompiler").style.display="none";
			document.getElementById("openGPT").style.display="none";
			document.getElementById("chatSection").style.display = "none";
			document.getElementById("mainpagecontent3").style.display = "none";
			document.getElementById("mainpagecontent").style.display = "none";

			});

		document.getElementById("closeCompiler").addEventListener("click", function () {
			document.getElementById("compilerSection").style.display = "none";
            document.getElementById("content").style.display="block";
            document.getElementById("closeCompiler").style.display="none";
            document.getElementById("sidebarleftmenu").style.display="block";
            document.getElementById("openCompiler").style.display="block";
			document.getElementById("openGPT").style.display="block";
			document.getElementById("mainpagecontent3").style.display = "block";
			document.getElementById("mainpagecontent").style.display = "block";

			});
	</script>
	<!-- Run Code Button -->
	<button id="openGPT">Ask Doubt!</button>
    <button id="closeGPT">X</button>

			
	<div id="chatSection">
		<div class="chat-header">CodeNexus Support</div>
		<div id="chat-box" class="chat-box"></div>

		<div id="recommended-questions" class="quick-buttons">
			<button onclick="setQuickQuestion('Who are you?')">🤖 Who are you?</button>
			<button onclick="setQuickQuestion('How to use the compiler?')">💻 How to use the compiler?</button>
			<button onclick="setQuickQuestion('Where can I see my certificate?')">📜 Certificate?</button>
		</div>

		<div class="chat-input-area">
			<input id="user-input" type="text" placeholder="Ask your doubt here...">
			<button onclick="sendMessage()">Send</button>
		</div>
	</div>
	<script>
		document.getElementById("chatSection").style.display = "none";
		</script>

	<script>
		document.getElementById("openGPT").addEventListener("click", function () {
			document.getElementById("chatSection").style.display = "block";
            document.getElementById("content").style.display="none";
            document.getElementById("closeGPT").style.display="block";
            document.getElementById("sidebarleftmenu").style.display="none";
            document.getElementById("openGPT").style.display="none";
			document.getElementById("openCompiler").style.display="none";
			document.getElementById("mainpagecontent3").style.display = "none";
			document.getElementById("mainpagecontent").style.display = "none";

		});

		document.getElementById("closeGPT").addEventListener("click", function () {
			document.getElementById("chatSection").style.display = "none";
            document.getElementById("content").style.display="block";
            document.getElementById("closeGPT").style.display="none";
            document.getElementById("sidebarleftmenu").style.display="block";
            document.getElementById("openGPT").style.display="block";
			document.getElementById("openCompiler").style.display="block";
			document.getElementById("mainpagecontent3").style.display = "block";
			document.getElementById("mainpagecontent").style.display = "block";

		});
	</script>

	<script>
const userId = "<?php echo $_SESSION['username']; ?>";

async function sendMessage() {
  const input = document.getElementById('user-input');
  const message = input.value;
  appendMessage("user", message);

  const res = await fetch('http://localhost:5000/chat', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({ user_id: userId, message: message })
  });

  const data = await res.json();
  appendMessage("bot", data.response);
  input.value = '';
}
function appendMessage(sender, text) {
    const chatBox = document.getElementById("chat-box");
    const msgDiv = document.createElement("div");
    msgDiv.className = sender === "user" ? "user-msg" : "bot-msg";
    msgDiv.textContent = text;
    chatBox.appendChild(msgDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
  }
function setQuickQuestion(q) {
  document.getElementById('user-input').value = q;
  sendMessage();  // optional: auto-send message
}
</script>

<!-- <script>
  function sendMessage() {
    const input = document.getElementById("user-input");
    const message = input.value.trim();
    if (message === "") return;

    appendMessage("user", message);
    input.value = "";

    // Simulate a bot reply after a second
    setTimeout(() => {
      const reply = generateBotReply(message);
      appendMessage("bot", reply);
    }, 600);
  }

  function appendMessage(sender, text) {
    const chatBox = document.getElementById("chat-box");
    const msgDiv = document.createElement("div");
    msgDiv.className = sender === "user" ? "user-msg" : "bot-msg";
    msgDiv.textContent = text;
    chatBox.appendChild(msgDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  function generateBotReply(message) {
    const msg = message.toLowerCase();
    if (msg.includes("who are you")) {
      return "I'm CodeNexus Support — here to answer your coding questions and help you navigate our platform!";
    }
    if (msg.includes("compiler")) {
      return "To use the compiler, go to the Programming section, select a language, write your code, and hit Run!";
    }
    if (msg.includes("certificate")) {
      return "You can view and download your certificate from the Certificate section on your dashboard.";
    }
    return "Hmm, I didn’t catch that. Try asking about the compiler, certificate, or who I am!";
  }

  function setQuickQuestion(text) {
    document.getElementById("user-input").value = text;
    sendMessage();
  }
</script>
	  -->
	 

     








</body>
</html>
