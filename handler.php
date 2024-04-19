<!DOCTYPE html>
  <html>

  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-amber.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <title>Pizza Cost Calculator</title>
  </head>

  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title title">Pizza Cost Calculator</span>
      </header>

      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Pizza Cost Calculator</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.html">Welcome Page</a>
        </nav>
      </div>

      <main class="mdl-layout__content">
        <div class="page-content">
          <br>

          <?php
            while (1) {
              $pizza = "";
              if (isset($_POST['pizza'])) {
                $pizza = $_POST['pizza'];
              } $toppings = "";
              if (isset($_POST['toppings'])) {
                $toppings = $_POST['toppings'];
              }

              #pizza cost
              if ($pizza == "large" or $pizza == "Large") {
                $pizzacost = 6;
              } elseif ($pizza == "extra large" or $pizza == "Extra Large" or $pizza == "Extra large" or $pizza == "extra Large" or $pizza == "extralarge" or $pizza == "Extralarge" or $pizza == "ExtraLarge" or $pizza == "extraLarge" or $pizza == "extra-large" or $pizza == "Extra-Large" or $pizza == "Extra-large" or $pizza == "extra-Large") {
                $pizzacost = 10;
              } else {
                echo "<h1 class='headingcenter'>Error!</h1>";
                echo "<h3 class='headingcenter'>Please chose one of the size options \"Large\" or \"Extra Large\".</h3>";
                echo "<h3 class='headingcenter'>Please chose an amount of toppings that is a whole number between 1 and 4.</h3>";
                echo "<a href='/index.html'>
                  <button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buttoncenter'>
                    Order Again
                  </button>
                </a>";
                break;
              }

              #toppings cost
              if ($toppings == 1 or $toppings == "One" or $toppings == "one") {
                $toppingcost = 1;
              } elseif ($toppings == 2 or $toppings == "Two" or $toppings == "two") {
                $toppingcost = 1.75;
              } elseif ($toppings == 3 or $toppings == "Three" or $toppings == "three") {
                $toppingcost = 2.5;
              } elseif ($toppings == 4 or $toppings == "Four" or $toppings == "four") {
                $toppingcost = 3.35;
              } else {
                echo "<h1 class='headingcenter'>Error!</h1>";
                echo "<h3 class='headingcenter'>Please chose one of the size options \"Large\" or \"Extra Large\".</h3>";
                echo "<h3 class='headingcenter'>Please chose an amount of toppings that is a whole number between 1 and 4.</h3>";
                echo "<a href='/index.html'>
                  <button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buttoncenter'>
                    Order Again
                  </button>
                </a>";
                break;
              }

              #HST, subtotal and total cost
              $subtotal = $toppingcost + $pizzacost;
              $HST = $subtotal * 0.13;
              $totalcost = $HST + $subtotal;

              #output cost
              echo "<h1 class='heading'>Cost:</h1>";
              echo "<h4>Pizza: $", number_format($pizzacost, 2, '.', ''), "</h4>";
              echo "<h4>Toppings: $", number_format($toppingcost, 2, '.', ''), "</h4>";
              echo "<h4>HST: $", number_format($HST, 2, '.', ''), "</h4>";
              echo "<h4 class='heading'>Total cost: $", number_format($totalcost, 2, '.', ''), "</h4>";

              #buttons
              echo "<a href='/index.html'>
                <button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button'>
                  Change Order
                </button>
              </a>";
              echo "<a href='/index2.html'>
                <button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button'>
                  Continue
                </button>
              </a>";
              break;
            }
          ?>

          <br>
        </div>
      </main>
    </div>
  </body>
  </html>