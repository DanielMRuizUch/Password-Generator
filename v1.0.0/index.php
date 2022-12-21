<?php
  include_once('static/php/password-generator.php');

  # Password Length
  $length = 10;
  # Allowed characters
  $characters = "1234567890abcdefghijklmñnopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ.-_*/=[]{}#@|~¬&()?¿";

  # New password
  $Password = random::passsword($length, $characters);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Password Generator</title>
  </head>
  <body>

    <div class="content">
      <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="formGroupExampleInput">
              Recommended password
            </label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New password" value="<?php echo $Password; ?>">
          </div>
        </div>

        <div class="col-md-4"></div>

      </div>
    </div>

  </body>
</html>
