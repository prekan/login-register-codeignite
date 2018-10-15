
<!DOCTYPE html>
<html>
<head>
    <title>profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
      <meta name="viewport" content=width="device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="entry-header">
         <nav class="navbar navbar-light-bg-info justify content between navbar-light bg-info">
         <a class="navbar-brand" href="#" style="font-size: 35px;">DASHBOARD</a>
         <div class="form-inline">
            <!-- <form  method="post" action="http://localhost/mvc/index.php/form/process" class="form-inline my-2 my-lg-0"> -->
               <!-- <label>Name </label>&nbsp&nbsp&nbsp&nbsp
               <label>Password</label>&nbsp&nbsp&nbsp&nbsp -->
               <a href="http://localhost/mvc/index.php/form/display/"><button title="update profile" class="btn btn-outline-success my-2 my-sm-0 bg-success text-white" type="submit" name="submit">update&nbsp&nbsp</button></a>&nbsp&nbsp&nbsp&nbsp
               <button title="delete profile" class="btn btn-outline-success my-2 my-sm-0 bg-success text-white" type="submit" name="submit">delete&nbsp&nbsp</button>
            <!-- </form> -->

            <ul class="nav-item dropdown" style="padding-top: 15px;">
                
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="http://localhost/mvc/index.php/form/logout">LOGOUT</a>
              </div>
           </ul>
            
       </div>

    </div>

    
    <h2>Welcome <?php echo $_SESSION['username'];?></h2><span class="text-success">You have login successfully</span>
   
    
    	<div class="table" >
        <table class="table-bordered">
          <thead>
            <tr class="table-danger">
              <th>id</th>
              <th>username</th>
              <th>password</th>
              <th>email</th>
              <th>birthday</th>
              <th>mobile</th>
              <th>gender</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
          </thead>
          
           <tbody class="table-warning" style="width: 50%;">

            <!-- <tr>

              <td>1</td>
              <td>test</td>
              <td>test@gmail.com</td>
              <td>test123</td>
              <td>23</td>
              <td>1234567898</td>
              <td><a href="#" class="btn btn-primary">edit</a></td>
              <td><a href="#" class="btn btn-danger">delete</a></td>
            </tr> -->

            <?php
              $i=1;
              foreach($datap as $row)
              {
            ?>
            <form method="post" >
                <tr>
                <td><input type="text" name="id" value="<?php echo $row->id; ?>"></td>
                <td><input type="text" name="username" value="<?php echo $row->username; ?>"></td>
                <td><input type="text" name="password" value="<?php echo $row->password; ?>"></td>
                <td><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
                <td><input type="date" name="birthday" value="<?php echo $row->birthday; ?>"></td>
                <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"></td>
                <td><input type="text" name="gender" value="<?php echo $row->gender; ?>"></td>
                <td><input id="update" class="btn btn-primary id="update" type="submit" name="update" value="update"></td>
                <td><input id="delete" class="btn btn-danger id="delete" type="submit" name="delete" value="delete"></td>
               </tr>
            </form>
            <?php
            $i++;
           }

           ?>
            
          </tbody>
        </table>
        
      </div>


      
      <script type="text/javascript">

$(document).ready(function(){

  $("#update").click(function(){
    $("form").attr(  "action" , "http://localhost/mvc/index.php/form/update");
  });
  $("#delete").click(function(){
    $("form").attr( "action" , "http://localhost/mvc/index.php/form/delete");
  });
});
  </script>
   
    
</body>
</html>        