<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-amber.min.css" />>
  <link rel="stylesheet" href="css/styles.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Cost</title>
</head>

<body>

  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title" style="color: yellow; font-weight: bold">Pizza Cost Calculator</span>
    </header>

    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Pizza Cost Calculator</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">Order Page</a>
      </nav>
    </div>

    <main class="mdl-layout__content">
      <div class="page-content">
        <h1 style="font-weight: bold">Welcome to Pizza Cost Calculator!</h1>
        <h3 style="color: darkred">What size pizza do you want to order?</h3>
        
        <br>


      </div>
    </main>
  </div>
  <?php
  $userName = "";
  if (isset($_POST['userName'])) {
    $userName = $_POST['userName'];
  }
  echo "<h1>Welcome " . $userName . "!</h1>\n";
  ?>

</body>

</html>