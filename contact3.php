<?PHP 
function validateEmail ( $email )
{
// Create the syntactical validation regular expression
$regexp = "^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$";// Presume that the email is invalid
$valid = 0;// Validate the syntax
if (eregi($regexp, $email))
{
list($username,$domaintld) = split("@",$email);
if (getmxrr($domaintld,$mxrecords))
$valid = 1;
} else {
$valid = 0;
}return $valid;}
?>