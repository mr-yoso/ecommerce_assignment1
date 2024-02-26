<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contanct us</title>
</head>

<body>
    <ul>
        <li><a href="../Main/index.php">Landing page</a></li>
        <li><a href="../Main/about_us.php">About us</a></li>
        <li><a href="../Contact/index.php">Contact us</a></li>
        <li><a href="../Contact/read.php">See the messages we get</a></li>
    </ul>

    <h1>Contact Us</h1>

    <p>Wanna reach us?Write your email information and message in the following form then submit</p>

    <form action="/Contact/posted" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>