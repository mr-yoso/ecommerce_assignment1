<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>
        <?= $name ?> view
    </title>
</head>

<header>
    <h1>Contact Us</h1>

    <ul>
        <li><a href="/Main/">Landing page</a></li>
        <li><a href="/Main/about_us">About us</a></li>
        <li><a href="/Contact/index">Contact us</a></li>
        <li><a href="/Contact/read">See the messages we get</a></li>
    </ul>
</header>

<body>
    <h1>Contact us</h1>

    <p>Wanna reach us? Write your email information and message in the following form then submit</p>

    <form action='/Contact/send' method='POST'>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="name">Message:</label>
        <textarea id="name" name="name" required></textarea>
        <br>
        <button type="submit" name="action">Submit</button>
    </form>
</body>

</html>