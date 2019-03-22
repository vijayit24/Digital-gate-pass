
<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style type="text/css">
    .error {
      color:red;
    }
  </style>


</head>
<body>


<h3 align="center" >STUDENT REGISTRATION FORM</h3>
<div class="container">

<form class="well form-horizontal" action="" method="post"   name="contactForm" novalidate >

<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Fname" placeholder="First Name"  class="form-control"  type="text" maxlength="10" value="<?php if (isset($name)) echo $name ?>"/>
  <span class="error"><?php if (isset($nameError)) echo $nameError ?></span>
  <p class="help-Block"></p>
    </div>
	
  </div>
</div>

<!-- Text input-->        

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="Lname" placeholder="Last Name" class="form-control"  type="text" maxlength="10"/>
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Gender"  value ="Male"/> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Gender" value="Female"  /> Female
                                </label>
                            </div>
                        </div>
                    </div>


<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">College name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="clgname" placeholder="Please enter your College name" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Event Destination</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="eventdest" class="form-control selectpicker" maxlength="40" >
      <option value=" " >select college</option>
      <option></option>
      <option >AIT</option>
	  <option >CIET</option>
      <option >CMS</option>
	  <option >CSI</option>
      <option >Eswar</option>
	  <option >GCT</option>
	  <option >KCT </option>
	  <option >KGCAS</option>
	  <option >KITE</option>
	  <option >Kongunadu</option>
	  <option >Krishnammal</option>
	  <option >NGP</option>
	  <option >PPG</option>
	  <option >PSG </option>
	  <option >Ramakrishna</option>
	   </select>
  </div>
</div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Events</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="events" class="form-control selectpicker"  maxlength="20">
      <option value=" " >Please select your Event</option>
      <option></option>
      <option>Blind coding</option>
      <option >Cube casting</option>
      <option >cyber savvy</option>
	  <option >Dance(group) </option>
	  <option> Dance (solo) </option>
      <option >Debudding</option>
	  <option >Mimicry</option>
	  <option >Music</option>
	  <option >Quiz</option>
	  <option >Robowars</option>
	  <option >Singing</option>
      <option >Tech hunt</option>
      <option >Treasur hunt</option>
      
    </select>
  </div>
</div>
</div>



<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="Email_Id" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php if (isset($email)) echo $email ?>" maxlength="100"/>
  <span class="error"><?php if (isset($emailError)) echo $emailError ?></span>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="Mobile_Number" placeholder="(+91)" class="form-control" type="text" maxlength="10"/>
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text" maxlength="100">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="City" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" maxlength="20" >
      <option value=" " >Please select your state</option>
      <option>Andhra pradesh</option>
      <option>Assam</option>
      <option >Bihar</option>
      <option >Goa</option>
      <option >Gujarat</option>
      <option >Himachal pradesh</option>
      <option >Jammu and kashmir</option>
      <option >Karnataka</option>
      <option >Kerala</option>
      <option> Madhya pradesh</option>
      <option >Manipur</option>
      <option >Nagaland</option>
      <option >Punjab</option>
      <option >Rajasthan</option>
      <option >Tamilnadu</option>
      <option >Uttar pradesh</option>
      
    </select>
  </div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="Pin_Code" placeholder="Zip Code" class="form-control"  type="text" maxlength="6"/>
    </div>
</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit"  name="submit"  class="btn btn-success" >Register <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
 </div><!-- /.container -->

 <?php


 function validateForm(){

    function validate($str) {
     return trim(htmlspecialchars($str));
    }
    
    if (empty($_POST['Fname'])) {

    $nameError = 'Name should be filled';
    } else 
      {
      $name = validate($_POST['Fname']);
      if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
        $nameError = 'Name can only contain letters, numbers and white spaces';
      }
    }
    if (empty($_POST['Email_Id'])) {
    $emailError = 'Please enter your email';
    } 
    else 
    {
      $email = validate($_POST['Email_Id']);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
          $emailError = 'Invalid Email';
        }
    }
    if (empty($nameError)&& empty($emailError)){
        echo "You have filled the form successfully!";
        echo "<br> First Name: $name </br>";
        echo "<br> E-Mail: $email </br>";
      }
  }



if(isset($_POST["submit"]))
{
  validateForm();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'registers';
$link = mysql_connect("$hostname", "$username", "$password");
    if (!$link) {
      echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
          echo mysql_error();
    }
    else{
      echo "<p>Successfully connected to the server '" . $hostname . "'</p>\n";

      $dbcheck = mysql_select_db("$database");
      if (!$dbcheck) {
        echo mysql_error();
      }
      else{
        echo "<p>Successfully connected to the database '" . $database . "'</p>\n";
        $firstName = $_POST["Fname"];
        $lastName = $_POST["Lname"];
        $gender = $_POST["Gender"];
        $college = $_POST["clgname"];
        $eventdesti=$_POST["eventdest"];
        $event = $_POST["events"];
        $emailId = $_POST["Email_Id"];
        $mobile = $_POST["Mobile_Number"];
        $Address=$_POST["address"];
        $city = $_POST["City"];
        $State=$_POST["state"];
        $pincode = $_POST["Pin_Code"];
        
        
        

        $strSQL = "Insert into tbl_mst_student(num_student_id,vch_first_name,vch_last_name,vch_gender,vch_college_name,vch_venue,vch_events,
        vch_email,int_mobile_no,vch_address,vch_city,vch_state,int_pincode) values ('',
        '$firstName','$lastName','$gender','$college','$eventdesti','$event','$emailId','$mobile','$Address','$city',
        '$State','$pincode')"; 
        
        $result= mysql_query($strSQL);

        if($result === TRUE){
        echo "saved sucessfully";
        include('generate_code.php');

        }
        else{
        echo "not save";
        }
      }
    }

  }
  

?>



</body>
</html>