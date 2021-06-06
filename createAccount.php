<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
    <h1>Registration Form</h1>
  <form method="POST" action="registration.php" >
      <div class="form-group">
        <label for="name">Name</label>
        <input tpe="email" name="name" id="name" class="form-control" required="">
    </div>
     <div class="form-group">
        <label for="email">Email</label>
        <input tpe="email" name="email" id="email" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="id_1723">Password</label>
        <input type="password" name="password" id="id_1723" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return doValidate();">Register</button>
    <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
   </form><br/>
   </div>
   
      </div>
    </div>
    <script type="text/javascript">
      function doValidate() {

         console.log('Validating...');

         try {
             email = document.getElementById('email').value;
             pw = document.getElementById('id_1723').value;
             name = document.getElementById('name').value;

             console.log("Validating email="+email+" pw="+pw);

             if (pw == null || pw == ""|| email == null || email == "" || name == null || name == "") {

                 alert("All fields must be filled out");

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

         return false;

     }
    </script>
</body>
</html>