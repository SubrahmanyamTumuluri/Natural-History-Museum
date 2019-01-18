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
  <title>SDSU Natural History Museum</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="assign2styles.css">
  <script type="text/javascript" src="Name.js"></script>

</head>
<body>
<header>

<h1>San Diego State University <br /><br />Natural History Museum</h1>

<ul class="Navigationalbar">
<li><a href="index.html">Home</a></li>
<li><a href="About.html">About Us</a></li>
<li><a href="Exibhits.html">Exhibits</a></li>
<li><a href="Events.html">Events</a></li>
<li><a href="Science.html">Science</a></li>
<li><a href="Donations.html">Donations</a></li>
<li><a href="Jms.html">Jobs and Membership Services</a></li>
</ul>
</header>

<section class="PrsInfoForm"><!--Creating a section named PrsInfoForm-->
<?php
 // Declaring variables and intializing them to empty values.
    $FirstName ="";
    $MiddleName= $LastName="";
    $Email=$PhoneNumber=" ";
    $FirstNameErr=$LastNameErr=$EmailErr=$TotAttndsErr=$PNErr=$NameofEventErr=" ";  
    $AddressLine1=$State=$Gender="";
    $NameofEvent="";
    $State=$TotAttnds="";
    $NFiveOld=$NFToTwelveold=$NTToSeventeenold=$NEPlus=$Otheve="";
    $SignupOption1=$SignupOption2="";

 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
} 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid = true;
  

    
  if (empty(filter_input(INPUT_POST, "FirstName"))) {//Validating First Name field
               $valid = false;
         $FirstNameErr = "First name is required";
            }else {
               $_SESSION['FirstName'] = test_input(filter_input(INPUT_POST, "FirstName"));
         $FirstName = test_input(filter_input(INPUT_POST, "FirstName"));
         if (!preg_match("/^[a-zA-Z ]*$/",$FirstName)) {
        $valid = false;
              $FirstNameErr = "Only letters and white space allowed"; 
            }
            }
            
  if (empty(filter_input(INPUT_POST, "MiddleName"))) {//validating Middle Name field.
               
         $_SESSION['MiddleName'] = "";
            }else {
               $_SESSION['MiddleName'] = test_input(filter_input(INPUT_POST, "MiddleName"));
         $MiddleName = test_input(filter_input(INPUT_POST, "MiddleName"));
         if (!preg_match("/^[a-zA-Z ]*$/",$MiddleName)) {
        $valid=false;
              $MiddleNameErr = "Only letters and white space allowed"; 
            }
            }



           if (empty(filter_input(INPUT_POST, "LastName"))) {//Validating Last Name field.
               $valid = false;
         $LastNameErr = "Last name is required";
            }else {
               $_SESSION['LastName'] = test_input(filter_input(INPUT_POST, "LastName"));
         $LastName = test_input(filter_input(INPUT_POST, "LastName"));
         if (!preg_match("/^[a-zA-Z ]*$/",$LastName)) {
         $valid=false;
               $LastNameErr = "Only letters and white space allowed"; 
            }

            }
    
       if (empty(filter_input(INPUT_POST, "PhoneNumber"))) {//Validating Phone Number field.

                  $_SESSION['PhoneNumber']="";
             }else {
          $_SESSION['PhoneNumber'] = test_input(filter_input(INPUT_POST, "PhoneNumber"));
        $PhoneNumber= test_input(filter_input(INPUT_POST, "PhoneNumber"));
    if (!preg_match("/^[0-9]+$/",$PhoneNumber)) {
        $valid = false;
              $PNErr = "Please input your local US phone number excluding + . - symbols "; 
            }

    
      }

            if (empty(filter_input(INPUT_POST, "Gender"))) {//Validating Gender field.
               $_SESSION['Gender'] = "";
            }else {
      $_SESSION['Gender'] = test_input(filter_input(INPUT_POST, "Gender"));
      }

            if (empty(filter_input(INPUT_POST, "Email"))) {//Validation of E-mail field.
               $valid = false;
         $EmailErr = "Email is required";
            }else {
               $_SESSION['Email'] = test_input(filter_input(INPUT_POST, "Email"));
         $Email = test_input(filter_input(INPUT_POST, "Email"));
    if (!filter_var($_SESSION['Email'], FILTER_VALIDATE_EMAIL)) {
          $valid = false;
          $EmailErr = "The entered email address is in incorrect format please change it."; 
          }
    }
      
    
    if (empty(filter_input(INPUT_POST, "AddressLine1"))) {//Validation of Address field.
               $_SESSION['AddressLine1'] = "";
         } else {
         $_SESSION['AddressLine1'] = test_input(filter_input(INPUT_POST, "AddressLine1"));
          $AddressLine1 = test_input(filter_input(INPUT_POST, "AddressLine1"));
         }
 
       if (empty(filter_input(INPUT_POST, "State"))) {//Validation of State field.
                   $_SESSION['State'] = "";
             }else {
          $_SESSION['State'] = test_input(filter_input(INPUT_POST, "State"));

          }
      
      if (empty(filter_input(INPUT_POST, "TotAttnds"))) {//Validating Total attendants field.
                $valid = false;
     $TotAttndsErr = "Please select number of people who are attending for event.";
            }else {
               $_SESSION['TotAttnds'] = test_input(filter_input(INPUT_POST, "TotAttnds"));
         $TotAttnds = test_input(filter_input(INPUT_POST, "TotAttnds"));
            } 

      if (empty(filter_input(INPUT_POST, "NFiveOld"))) {//validating 'number of attendees less than five years old" field.
                   $_SESSION['NFiveOld'] = "";
          } else {
          $_SESSION['NFiveOld'] = test_input(filter_input(INPUT_POST, "NFiveOld"));
         $NFiveOld = test_input(filter_input(INPUT_POST,"NFiveOld"));
          }
      if (empty(filter_input(INPUT_POST, "NFToTwelveold"))) {//validating "number of attendees inbetween five to twelve years old" field.
                   $_SESSION['NFToTwelveold'] = "";
          } else {
          $_SESSION['NFToTwelveold'] = test_input(filter_input(INPUT_POST, "NFToTwelveold"));
         $NFToTwelveold = test_input(filter_input(INPUT_POST,"NFToTwelveold"));
          }
      if (empty(filter_input(INPUT_POST, "NTToSeventeenold"))) {//Validating "number of attendees inbetween twelve years to seventeen years old" field.
                   $_SESSION['NTToSeventeenold'] = "";
          } else {
          $_SESSION['NTToSeventeenold'] = test_input(filter_input(INPUT_POST, "NTToSeventeenold"));
         $NTToSeventeenold = test_input(filter_input(INPUT_POST,"NTToSeventeenold"));
          }
      if (empty(filter_input(INPUT_POST, "NEPlus"))) {//Validating "number of attendees whose age is 18 years and above" field.
                   $_SESSION['NEPlus'] = "";
          } else {
          $_SESSION['NEPlus'] = test_input(filter_input(INPUT_POST, "NEPlus"));
         $NEPlus = test_input(filter_input(INPUT_POST,"NEPlus"));
          }
    
    if (empty(filter_input(INPUT_POST, "SignupOption1"))) {//Validating "Sign up to the Newsletter" field.
               $_SESSION['SignupOption1'] = "";
            }else {
       $_SESSION['SignupOption1'] = test_input(filter_input(INPUT_POST, "SignupOption1"));
      }

     if (empty(filter_input(INPUT_POST, "NameofEvent"))) {//Validating "Name of Event" field.
               $valid = false;
         $NameofEventErr = " Name of event must be selected";
            }else {
               $_SESSION['NameofEvent'] = test_input(filter_input(INPUT_POST, "NameofEvent"));
         $NameofEvent = test_input(filter_input(INPUT_POST, "NameofEvent"));
         }

    
      
 }     
  //Check condition I used to see if total number of attendees for the event match with sum of attendees in sub-categories.   
    if(($NFiveOld+$NFToTwelveold+$NTToSeventeenold+$NEPlus)!=$TotAttnds) {
      $valid=false;
      echo $TotAttndsErr="The total number of attendees doesn't match with sum of attendees in sub-categories.Please check.";
    }
    if($valid){
    header("location:ThanksConfirmationPage.php");
           exit();
          }        
    
?>

<h2>Please complete this form to register for upcoming events and click submit button</h2>
 <p><span class = "error">Fields marked with * (asterisk) are mandatory.</span></p>
<form name="EventsRegistrationSignup" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>

    <legend>Personal Information:</legend>

  <!--Creating First Name,Middle Name, Last Name and email text fields.-->

  <label for="FirstName">First Name<span class="required">*</span>:</label><br />
    <input type="text" name="FirstName" id="FirstName" size="40"  maxlength="60" value="<?php echo $FirstName; ?>" ><span class = "error"><?php echo " " . $FirstNameErr;?></span>
  <br /><br />

  <label for="MiddleName">Middle Name :</label><br />
    <input type="text" name="MiddleName" id="MiddleName" size="60"  maxlength="100" value="<?php echo $MiddleName; ?>"><span class = "error"><?php echo " " . $MiddleNameErr;?></span>
  <br /><br />

 
    <label for="LastName">Last name<span class="required">*</span>:</label><br />
    <input type="text" name="LastName" id="LastName" size="50"  maxlength="75" value="<?php echo $LastName; ?>" ><span class = "error"><?php echo " " . $LastNameErr;?></span>
  <br /><br />

  <label for="Email">Email<span class="required">*</span>:</label><br />
    <input type="Email" name="Email" id="Email" size="100"  maxlength="255" value="<?php echo $Email; ?>" ><span class = "error"><?php echo " " . $EmailErr;?></span>
  <br /><br />

  <!--Creating Address text field-->
    <label for="AddressLine1">Address :</label>
  <input type = "text" name="AddressLine1" id="AddressLine1" size="80" maxlength="150" value="<?php echo $AddressLine1 ; ?>">
                  

     <label for ="State">State </label>
               
  <select type = "text" name="State" id="State" >   <!--Creating States Select List.-->
  <option value="0" selected></option>
        <option value="AL">AL</option><option value="AK">AK</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option>
  <option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option>
  <option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option>
  <option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option>
  <option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option>  
  <option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="NE">NE</option><option value="NH">NH</option>
  <option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="ND">ND</option>
  <option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option>
  <option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option>
  <option value="VT">VT</option><option value="VA">VA</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
</select><br /><br />

    Gender:<br />
  <input type="radio" name="Gender" id="Male" value="Male"> <label for="Male">Male</label>
    <input type="radio" name="Gender" id="Female" value="Female"> <label for="Female">Female</label>
    <input type="radio" name="Gender" id="Non_binary" value="Non-binary"> <label for="Non_binary">Non-Binary</label><br /><br />

   <!--Creating Phone Number Text field-->
    <label for="PhoneNumber">Telephone Number :</label>
  <input type = "text" name="PhoneNumber" id="PhoneNumber" size="30" maxlength="10" ><?php echo " " . $PNErr;?>

                 <br /><br />
   <!--Creating  Events select list--> 
  <label for="NameofEvent">Event Name <span class="required">*</span></label>
  <select type="text" name="NameofEvent" id="NameofEvent">
    <option value="0" selected></option>
  <option value="Hidden gems coming soon.">Hidden gems coming soon.</option>
  <option value="Cerutti Mastodon discovery">Cerutti Mastodon discovery</option>
  <option value="Allosaurus">Allosaurus</option>
  <option value="Baja's wild side">Baja's wild side</option>
  <option value="coast to cactus in Southern California">Coast to cactus in Southern California</option>
  </select><span class = "error"><?php echo " " . $NameofEventErr;?></span><br /><br />

      <label for="TotAttnds">Total number of attendees for the event <span class="required">*</span></label>
  <select type="number" name="TotAttnds" id="TotAttnds">
    <option value="0" selected></option>
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
    <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
    <option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>  
    <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
    <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
    <option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option>
      <option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option>  
  </select><span class = "error"><?php echo " " . $TotAttndsErr;?></span><br /><br />

  <label for ="NFiveOld">Number of attendees under five years old<span class="required">*</span></label>

  <select type="number" name="NFiveOld" id="NFiveOld">
    <option value="0" selected></option>
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
  </select><span class = "error"></span><br /><br />

    <label for ="NFToTwelveold">Number of attendees inbetween 5 years and 12 years <span class="required">*</span></label>
  <select type="number" name="NFToTwelveold" id="NFToTwelveold">
  <option value="0" selected></option>
  <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
  </select> <span class = "error"></span><br /><br />

  <label for ="NTToSeventeenold">Number of attendees inbetween 13 years and 17 years <span class="required">*</span></label>
   <select type="number" name="NTToSeventeenold" id="NTToSeventeenold">
    <option value="0" selected></option>
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
    </select></span> <br /><br />

      <label for ="NEPlus">Number of attendees above 18 years of age <span class="required">*</span></label>
    <select type="number" name="NEPlus" id="NEPlus">
    <option value="0" selected></option>
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
    </select> <br /><br />

    
    Are you interested to signup for our monthly newsletter? <br />
    <input type="checkbox" name="SignupOption1" id="Yes" value="Yes" checked> <label for="Yes">Yes</label><br />
    <!--<input type="checkbox" name="SignupOption2" id="No" value="No"> <label for="No">No</label><br />-->
  <br /><br />
        <label for="Otheve">Any other events would you like  any other events to be offered in future ?</label><br />
          <textarea name="Otheve" id="Otheve" rows="8" cols="100"><?php echo $Otheve; ?></textarea>
    
  </fieldset>
</section>
  <input type="submit" value="Submit">
  <input type="reset"><br /><br />
</form> 
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

</div>

<div class="foc3">
<ul class="ftrbtn">
<li><a href="Donations.html">Donations</a></li>
<li><a href="Jms.html">Jobs and Memberships</a></li>
<li><a href="Events.html">Events</a></li>
</ul>
</div>

</footer>
  </body></html>