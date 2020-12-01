<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bedrooms = $_POST['bedrooms'];
$livingrooms = $_POST['livingrooms'];
$diningrooms = $_POST['diningrooms'];
$kitchens = $_POST['kitchens'];
$closets = $_POST['closets'];
$showers = $_POST['showers'];
$description = $_POST['description'];
$size = $_POST['size'];
$form = '
<html>
<head>
 <title>Plan request</title>
 <style>
table {
  border-collapse: collapse;
  width: 100%;
}

table, td, th {
  border: 1px solid black;
}
</style>
</head>
<body>
 <table>
  <tr>
  <td><strong>Name</strong></td>
  </tr>
  <tr>
  <td>'.$name.'</td>
  </tr>
  
  <tr>
  <td><strong>Email</strong></td>
  </tr>
  <tr>
  <td>'.$email.'</td>
  </tr>
  
  <tr>
  <td><strong>Phone</strong></td>
  </tr>
  <tr>
  <td>'.$phone.'</td>
  </tr>
  
  <tr>
  <td><strong>Bedrooms</strong></td>
  </tr>
  <tr>
  <td>'.$bedrooms.'</td>
  </tr>
  
  <tr>
  <td><strong>Living rooms</strong></td>
  </tr>
  <tr>
  <td>'.$livingrooms.'</td>
  </tr>
  
  <tr>
  <td><strong>Dining rooms</strong></td>
  </tr>
  <tr>
  <td>'.$diningrooms.'</td>
  </tr>
  
  <tr>
  <td><strong>Kitchens</strong></td>
  </tr>
  <tr>
  <td>'.$kitchens.'</td>
  </tr>
  
  <tr>
  <td><strong>Water Closets</strong></td>
  </tr>
  <tr>
  <td>'.$closets.'</td>
  </tr>
  
  <tr>
  <td><strong>Showers</strong></td>
  </tr>
  <tr>
  <td>'.$showers.'</td>
  </tr>
  
  <tr>
  <td><strong>Description</strong></td>
  </tr>
  <tr>
  <td>'.$description.'</td>
  </tr>
  
  <tr>
  <td><strong>Plot Size</strong></td>
  </tr>
  <tr>
  <td>'.$size.'</td>
  </tr>
  
 </table>
</body>
</html>
';

//Validate first
if(empty($name)||empty($email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $email;//<== update the email address
$email_subject = "New Plan request";
$email_body = "You have received a new message from the user $name.\n".
  " Here are the details:
  
  \nname\n$form
  

    \nname\n$name\nemail\n$email\nphone\n$phone\nbedrooms\n$bedrooms\nliving-rooms\n$livingrooms\ndining-rooms\n$diningrooms\nkitchens\n$kitchens\nclosets\n$closets\nshowers\n$showers\ndescription\n$description\nplot size\n$size\n".
    
$to = "isaacmutugi06@gmail.com";//<== update the email address
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
$headers .= "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$form,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 