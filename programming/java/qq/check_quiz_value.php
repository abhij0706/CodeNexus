<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'projectdatabase');

$score = isset($_GET['qid']) ? (int)$_GET['qid'] : -1; // ✅ FIX: use int, not print_r
$username = $_SESSION['username'];

$q = "SELECT quiz_total, quiz_id FROM login WHERE username='$username'";
$query = mysqli_query($con, $q);

if ($result1 = $con->query($q)) {
    while ($row1 = $result1->fetch_object()) {
        $score_11 = $row1->quiz_id;
        $score_12 = $row1->quiz_total;
    }
    $result1->close();
}

// ✅ Utility function to show SweetAlert
function showAlert($title, $text, $icon) {
  echo "<script>swal('$title', '$text', '$icon');</script>";
}

switch ($score) {
  case 0:
      if ($score_11 == 0 && $score_12 >= 0) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_1.php");
          exit();
      } elseif ($score_11 > 0) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 1:
      if ($score_11 == 1 && $score_12 >= 3) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_2.php");
          exit();
      } elseif ($score_11 > 1) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 2:
      if ($score_11 == 2 && $score_12 >= 6) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_3.php");
          exit();
      } elseif ($score_11 > 2) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 3:
      if ($score_11 == 3 && $score_12 >= 9) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_4.php");
          exit();
      } elseif ($score_11 > 3) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 4:
      if ($score_11 == 4 && $score_12 >= 12) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_5.php");
          exit();
      } elseif ($score_11 > 4) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 5:
      if ($score_11 == 5 && $score_12 >= 15) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_6.php");
          exit();
      } elseif ($score_11 > 5) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 6:
      if ($score_11 == 6 && $score_12 >= 18) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_7.php");
          exit();
      } elseif ($score_11 > 6) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 7:
      if ($score_11 == 7 && $score_12 >= 21) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_8.php");
          exit();
      } elseif ($score_11 > 7) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 8:
      if ($score_11 == 8 && $score_12 >= 24) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_9.php");
          exit();
      } elseif ($score_11 > 8) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

  case 9:
      if ($score_11 == 9 && $score_12 >= 27) {
          header("Location: http://localhost/CodeNexus/programming/java/qq/java_10.php");
          exit();
      } elseif ($score_11 > 9) {
          showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "warning");
      } else {
          showAlert("Error", "Please Complete Previous Quiz", "error");
      }
      break;

      case 10:
        if ($score_11 == 10 && $score_12 >= 30) {
            header("Location: http://localhost/CodeNexus/programming/java/qq/java_11.php");
            exit();
        } elseif ($score_11 > 9) {
            showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "warning");
        } else {
            showAlert("Error", "Please Complete Previous Quiz", "error");
        }
        break;

        case 11:
          if ($score_11 == 11 && $score_12 >= 33) {
              header("Location: http://localhost/CodeNexus/programming/java/qq/java_12.php");
              exit();
          } elseif ($score_11 > 9) {
              showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "warning");
          } else {
              showAlert("Error", "Please Complete Previous Quiz", "error");
          }
          break;

          case 12:
            if ($score_11 == 12 && $score_12 >= 36) {
                header("Location: http://localhost/CodeNexus/programming/java/qq/java_13.php");
                exit();
            } elseif ($score_11 > 9) {
                showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "warning");
            } else {
                showAlert("Error", "Please Complete Previous Quiz", "error");
            }
            break;

            case 13:
              if ($score_11 == 13 && $score_12 >= 39) {
                  header("Location: http://localhost/CodeNexus/programming/java/qq/java_14.php");
                  exit();
              } elseif ($score_11 > 9) {
                  showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "warning");
              } else {
                  showAlert("Error", "Please Complete Previous Quiz", "error");
              }
              break;

              case 14:
                if ($score_11 == 14 && $score_12 >= 42) {
                    header("Location: http://localhost/CodeNexus/programming/java/qq/java_15.php");
                    exit();
                } elseif ($score_11 > 9) {
                    showAlert("Wait....!", "Sorry, You have completed this quiz... That’s all for now!", "success");
                } else {
                    showAlert("Error", "Please Complete Previous Quiz", "error");
                }
                break;

  default:
      showAlert("Invalid Quiz ID", "Quiz ID received is out of valid range (0-9).", "error");
}

?>
</body>
</html>
