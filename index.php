<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="style.css">
    <title>Contact Us!</title>
  </head>
  <body>
    <div class="wrapper">
        <div>
            <h1>Contact Us</h1>
        </div>
        <form action="database.php" method="POST" class = "form">
            <div class="input-field">
              <label for="firstname" class = "input-label">First Name: </label>
              <input type="text" name="firstname" id="firstname" class="input" placeholder="Simple" required>
            </div>
            <div class="input-field">
              <label for="lastname" class = "input-label">Last Name: </label>
              <input type="text" name="lastname" id="lastname" class="input" placeholder="Simon" required>
            </div>
            <div class="input-field">
              <label for="email" class = "input-label">E-mail: </label>
              <input type="email" name="email" id="email" autocomplete="email" class="input" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="abc@mail.com"required>
            </div>
            <div class="input-field">
              <label for="contact" class = "input-label">Telephone Number: </label>
              <input type="tel" name="contact" id="contact" class="input" pattern ="[0-9]{11}" maxlength="11" placeholder="07885648112" required>
            </div>
            <div class="input-field">
              <label for="subject" class = "input-label">Subject: </label>
              <select name = "subject"> 
                <option type="text">Enquiry</option>
                <option type="text">Call Back</option>
                <option type="text">Complaint</option>
              </select>
            </div>
            <div class="input-field">
              <label for="message" class = "input-label">Message: </label>
              <textarea name="message" id="message" class="input" placeholder="some important text worthy of someone's attention"></textarea>
            </div>
            <button class="btn" name ="submit">Send Message</button>
        </form>
    </div>
  </body>
</html>