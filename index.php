<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Contact Us!</title>
  </head>
  <body>
    <div class="container w-50 m-auto">
        <div class="text">
            <h1 class="text-center">Contact Us</h1>
            <hr class="w-25 m-auto bg-dark">
        </div>
        <form action="action.php" method="POST" autocomplete="off">
            <div class="first my-4">
              <label for="firstname">First Name: </label>
              <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="last my-4">
              <label for="lastname">Last Name: </label>
              <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="email my-4">
              <label for="email">E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="contact my-4">
              <label for="contact">Telephone Number: </label>
              <input type="tel" name="contact" id="contact" class="form-control" maxlength="11" placeholder="12345678901" required>
            </div>
            <div class="address my-4">
              <label for="address">Address: </label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="message my-4">
              <label for="message">Message: </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-success">Send Message</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>