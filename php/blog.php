<?php
// reference https://sysadmins.tech/how-to-create-a-simple-phpmysql-blog-system/

include 'db/backend_conn.php';

$result = $db->query("SELECT * FROM blog_posts ORDER BY date DESC");
if (!$result) {
  die('Error: ' . $db->error);
}
  
$posts = $result->fetch_all(MYSQLI_ASSOC)
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Joshua Lanctot</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    <!-- Open Sans google font import-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet link -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

    <script defer src="../js/index.js"></script>
  </head>

  <body>
    <!-- Navbar -->
    <header>
      <div class="header-container">
        <div class="inner-container-header">
          <h1 class="name"><a href="../index.html">Joshua Lanctot</a></h1>
          <nav>
            <ul class="nav-header-ul">
              <li class="nav-li">
                <a class="nav-link" href="../index.html">About</a>
              </li>
              <li class="nav-li">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-li">
                <a class="nav-link" href="../html/projects.html">Projects</a>
              </li>
              <li class="nav-li">
                <a class="nav-link" href="../html/contact.html">Contact</a>
              </li>
            </ul>
          </nav>
          <button class="btn-mobile-nav">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="nav-icon menu-icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="nav-icon close-icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
      </div>
    </header>
    
    <div class="container">
      <div class="inner-container">
        <!-- Main content -->
        <div class="main-content">
          <h1 class="opening-header">Blog</h1>
          <?php foreach ($posts as $post): ?>
            <div style="margin-bottom: 40px;">
              <h2><?php echo $post['title']; ?></h2>
              <p><?php echo $post['date']; ?></p>
              <pre><?php echo $post['blog_text']; ?></pre>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- Footer-->
        <footer>
          <div class="footer-text">Copyright &copy; 2022 Joshua Lanctot</div>
        </footer>
      </div>
    </div>
  </body>
</html>
