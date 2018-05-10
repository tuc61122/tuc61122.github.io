<?php include_once ('contact.php')?>

<?php
if (isset($_POST['go']) && empty(emplyeFrname) || empty(emplyerLname) || empty(phone) || empty(email))
 {
    $message = "please fill out the entire form";
}


if (isset($_POST['go'])) 
    {
$FN = filter_input(INPUT_POST,'emplyeFrname',FILTER_SANITIZE_STRING); 
$LN = filter_input(INPUT_POST,'emplyerLname',FILTER_SANITIZE_STRING); 
$Phone = filter_input(INPUT_POST,'phone',FILTER_VALIDATE_INT); 
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

}

$my_email = 'george.g.weaver@gmail.com';
$subject = "New Form submission from . $FN . $LN ";
$body = "You have received a new message from the user $FN . $LN .\n".
        
mail($my_email,$subject,$body);
?>