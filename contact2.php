<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Spoločnosť NABINT sa zaoberá montážou plastových okien, žaluzií a bezpečnostných dverí." />
<meta name="keywords" content="nabint, plastove okna, okno, dvere, bezpecnostne dvere, zaluzie, sietky, ISSO, celotieniace zaluzie, ISSO zaluzie, dom, stavba, byty, budovy, izolacia, izolacna schopnost" />

<meta name="author" content="Dominik Petro, dominik.petro@gmail.com" />
<meta http-equiv="Content-language" content="cs" />
<meta name="robots" content="index,follow" />

<title>Kontakt - potvrdenie - NABINT - montáž plastových okien, žalúzií a bezpečnostných dverí </title>
<link href="basic.css" rel="stylesheet" type="text/css" />
<link href="basic.css" rel="stylesheet" type="text/css" />
<link href="menu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-213955-14");
pageTracker._trackPageview();
</script>
</head>

<body>

<div id="container">



<h1><a href="index.php">
Predajne - NABINT - montáž plastových okien, žalúzií a bezpečnostných dverí 
</a></h1>


<ul>



<li><a href="o-nas.php" title="o nás">o nás</a> </li>
<li><a href="ponuka.php" title="ponuka">ponuka</a> </li>
<li><a href="referencie.php" title="referencie">referencie</a> </li>
<li><a href="predajne.php" title="predajne">predajne</a> </li>
<li><a href="kontakt.php" title="kontakt">kontakt</a> </li>

</ul>
		


<div id="content">

	<div class="text">

	
    <h2>kontaktný formulár</h2>

<?PHP

// 1st check 
if (!$_POST['email'] == "bots are bad")
{
// If the hidden field "email" has been changed from bots are bad...it's a bot, 
// (Remember our 1st trick from the contact.php?) 
// terminate execution of the script.
exit();
}else{
// The field was not changed, on with the next check.
}	

// 2nd check 
include 'contact3.php';
// This is the function to validate the email.
// The code is displayed further in the tutorial.
// We need to include the page that will validate the posted email.
//	Also	use	the trim() function to clean up any spaces from each end. 
if(!validateEmail(trim($_POST['ee456ee'])))
{
// If the email is not a valid one, send an error message. 
echo "<div class='error'> Neplatná emailová adresa ! ";

// terminate execution of the script.
exit();
}else{
// The email looks good, on with the next check.
}



// Set your users info from the previous form.
$name = $_POST['aa456aa'];
$email = $_POST['ee456ee'];
$comments = $_POST['tt456tt'];
$subject = "Kontakt - nabint.sk";

$mate = $_POST['mate'];


// 4th check 
if ($name == "" OR $email == "" OR $comments == "")
{
// If certain fields are empty send an error message. 
echo "<div class='error'> Nevyplnené povinné polia ! ";

// terminate execution of the script.
exit();
}else{
// All fields have some text
}


$my_email = "nabint@centrum.sk";


// Set date and time
$today = date("m.d.Y");
$time = date("H:i:s");

// Make a nice looking layout for the email
$message =
"Message sent: $today at $time:\n\n".
"From: $name\n".
"Email: $email\n".
"About: Kontakt z nabint.sk\n\n".
"Ma zaujem o? : $mate \n\n".

"--------------------------- Komentar ---------------------------\n\n".
$comments.
"\n\n--------------------------------------------------------------------------\n\n"; 
// Send the email
mail($my_email, $subject, $message, "From: $name <$email>");

echo "<div class='ok'> Vaša požiadavka nám bola úspešne odoslaná, čoskoro Vás budeme kontaktovať ";
echo "</div>";
?>

   


    </div>
    
</div>



<div id="footer">
2008 © NABINT - montáž plastových okien, žalúzií a bezpečnostných dverí 

 | <a href="kontakt.php" title="kontakty">kontakty</a> || <a href="http://www.insightstudios.eu/" title="profesionálny web dizajn">profesionálny web dizajn</a>

</div>

</div>

</body>
</html>
