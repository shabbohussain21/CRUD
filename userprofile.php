<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-md-6 p-5" >
  <h2>Adding Profile Details in Form</h2>

  <form  action="profileadd.php" method="POST" name="myForm" onsubmit="return validate()"  >
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
 
    </div>
     <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">

    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">

    </div>
    <div class="form-group">
      <label for="headine">Headline:</label>
      <input type="text" class="form-control" id="headline"  name="headline">
  
    </div>
     <div class="form-group">
      <label for="summary">Summary:</label>
      <textarea name="summary" class="form-control" id="summary" cols="4" rows="3"></textarea>

    </div>
   <input type="submit"  class="btn btn-primary" value="Submit">
 
<!--     <button type="" class="btn btn-primary">Cancel</button> -->
  </form>
</div>
</div>
<script type="text/javascript">
      function validate(){
     try{

       // taking varial from input 
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var headline = document.getElementById('headline').value;
        var summary = document.getElementById('summary').value;

           if (fname == null || fname == ""|| email == null || email == "" ||lname == null || lname == "" || headline == null || headline == ""
            || summary == null || summary == "") {

                 alert("Both fields must be filled out");

                 return false;

             }
             if (email.indexOf('@') == -1) {
              alert('Invalid email address');
              return false;
             }
             return true;

         } catch(e) {

             return false;

         }
       
    }
</script>
</body>
</html>