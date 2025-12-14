<?php
session_start();
include "../admin/includes/navbar1.php";
$username=$_SESSION['username'];
?>
<html>
    <head>
    <script src=
        "https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <link rel="icon" href="logo.png" type="image/x-icon">
        <title>CodeNexus</title>
        <style type='text/css'>
            body
            {
                background-color: whitesmoke;
            }
            .maincon {
                color: black;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                display: flex;
                 align-items: center;
                justify-content: center;
                margin-top:40px;
                
            }
            .container {
                border: 20px solid #1A5CA5;
                width: 750px;
                height: 580px;
                display: table-cell;
                vertical-align: middle;
                background-image: url("cerback(2).jpg");
                background-repeat:no-repeat;
                background-size:750px 650px;
            }
            .logo {
              margin-top:5px;
            color: #A8FC58;
            }

            .marquee {
                color: red;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
                color:black;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
                color:black;
            }
            .reason {
                margin: 20px;
                color:black;
            }
            .logo1
            {
                margin-top:15px;
                align-content: center;
            }
            body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;}
    .printbtn
 {
     
    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 16px;
                    line-height: 20px;
                    font-weight: 600;
                    border-radius: 8px;
                    border: none;
                    box-shadow : 0 10px 40px rgba(255, 122, 0, 0.4);
                    background-color: red;
                    color: #fff;
                margin-left:46%;}

    
</style>
        </style>
    </head>
    <body>
        
        <div class="maincon" id="maincon">
        <div class="container" id="container">
        <?php  
        $username=$_SESSION['username']; 
        $score=$_REQUEST['utfcahrencode8'];
    
         if($score >= 10)
        {
             $score_final='A+';
    
        }
        elseif($score <10 && $score >= 8)
        {
            $score_final='A';
    
        }
        elseif($score <8 && $score >= 6)
        {
             $score_final='B+';
   
        }
        elseif($score <6 && $score >= 4)
        {
            $score_final='B';
 
        }
        elseif($score <4 && $score >= 2)
        {
            $score_final='C';

        }
        else
        {
             $score_final='D';
        }

        ?>
            <div class="logo1">
            <img src="logo_code.png" alt="CodeNexus Logo" width="125" height="125"> 
            </div>
            <div class="logo">
                <h1>CodeNexus</h1>  
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
              <?php
               $con=mysqli_connect('localhost','root');
              mysqli_select_db($con,'projectdatabase');
            $username=$_SESSION['username'];
            $q="select name from login where username='$username'";
              $result=mysqli_query($con,$q);
            while ($res=mysqli_fetch_array($result))
            {
              echo $res['name'];
            }
            ?>
            </div>

            <div class="reason">
                For completing all the tutorials of language course of<br/>
                <b><u><?php echo $_REQUEST['ahcbsgchabc'] ;?></u></b>
        </br>
        <h3>With <b style="color:red;"><?php echo $score_final ?></b> Grade</h3>
            </div>
        </div>
        
        </div>
        </br>

        <div id="output" style="margin-left: 27%; margin-top:0;"></div>
        <button name="printbtn" class="printbtn" id="saveButton" onclick="downloadPDF()">
            Download Certicicate
        </button>
       
        <script type="text/javascript">
  
                
  function downloadPDF() {

            const element = document.getElementById("maincon");
            html2pdf().from(element).save("certificate.pdf");

        }


        </script>
</body>
</html>


<?php



$subject=$_REQUEST['ahcbsgchabc'];
$score=$_REQUEST['utfcahrencode8'];
//java certificate
if($subject == 'JAVA'){
    $q3="select quiz_id from login where username ='$username'";
    $value1 = mysqli_query($con,$q3);
    if ($result1 = $con->query($q3)) {    
        while ($row1 = $result1->fetch_object()) {
           $flag = $row1->quiz_id;
       }
       $result1->close();
    }
    $num=1;
    $val1= ($flag) +$num;
  

    $q2="update login set quiz_id='$val1' where username ='$username'";
    $query=mysqli_query($con,$q2);

    if($score >= 10)
        {
            $q5="update login set certivaluejava='1' where username ='$username'";
            $query=mysqli_query($con,$q5);

        }
    elseif($score <10 && $score >= 8)
        {
            $q6="update login set certivaluejava='2' where username ='$username'";
            $query=mysqli_query($con,$q6);
    
        }
        elseif($score <8 && $score >= 6)
        {
            $q7="update login set certivaluejava='3' where username ='$username'";
            $query=mysqli_query($con,$q7);
   
        }
        elseif($score <6 && $score >= 4)
        {
            $q8="update login set certivaluejava='4' where username ='$username'";
            $query=mysqli_query($con,$q8);
 
        }
        elseif($score <4 && $score >= 2)
        {
            $q9="update login set certivaluejava='5' where username ='$username'";
            $query=mysqli_query($con,$q9);

        }
        else
        {
            $q10="update login set certivaluejava='6' where username ='$username'";
            $query=mysqli_query($con,$q10);
        }

}

//pythoen certificate
if($subject == 'Python'){
    $q3="select quiz_id_p from login where username ='$username'";
    $value1 = mysqli_query($con,$q3);
    if ($result1 = $con->query($q3)) {    
        while ($row1 = $result1->fetch_object()) {
           $flag = $row1->quiz_id_p;
       }
       $result1->close();
    }
    $num=1;
    $val1= ($flag) +$num;
    $q2="update login set quiz_id_p='$val1' where username ='$username'";
    $query=mysqli_query($con,$q2);

    if($score >= 10)
        {
            $q11="update login set certivaluepython='1' where username ='$username'";
            $query=mysqli_query($con,$q11);

        }
    elseif($score <10 && $score >= 8)
        {
            $q12="update login set certivaluepython='2' where username ='$username'";
            $query=mysqli_query($con,$q12);
    
        }
        elseif($score <8 && $score >= 6)
        {
            $q13="update login set certivaluepython='3' where username ='$username'";
            $query=mysqli_query($con,$q13);
   
        }
        elseif($score <6 && $score >= 4)
        {
            $q14="update login set certivaluepython='4' where username ='$username'";
            $query=mysqli_query($con,$q14);
 
        }
        elseif($score <4 && $score >= 2)
        {
            $q15="update login set certivaluepython='5' where username ='$username'";
            $query=mysqli_query($con,$q15);

        }
        else
        {
            $q16="update login set certivaluepython='6' where username ='$username'";
            $query=mysqli_query($con,$q16);
        }

}
?>