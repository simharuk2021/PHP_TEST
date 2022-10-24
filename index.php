<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Contact Us!</title>
  </head>

  <body>
    <div class="wrapper">
        <div>
            <h1 class="title">Contact Us</h1>
        </div>
        <form action="database.php" method="POST" class = "form">
            <div class="input-field">
              <label for="firstname" class = "input-label">First Name: </label>
              <input type="text" name="firstname" id="firstname" class="input" required>
            </div>
            <div class="input-field">
              <label for="lastname" class = "input-label">Last Name: </label>
              <input type="text" name="lastname" id="lastname" class="input" required>
            </div>
            <div class="input-field">
              <label for="email" class = "input-label">E-mail: </label>
              <input type="email" name="email" id="email" class="input" required>
            </div>
            <div class="input-field">
              <label for="contact" class = "input-label">Telephone Number: </label>
              <input type="tel" name="contact" id="contact" class="input" maxlength="11" placeholder="12345678901" required>
            </div>
            <div class="input-field">
              <label for="address" class = "input-label">Subject: </label>
              <select name = "address"> 
                <option type="text">Enquiry</option>
                <option type="text">Call Back</option>
                <option type="text">Complaint</option>
              </select>
            </div>
            <div class="input-field">
              <label for="message" class = "input-label">Message: </label>
              <textarea name="message" id="message" class="input"></textarea>
            </div>
            <button class="btn" name ="submit">Send Message</button>
        </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>