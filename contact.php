<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
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

  
  td{
  text-align: left;
  }
</style>
</head>
<body>
 <table>
  <tr>
  <td><strong>Name: </strong>'.$name.'</td>
  </tr>

  
  <tr>
  <td><strong>Email: </strong>'.$email.'</td>
  </tr>
  
  
  <tr>
  <td><strong>Phone: </strong>'.$phone.'</td>
  </tr>
  
  
  <tr>
  <td><strong>Message</strong></td>
  </tr>
  <tr>
  <td>'.$message.'</td>
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

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $email;//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:
    \n name\n$name\nemail\n$email\nphone\n$phone\nmessage\n$message\n".
    
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