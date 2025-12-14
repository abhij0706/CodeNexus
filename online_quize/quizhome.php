<?php
//session_start();
include("class/users.php");
$profile = new users;
$profile->show_users_profile($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodeNexus | Exam</title>
  <link rel="shortcut icon" href="/logo-code.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Lobster&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(to right, #e0f7fa, #fce4ec);
      font-family: 'Catamaran', sans-serif;
    }

    .topnav {
      background: #0f172a;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 50px;
    }

    .topnav h1 {
      color: #fff;
      font-family: 'Lobster', cursive;
      font-size: 34px;
    }

    .topnav a {
      color: #cbd5e1;
      text-decoration: none;
      margin-left: 30px;
      font-weight: 600;
      transition: color 0.3s;
    }

    .topnav a:hover,
    .topnav a.active {
      color: #38bdf8;
    }

    .card {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      background: #ffffff;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .card img {
      height: 180px;
      object-fit: contain;
      background-color: #f8fafc;
      padding: 20px;
    }

    .course-btn {
      background-color: #3b82f6;
      border: none;
      border-radius: 30px;
      padding: 8px 25px;
      color: #fff;
      font-size: 0.95rem;
      transition: background-color 0.3s;
    }

    .course-btn:hover {
      background-color: #2563eb;
    }
  </style>
</head>

<body>
  <div class="topnav">
    <h1>CodeNexus</h1>
    <div>
      <a href="../index.php">Home</a>
      <a href="../index.php#myservice_section">Services</a>
      <a href="../index.php#myfaq">FAQs</a>
      <a href="../logout.php">Logout</a>
      <a href="../profile.php" class="active">
        <i class="fa fa-user-circle"></i> <?php echo $_SESSION['username']; ?>
      </a>
    </div>
  </div>

  <div class="container py-5">
    <div class="mb-5 text-center">
      <h2 class="fw-bold">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
      <p class="fs-5 text-muted">Ready to prove your skills? Pass the exam and get certified!.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
      $profile->show_courses();

      $course_images = [
        'Python' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg',
        'JavaScript' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png',
        'Java' => 'https://upload.wikimedia.org/wikipedia/en/3/30/Java_programming_language_logo.svg',
        'C++' => 'https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg',
        'C' => 'https://upload.wikimedia.org/wikipedia/commons/1/19/C_Logo.png',
        'PHP' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg',
        'Web Development' => 'https://cdn-icons-png.flaticon.com/512/1006/1006771.png' // fixed image
      ];

      $displayed = [];

      foreach ($profile->cat_data as $course):
        $name = $course['cat_name'];
        $img = $course_images[$name] ?? 'https://via.placeholder.com/300x180?text=Course';
        $displayed[] = $name;
        ?>
        <div class="col-md-4">
          <div class="card text-center h-100">
            <img src="<?php echo $img; ?>" alt="<?php echo $name; ?> Logo" class="card-img-top">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($name); ?></h5>
              <a href="question_show.php?samp=<?php echo urlencode($name); ?>" class="course-btn mt-3">Start Exam</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php
      $manual_courses = ['PHP', 'C++', 'C', 'Web Development'];
      foreach ($manual_courses as $mc):
        if (!in_array($mc, $displayed)):
          $img = $course_images[$mc];
          ?>
          <div class="col-md-4">
            <div class="card text-center h-100">
              <img src="<?php echo $img; ?>" alt="<?php echo $mc; ?> Logo" class="card-img-top">
              <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($mc); ?></h5>
                <a href="question_show.php?samp=<?php echo urlencode($mc); ?>" class="course-btn mt-3">Start Quiz</a>
              </div>
            </div>
          </div>
          <?php
        endif;
      endforeach;
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>