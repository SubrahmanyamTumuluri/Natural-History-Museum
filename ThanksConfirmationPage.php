<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<!--
	Tumuluri, Subrahmanyam
	Red ID:821919300
	CS545,Cyndi Chie
	Assignment #4
-->

	<head>
		<title> CS545 SDSU NHM- Event Signup Form</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assign2styles.css">
		<script src="Name.js"></script>
	</head>
	
<body onload="ValidationFLN( '<?php echo $_SESSION['FirstName']; ?>', '<?php echo $_SESSION['MiddleName']; ?>', '<?php echo $_SESSION['LastName']; ?>')">
		<header>
<h1>San Diego State University <br /><br /> Natural History Museum</h1>

<ul class="Navigationalbar">
<li><a href="index.html">Home</a></li>
<li><a href="About.html">About Us</a></li>
<li><a href="Exibhits.html">Exhibits</a></li>
<li><a href="Events.html">Events</a></li>
<li><a href="Science.html">Science</a></li>
<li><a href="Donations.html">Donations</a></li>
<li><a href="Jms.html">Jobs and Membership Services</a></li>
</ul>
<!--</ul>-->
</header>

<h3>Thank you for subscribing to our newsletter.</h3>
<p id="ValdFN"></p>
<p id="ValdMN"></p>
<p id="ValdLN"></p>
<p id="ValdTN"></p>
<?php
  $FirstName = $_SESSION['FirstName'];
  $MiddleName=$_SESSION['MiddleName'];
  $LastName = $_SESSION['LastName'];
  $Email = $_SESSION['Email'];
  $AddressLine1=$_SESSION['AddressLine1'];
  $State=$_SESSION['State'];
  $NameofEvent=$_SESSION['NameofEvent'];
 $Gender = $_SESSION['Gender'];
$PhoneNumber=$_SESSION['PhoneNumber'];
$Otheve=$_SESSION['Otheve']; 
$TotAttnds=$_SESSION['TotAttnds'];
$NFiveOld=$_SESSION['NFiveOld'];
$NFToTwelveold=$_SESSION['NFToTwelveold'];
$NTToSeventeenold=$_SESSION['NTToSeventeenold'];
$NEPlus=$_SESSION['NEPlus'];
$SignupOption1=$_SESSION['SignupOption1'];
$SignupOption2=$_SESSION['SignupOption2'];
 ?>

  <?php 

//COMMENTED the php VARIABLES of firstName,middleName,lastName below written in php (Assignment-3).
//If the user enters middle name then first name,middle name and last name would be printed
//else only first name and last name will be printed.
//if($MiddleName!=null) {
//echo "Name: " . $FirstName . " " . $MiddleName . " " .$LastName;
//}
//else {
//echo "Name: " . $FirstName . " " . $LastName;
//}




//Here I combined three fields namely Address,State,Phone Number and in the thanks confirmation page
//whatever parameters user enter, only those will be displayed.Since I choose three fields,there are
//8 combinations if-elseif-else equations.
if(($AddressLine1!=null) and ($State!=null) and ($PhoneNumber!=null)) {
echo "Your Address : " . $AddressLine1 . " " . ", State:" . $State;
echo"<br>";
echo  "Phone Number is :" . $PhoneNumber;
}
elseif (($AddressLine1!=null) and ($State==null) and ($PhoneNumber!=null) ) {
echo "Your Address :" . $AddressLine1 . ", Phone Number is :" . $PhoneNumber;
}
elseif (($AddressLine1==null) and ($State!=null) and ($PhoneNumber!=null)) {
echo "Your Address :" . $State . ", Phone Number is :" . $PhoneNumber;
}
elseif (($AddressLine1!=null) and ($State!=null) and ($PhoneNumber==null)) {
echo "Your Address :" . $AddressLine1 . ", State:".  $State;
}
elseif (($AddressLine1==null) and ($State==null) and ($PhoneNumber!=null)) {
echo "Phone Number is :" . $PhoneNumber;
}
elseif (($AddressLine1!=null) and ($State==null) and ($PhoneNumber==null)) {
echo "Your Address :" . $AddressLine1;
}
elseif (($AddressLine1==null) and ($State!=null) and ($PhoneNumber==null)) {
echo "Your Address :" . $State;
}
else {
echo "Complete Address :Not mentioned-unknown";
}
echo"<br>";
echo "<br>";
if($Gender!=null) {
echo "Gender:" . $Gender;
echo"<br>";
}
echo "<br>";
echo "Email: " . $Email;
echo"<br>";

//echo "Total number of Attendees for the event are :" . $TotAttnds;
//echo"<br>";
echo"<br>";
if($NFiveOld!=null){
echo "Number of attendees under five years old : " . $NFiveOld;
echo"<br>";}
echo"<br>";
if($NFToTwelveold!=null){
echo "Number of attendees inbetween 5 years to 12 years old : " . $NFToTwelveold;
echo"<br>";
echo"<br>";}

if($NTToSeventeenold!=null){
echo "Number of attendees inbetween 13 years to 17 years old : " . $NTToSeventeenold;
echo "<br>";
}
echo"<br>";
if($NEPlus!=null){
echo "Number of attendees above 18 years old : " . $NEPlus;

}
echo "<br>";
$p= $NFiveOld+$NFToTwelveold+$NTToSeventeenold+$NEPlus;
echo "Sum of Number of attendees mentioned in sub categories" . " " . $p;
echo"<br>";
echo "<br>";
echo "Event Name selected :" . $NameofEvent;
echo "<br>";
echo "<br>";
if($SignupOption1==null)
{
echo "Preference to newsletter subscription : No";
} 
else {
echo "Your Preference: " . $SignupOption1;
}
echo "<br>";
echo"<br>";
echo "Any other events would you like to see in future:" . $Otheve;
echo"<br>";
echo "<br>";
?>

<footer>

<div class="foc1">
<address>
Museum Location:<br />
Natural History Museum,<br />
San Diego State University<br />
5500 Campanile Drive, San Diego, 92182, CA<br />
Phone:(619) 594-5200<br />
<a href="mailto:nhmuseum@sdsu.edu">nhmuseum@sdsu.edu</a>
</address>
</div>

<div class="foc2">

Museum Timings<br />
Daily 10:00am to 5:00pm<br />
Closed when the campus is closed<br />
Hours subject to change<br />


<p class="LastUpdated">This page was last updated on : 
<script type="text/javascript">
   document.write(document.lastModified);
</script>
</p>

</div>

<div class="foc3">
<ul class="ftrbtn">
<li><a href="Donations.html">Donations</a></li>
<li><a href="Jms.html">Jobs and Memberships</a></li>
<li><a href="Events.html">Events</a></li>
</ul>
</div>

</footer>
	</body>
</html>