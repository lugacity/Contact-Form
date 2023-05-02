<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Get in touch</h1>
        <p>Please fill in the fields</p>
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="Fullname">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Enter Message" cols="30" rows="10"></textarea>
            <button type="submit" name="submit">Send E-Mail</button>
        </form>
    </div>
</body>
</html>