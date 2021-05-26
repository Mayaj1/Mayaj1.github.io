$errors = '';
$myemail = 'mariefloury@icloud.com';
if(empty($_POST['email'])
{
    $errors .= "\n Error: all fields are required";
}

$email_address = $_POST['email'];

if(!preg_match(
    "/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]
    {2,3})$/i",
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
)

if( empty($errors))
{
    $to = $myemail;
    $email_subject = "Newsletter request";
    $email_body = "You have received a request to add this email address to your newsletter.".  
    "Email: $email_address\n";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to, $email_subject,$email_body,$headers);
}