<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
         .container{
            width: 80%;
            margin: 0 auto;
         }
    </style>
</head>
<body>
  <h2 class="text-center">Student Information Form</h2>
  <div class="container mt-5">
  <form action="student" method="POST">
  <div class="form-row">
    <div class="col">
    <label for="formGroupExampleInput">First Name :</label>
      <input type="text" class="form-control" placeholder="First Name">
    </div>
    <div class="col">
    <label for="formGroupExampleInput">Last Name :</label>
      <input type="text" class="form-control" placeholder="Last Name">
    </div>
  </div><br>
  <div class="form-row">
    <div class="col">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Subject</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">Bangla</option>
        <option value="2">English</option>
        <option value="3">Math</option>
        <option value="3">Social Science</option>
      </select>
    </div>
    <div class="col">
    <label for="formGroupExampleInput">Contact Number :</label>
      <input type="text" class="form-control" placeholder="Contact Number">
    </div>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <a class="btn btn-success p-2" href="#" role="button">Submit</a>
</form>

  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>
</html>