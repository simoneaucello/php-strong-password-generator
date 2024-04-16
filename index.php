<?php

$password_length = $_GET['password_length'];


require_once __DIR__ . '/data/functions.php';
include __DIR__ . '/partials/head.php'

?>

<body>
  <div class="container my-5">
    <h1 class="text-center mb-3 text-warning">Strong Password Generator</h1>
    <h2 class="text-center text-success mb-3">Genera una password sicura</h2>

    <div class="generator">
      <form action="index.php" method="GET">
        <div class="input-group flex-nowrap mb-5">
          <label for="password_length"></label>
          <input type="number" class="form-control" placeholder="Inserisci la lunghezza della password" aria-label="Username" aria-describedby="addon-wrapping" name="password_length" id="password_length" min="1" max="50">
        </div>

        <div class=" d-flex justify-content-center">
          <button type="submit" class="btn btn-danger">GENERA PASSWORD</button>
        </div>

        <div class="text-center mt-5">
          <h3>
            <?php
            if (isset($password_length)) {
              // Genera la password solo se la lunghezza è valida
              if (is_numeric($password_length) && $password_length >= 4) {
                $generated_password = generateRandomPassword($password_length);
                echo "La password generata è: <br><strong>$generated_password</strong>";
              } else {
                echo "<p style='color: red;'>La lunghezza della password deve essere almeno di 4 caratteri.</p>";
              }
            }
            ?>
          </h3>



        </div>





      </form>
    </div>

  </div>
</body>

</html>