
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
  <h2>Updating Profile Details</h2>

  <form  action="addupdatedata.php" method="GET" name="myForm" >
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" value="<?= $_GET['fname']; ?>">
 
    </div>
     <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" value="<?= $_GET['lname']; ?>">

    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $_GET['email']; ?>">

    </div>
    <div class="form-group">
      <label for="headine">Headline:</label>
      <input type="text" class="form-control" id="headline"  name="headline" value="<?=$_GET['headline']; ?>">
  
    </div>
     <div class="form-group">
      <label for="summary">Summary:</label>
      <textarea name="summary" class="form-control" id="summary" cols="4" rows="3"><?php echo $_GET['summary']; ?></textarea>

    </div>
   <input type="submit"  class="btn btn-primary" value="Update" name="submit">
 
<!--     <button type="" class="btn btn-primary">Cancel</button> -->
  </form>

</div>
</div>

</body>
</html>
