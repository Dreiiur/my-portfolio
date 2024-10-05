<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .container {
      width: 100%;
      margin: 0 auto;
      background-color: transparent;
    }
    .header {
      padding: 1.5rem;
      text-align: center; /* Center the content */
    }

    .header-links {
      list-style-type: none;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
      display: inline-block; /* Make the list inline to help centering */
    }

    .header-links li {
      display: inline-block;
      margin: 0 1rem; /* Add some spacing between list items */
      font-size: 15px;
    }

    .header-links a {
      color: gray;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }

    .header-links a:hover {
      color: #658361;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="header">
        <ul class="header-links">
          <li><a href="#LandingPage.php">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">RESUME</a></li>
          <li><a href="https://www.facebook.com/dreiur/">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </header>
</body>
</html>
