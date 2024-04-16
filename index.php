<?php

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