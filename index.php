<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Form Validation Using Javascript Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Bootstrap Form Validation Using Javascript</h2>
  <form class="form-horizontal" id="" name="" action="" method="" onsubmit="return myTechLearns()">

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Full Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="address" class="form-control" id="address" placeholder="Enter Your Address" name="address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Department:</label>
      <div class="col-sm-10">
        <select type="text" id="dept" class="form-control" name="dept"> 
        	<option selected value="">Select Your Department</option> 
            <option value="mytechlearns">My Tech Learns</option> 
            <option value="bba">BBA</option> 
            <option value="cse">CSE</option> 
            <option value="eee">EEE</option> 
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
      <div class="col-sm-10">          
        <div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
		  <label class="form-check-label" for="male"> Male </label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
		  <label class="form-check-label" for="female"> Female </label>
		</div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">

	function myTechLearns()
	{
		var name = document.getElementById("name");
		var address = document.getElementById("address");
		var phone = document.getElementById("phone");
		var email = document.getElementById("email");
		var dept = document.getElementById("dept");
		var male = document.getElementById("male");
		var female = document.getElementById("female");
		var password = document.getElementById("password");

		if (name.value == "") 
		{
			window.alert("Please enter your name."); 
	        name.focus(); 
	        return false; 
		}

		else if (address.value == "")
		{
			window.alert("Please enter your address."); 
	        address.focus(); 
	        return false; 
		}

		else if (phone.value == "")
		{
			window.alert("Please enter your phone."); 
	        phone.focus(); 
	        return false; 
		}

		else if (email.value == "")
		{
			window.alert("Please enter your email."); 
	        email.focus(); 
	        return false; 
		}

		else if (dept.value == "")
		{
			window.alert("Please enter your department."); 
	        dept.focus();  
	        return false; 
		}

		else if ( (male.checked == false) && (female.checked == false) )
		{ 
			window.alert("Please enter your gender."); 
	        male.focus(); 
	        return false; 
		}

		else if (password.value == "")
		{
			window.alert("Please enter password."); 
	        password.focus(); 
	        return false; 
		}

		else
		{
			window.alert("All Submit Properly"); 
	        return true; 
		}
		
	}

</script>

</body>
</html>
