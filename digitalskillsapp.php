<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = " Hi welcome to Digital Skills Hub \n";
$response .= "1. Please Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "Select a Digital skill you want to Learn \n";
$response .= "1. Computer Literacy \n";
$response .= "2. Being safe and Legal Online\n";
$response .= "3. Digital Information Skills \n";
$response .= "4. Online Searching and Social media Marketting\n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "You are now subscribing to Computer Literacy lessons \n";
$response .= "Please Enter 1 to confirm \n";
}
else if ($text == "1*1*1") {
$response = "You are now proceeding with the subscription \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*1*1*1") {
$response = "You have now subscribed to Computer Literacy Skills";
}
else if ($text == "1*1*1*0") {
$response = "Sorry! Your subscription has been cancelled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response = "You are now subscribing to being safe and Legal Online \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response = "You are now proceeding with the subscription \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*2*1*1") {
$response = "You have now subscribed to Being safe and Legal Online lessons";
}
else if ($text == "1*2*1*0") {
$response = "Oops Your subscription has been cancelled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
$response = "You are now subscribing to Digital Information Skills lessons \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "You are now proceeding with the subscription \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*3*1*1") {
$response = "You have now subscribed to Digital Information Skills lessons";
}
else if ($text == "1*3*1*0") {
$response = "Sorry! Your subscription has been cancelled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response = "You are now subscribing to Online Searching and Social media Marketting \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "You are now proceeding with Online Searching and Social media Marketting \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*4*1*1") {
$response = "You have now subscribed to Online Searching and Social media Marketting";
}
else if ($text == "1*4*1*0") {
$response = "Sorry! Your subscription has been cancelled";
}
//echo response
header('Content-type: text/plain');
echo $response
?>