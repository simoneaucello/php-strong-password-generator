<?php

// Genero una password casuale con ALMENO una lettera minuscola, una lettera maiuscola, un numero e un simbolo
function generateRandomPassword($length)
{
  $lowercase_letters = 'abcdefghijklmnopqrstuvwxyz';
  $uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $symbols = '!?&%$<>^+-*/()[]{}@#_=';

  $all_characters = $lowercase_letters . $uppercase_letters . $numbers . $symbols;

  $password = '';
  $password .= $lowercase_letters[rand(0, strlen($lowercase_letters) - 1)];
  $password .= $uppercase_letters[rand(0, strlen($uppercase_letters) - 1)];
  $password .= $numbers[rand(0, strlen($numbers) - 1)];
  $password .= $symbols[rand(0, strlen($symbols) - 1)];

  $remaining_length = $length - 4;
  for ($i = 0; $i < $remaining_length; $i++) {
    $password .= $all_characters[rand(0, strlen($all_characters) - 1)];
  }

  // Mescola i caratteri della password in modo casuale
  $password = str_shuffle($password);

  return $password;
}

var_dump(generateRandomPassword($_GET['password_length']));


$password_length = $_GET['password_length'];

include __DIR__ . '/partials/head.php'

?>

<body>
  <div class="container my-5">
    <h1 class="text-center mb-3">Strong Password Generator</h1>
    <h2 class="text-center text-success mb-3">Genera una password sicura</h2>

    <div>
      <form action="index.php" method="GET">
        <div class="input-group flex-nowrap mb-5">
          <label for="password_length"></label>
          <input type="number" class="form-control" placeholder="Inserisci la lunghezza della password" aria-label="Username" aria-describedby="addon-wrapping" name="password_length" id="password_length" min="1" max="50">
        </div>

        <div class=" d-flex justify-content-center">
          <button type="submit" class="btn btn-danger">GENERA PASSWORD</button>
        </div>





      </form>
    </div>

  </div>
</body>

</html>