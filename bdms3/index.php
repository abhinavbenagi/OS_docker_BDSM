<!DOCTYPE html>
<html lang="en">
<head>
	<title>donor form</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body >
	<div class="wrapper">
	<font face="Arial">
 

 <center>
	 <h1>Donor Form</h1>
	 <form action='insert.php' method="post">
		 
<p>
	<div class="form-label">
	<label name="namee">name:</label>
	 <input type='text' name='namee' id="namee"  required><br>
		

	</div>
	</p>
		 
		 
<p>
	<div class="form-label1">
		 <label for="sex">sex:</label>
		 <select name = "sex" id="sex" required>
		 <option value = "M" selected>M</option>
		 <option value = "F" selected>F</option>
		 	 
	  </select>
  </div>
		 </p>

		 
<p>
	<div class="form-label">
		 <label for="blood_group">blood_group:</label>
		 <select name = "blood_group" id="blood_group" required>
		 <option value = "O+" selected>O+</option>
		 <option value = "O-" selected>O-</option>
		 <option value = "A+" selected>A+</option>
		 <option value = "A-" selected>A-</option>
		 <option value = "B+" selected>B+</option>
		 <option value = "B-" selected>B-</option>
		 <option value = "AB+" selected>AB+</option>
		 <option value = "AB-" selected>AB-</option>
		 </select>
	</div>	 
		 </p>
 
<p>
	<div class="form-label">
		 <label for="addresss">addresss:</label>
		 <input type='text' name='addresss' id="addresss"  required>
	</div>	 
		 </p>
		 
		 

		 
<p>
	<div class="form-label">
		 <label for="area">area:</label>
		 <input type='text' name='area' id="area"  required>
	</div>	 
		 </p>

<p>
	
<div class="form-label">
		<label for="pincode">pincode:</label>
		 <input type='text' name='pincode' id="pincode"  required>
	</div>	
		
		 </p>
		 
<p>
	<div class="form-label">
		 <label for="city">city:</label>
		 <input type='text' name='city' id="city"  required>
	</div>	 
		 </p>

<p>
	<div class="form-label">
		 <label for="mobile_no">mobile_no:</label>
		 <input type='text' name='mobile_no' id="mobile_no"  required>
     </div>
		 </p>


<p>  <div class="form-label">
		 <label for="dob">dob:</label>
		 <input type='text' name='dob' id="dob"  required>
	</div>
		 </p>


		 <input class="submit"  type='submit' name='submit' id="submit">
	 </form>
	 </center>
 </font>
	</div>
</body>
</html>
