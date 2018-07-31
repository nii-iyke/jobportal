<!DOCTYPE HTML>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> Job Portal </title>
        <script type="application/javascript">
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
    </head>
        
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand"; "active"; href="index.php">Job Portal</a>
      </div>

    <ul class="nav navbar-nav">
        <li><a data-toggle="tab" href="#recent">Recent Jobs</a></li>
      <!--<li><a data-toggle="tab" href="#jobseeker">Job Seeker</a></li>
      <li><a data-toggle="tab" href="#">Employer</a></li> -->
      <li><a data-toggle="tab" href="#contact">Contact Us</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_jobseeker.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
   
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">


                 <div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
                   <div class="jumbotron text-center" id="searchjum">
                    
<a href="http://www.fluids.design/Jobportal"><img src="images/logo.png " alt="" width="260" height="56"></a>

                      
    <p style = "color : #696969;font-family:"Sans Serif";font-style:italic;">Find your dream Job</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg btn-success" style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
                   </div>
                 </div> <!-- jumbotron -->


    <div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
        </div>

<!--<div class="container-fluid" style="background: transparent"> -->
    <div class="text-center"> 

        <h2 style= "color: transparent">Register</h2>
        <h4 style= "color: transparent">Register here for a better experience</h4>
    </div>
    <div class="container col-sm-10 pull-right" >
    <div class="row">
        <div class="askreg">
        <div class="col-lg-5"  id="ask">
            <h1 style= "color: #ef7f2c">Employers</h1>
           <p style="color:#fff ;font-family: Open sans; font-size: 16px;line-height: 1.55;font-style:semi-bold;" class="go">
            Register today and post a job in easy steps and start receiving applications.
            Find the right candidates easily and quickly through our Search feature.</p>
                        <a href="employer/register_emp.php" style="color: black"> <button class="btn btn-lg">Sign Up</button></a>
        </div>
        <div class="askreg">

        <div class="col-lg-5"  id="ask">
            <h1 style= "color: #ef7f2c">Job Seekers</h1>
           <p style=" color:#fff;font-family:font-family: "Raleway", sans-serif;font-size: 16px;line-height: 1.55;font-style:semi-bold;" class="go">
            Helps passive and active jobseekers find better jobs. 
            Get connected with recruiters.
            Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                        <a href="jobseeker/register_jobseeker.php" style="color: black;"> <button class="btn btn-lg">Sign Up</button></a>
        </div>
          </div>
        </div>
    </div>
</div>                
        <!-- <div class="col-lg-6" >
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1 style = "color : black">Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                   <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>   
        <div class="col-sm-6" id="ask">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1 style = "color : black;">Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg" >Sign Up</button></a>
                </div>  -->
          

   
   <!-- <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: #f4511e"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Tesano, Accra</p>
                <p><span class="glyphicon glyphicon-phone"></span> +2337895212335</p>
                <p><span class="glyphicon glyphicon-envelope"></span> info@jobportal.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->   -->
<div class="col-sm-10">
    <br> <br>
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
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
