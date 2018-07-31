<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Portal Login</title>
      <?php
      if(isset($_GET['msg']) && ($_GET['msg']=="failed")){
          ?>
          <script type='text/javascript'>alert("Login Failed: Invalid Username or Password!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=="registered"))
      {
          ?>
      <script type='text/javascript'>alert("Successfully registered, Please login now!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=='please_login'))
          {
          ?>
          <script type="text/javascript">alert("Please Login First to access your profile!");</script>
          <?php
      }
      ?>
  </head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Login</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="employer/register_emp.php">Company</a></li>
        </ul>
      </li>
      </ul>
  </div>
</nav>
  <body>
   <a href="http://www.fluids.design/Jobportal"><img alt="" src="/Jobportal/images/jlogo.png " style="text-align:centre;margin-left:35%;" width="260" height="56"></a>   
    <div class="container col-sm-5 pull-right">
        <form class="form-signin" action="process_login.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
             <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
             <label for="inputPassword" class="sr-only">Password</label>
                 <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
             <div class="checkbox">
                 <label><input type="checkbox" value="remember-me"> Remember me </label>
                         <a href="forget.php">/Forgot Password</a>
             </div>
            <button class="btn btn-lg btn-success btn-block" type="submit" style="color: black;">Sign in</button>
        </form>
    </div>

<div class="col-sm-10">
    <br> <br>
    <br>
    <br>
    <br>
</div>
<div class="container col-sm-10 pull-right" >

    <div class="row">
        <div class="askreg">
            <div class="col-lg-3">
                <br>
            </div>
        <div class="col-lg-4 " id="ask" style= border-color: rgb(230, 174, 72);
    border-style: solid; border-width: 2px; border-radius: 41px 0px 41px 0px;box-shadow: rgb(153, 153, 153) 0px 0px 0px 0px;background: #00000080; margin: 4px;">
            <h2  style=":color: #ef7f2c; font-family:Opens Sans;">Find Jobs</h2>
            <p style="color:#fff ;font-family: Open sans; font-size: 16px;line-height: 1.55;font-style:semi-bold;" > Helps passive and active jobseekers find better jobs.
                Get connected with recruiters.
                Apply to jobs in just one click.
                Apply to thousands of jobs posted daily.
            </p>
            <p><a class="btn btn-default" href="jobseeker/register_jobseeker.php">Register Today<span class="glyphicon glyphicon-arrow-right"></span> </a></p>
        </div>
            </div>
        <div class="askreg">
        <div class="col-lg-4 " id="ask">
            <h2 style=":color: #ef7f2c; font-family:Opens Sans;">Looking for the right candidate?</h2>
            <p style="color:#fff ;font-family: Open sans; font-size: 16px;line-height: 1.55;font-style:semi-bold;" > Post a job in easy steps and start receiving applications the same day.
                Find the right candidates easily and quickly through our Search feature.
            </p>
            <p><a class="btn btn-default" href="employer/register_emp.php">Register Your Company <span class="glyphicon glyphicon-arrow-right"></span> </a></p>
        </div>
        </div>
    </div>
</div>
    <div class="col-sm-10">
    <br>
</div>
    <div class="col-lg-12">
<footer class="container-fluid text-center">
    <!--<a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a> -->

</footer>
</div>
  </body>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link href="css/signin.css" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
