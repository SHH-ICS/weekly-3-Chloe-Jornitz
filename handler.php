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
        <a class="mdl-navigation__link" href="index.html">Welcome Page</a>
      </nav>
    </div>

    <main class="mdl-layout__content">
      <div class="page-content">
        
        <?php
        while (1){
          $pizza = "";
          if (isset($_POST['pizza'])) {
            $pizza = $_POST['pizza'];
          }
          $toppings = "";
          if (isset($_POST['toppings'])) {
            $toppings = $_POST['toppings'];
          }
          echo "<h4>" . $pizza . "</h4>";
          echo "<h4>" . $toppings . "</h4>";
          if ($pizza =="large" or $pizza =="Large"){
            $pizzacost = 6;
          }
          elseif ($pizza == "extra large" or $pizza == "Extra Large" or $pizza == "Extra large" or $pizza == "extra Large" or $pizza == "extralarge" or $pizza == "Extralarge" or $pizza == "extra-large" or $pizza == "Extra-Large" or $pizza == "Extra-large"){
            $pizzacost = 10;
          }
          else{
          echo"<h1>Error!</h1>";
          echo "<h3>Please chose one of the size options \"Large\"or \"Extra Large\".</h3>";
          break;
          }
          echo "<h1 style='font-weight: bold'>Cost:</h1>";
          echo "<h3>Pizza:".$pizzacost."</h3>";
          break;
        }
        ?>

        <br>
      </div>
    </main>
  </div>

</body>

</html>