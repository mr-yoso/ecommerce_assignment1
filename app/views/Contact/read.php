<?php
 namespace app\models;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - messages sent</title>
</head>

<body>
  
    <ul>
        <li><a href="../Main/index.php">Landing page</a></li>
        <li><a href="../Main/about_us.php">About us</a></li>
        <li><a href="../Contact/index.php">Contact us</a></li>
        <li><a href="../Contact/read.php">See the messages we get</a></li>
    </ul>

    <h1>Contact us - messages sent</h1>

    
			

		<?php
 $messageModel = new Message;
 $data = $messageModel->read();
       
		foreach($data as $index => $message){
			echo "<h5>$message->email</h5><p>$message->name</p>";
        }
		?>
		


</body>

</html>