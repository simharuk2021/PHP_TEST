<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>  
</head>
<body>
<h1> Contact Form </h1>

    <form action = "contact.php" method="post">
        <div>
            <label for="first_name"></label>
            <input type ="text" name ="firstname" required/>
        </div>

        <div>
            <label for="last_name"></label>
            <input type ="text" name ="last_name" required/>
        </div>

        <div>
            <label for="email"></label>
            <input type ="email" name ="email" required/>
        </div>

        <div>
            <label for="telephone"></label>
            <input type ="text" name ="telephone number" required/>
        </div>

        <div>   
            <input type="submit" name="submit"/>
        </div>


    </form>

</body>
