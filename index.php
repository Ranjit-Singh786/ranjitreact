<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>
      <!-- Button to Open the Modal -->
<div class="container">
<div class="d-flex justify-content-end">
<button type="button" id="update" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  ADD USERS
</button>
</div>
<h1 class="text-primary">All Record</h1>
<div id="recodscontent">
</div>

<!-- the model -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add users</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
  <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="name" placeholder="Enter Username" id="name">
</div>
        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><span id="message"></span>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your password" name="cpassword">
    </div><span class="red"></span>
    <div class="form-group">
                    <label for="gen"> Gender:</label><label id="p6">*</label><br/>
                    <input type="radio" name="gender" id="gender" value="Male" >Male
                    <input type="radio" name="gender" id="gender" value="Female" >Female
                </div>
        <div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="city" class="form-control">
      <option value="" selected="selected">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="punjab">Punjab</option>
				<option value="Himachal pradesh">Himachal Pradesh</option>
				<option value="kolkata">kolkata</option>
				<option value="j&k">j&k</option>
				<option value="haryana">haryana</option>
			</select>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="Addrecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
<!-- this is update button model  -->

<!-- the model -->
<div class="modal" id="update_user_model">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
  <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="name" placeholder="Enter Username" id="update_name">
  <input type="hidden" name="id" id="updateId">
</div>
        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="update_email" placeholder="Enter email" name="email">
    </div>
    <span class="red"></span>
    <div class="form-group">
                    <label for="gen"> Gender:</label><label id="p6">*</label><br/>
                    <input type="radio" name="update_gender" id="update_gender" value="Male" >Male
                    <input type="radio" name="update_gender" id="update_gender" value="Female" >Female
                </div>
        <div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="update_city" class="form-control">
      <option value="" selected="selected">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="punjab">Punjab</option>
				<option value="Himachalpradesh">Himachal Pradesh</option>
				<option value="kolkata">kolkata</option>
				<option value="j&k">j&k</option>
				<option value="haryana">haryana</option>
			</select>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="updateForm" data-dismiss="modal" onclick="UpdateData()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <!-- <input type="hidden" id="hidden_user_id"></input> --> -->
      </div>

    </div>
  </div>
</div>

</div> 
    <!-- <button type ="button" onclick=fetchData() class="btn btn-primary">check ajax response</button> -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      <script src="js/ajax.js"></script>   
</body>
</html>