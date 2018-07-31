<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Jobseeker Registration </title>

 <script type="text/javascript" src="/job_portal/js/validate.js"></script>
         <script>
             function checkForm() {
// Fetching values from all input fields and storing them in variables.
var email = document.getElementById("emailerror").innerHTML;
var pass1 = document.getElementById("passerror").innerHTML;
var pass2 = document.getElementById("passerror2").innerHTML;
var name = document.getElementById("nameerror").innerHTML;
var mobno = document.getElementById("mobnoerror").innerHTML;
var skills = document.getElementById("skillerror").innerHTML;
//Check input Fields Should not be blanks.
var p1=document.getElementById("passnew").value;
var p2=document.getElementById("passconf").value;
    if (p1 != p2) {
        document.getElementById("passerror2").innerHTML="Password Do not Match" ;
    }
    else
    {
        document.getElementById("passerror2").innerHTML="" ;

    }

if(email == '' && pass1 == '' && pass2 == '' &&  name == "" && mobno == '' && skills =='') {
    //document.getElementById("reguser").submit();
                     return true;
}
else {
alert("Fill in with correct information");
                     return false;

}
        }

 
 </script>
</head>
<body>
        
        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registration</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">

    <div class="container">
<a href="http://www.fluids.design/Jobportal"><img alt="" src="/Jobportal/images/logo.png " style="text-align:centre;margin-left:35%;" width="260" height="56"></a>   
        <div class="jumbotron">
            <h1 style = "color : green">Register & find Jobs</h1>
            <p style = "color : green">
                Helps passive and active jobseekers find better jobs. Get connected with recruiters.<br/>
                Apply to jobs in just one click. Apply to thousands of jobs posted daily.
            </p>
        </div>

   <FORM id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
    <h3 class="h3style"; style = "color : green"> Your Login Details </h3>
    

     <div class="form-group">
        <label class="control-label col-sm-2" for="email" >Enter Email:</label>
        <div class="col-sm-4">
             <input type="email" name="useremail" placeholder="Your E-mail" class="form-control" id="email" 
                        required onblur="validate('email','emailerror',this.value)">
        </div>
        <label id="emailerror" class="error" ></label>
     </div>  

     <div class="form-group"> 
         <label class="control-label col-sm-2 " for="passnew" > Create new Password:</label>
         <div class="col-sm-4">  <input type="password" id="passnew" placeholder="New Password" name="pass1" class="form-control" 
                      required onblur="validate('password','passerror',this.value)">
         </div>
        <label id="passerror" class="error"></label>
    </div>

    <div class="form-group">
            <label class= "control-label col-sm-2" for="passconf">Confirm the Password:</label>
               <div class="col-sm-4">        
                <input type="password" id="passconf" placeholder="Confirm Password" name="pass2" class="form-control" required>
                   </div>
                   <label class="error" id="passerror2"></label>
            </div> 


    <div class="page-header"></div>
    <h3 class="h3style"; style = "color : green">Your Contact Information</h3>
    


   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="name" placeholder="Your Name" name="uname" class="form-control" 
                    required onblur="validate('username','nameerror',this.value)"> 
                </div>
         <label id="nameerror" class="error"></label>
    </div>

<div class="form-group">
    <label class="control-label col-sm-3" for="location"> Where are you currently located? </label>
        <div class="col-sm-4">
                    <input type="text" id="cityId" placeholder="Your Current Location" name="city" class="form-control" 
                    required> 
                </div>

     </div>
 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required>
                 </div>
      </div>

<div class="page-header"></div>    
<h3 class="h3style"; style = "color : green"> Your Current Employment Details </h3> 


<div class="form-group"> 
    <label for="experience" class="control-label col-sm-4"> How much work experience do you have:</label>
        <div class="col-sm-4">
            <select name="experience" class="form-control" id="experience" required>
                <option value="">select </option>
                <option value="0">Entry Level </option>
                <option value="1">1 year </option>
                <option value="2">2 year </option>
                <option value="3">3 year </option>
                <option value="4">4 year </option>
                <option value="5">5 year </option>
                <option value="6">6 year </option>
                <option value="7">7 year </option>
                <option value="8">8 year </option>
                <option value="9+">9+ year </option>
         </select>
    </div>
</div>

<div class="form-group"> 
    <label class="control-label col-sm-4" for="skills"> What are your Key Skills:</label>
        <div class="col-sm-4"><input type="text" name="skills" placeholder="skills" class="form-control" name="skills" id="skills"
                                     required onblur="validate('text','skillerror',this.value)">
        </div>
        <label id="skillerror" class="error"></label>
</div>


<div class="page-header"></div>
<h3 class="h3style"; style = "color : green"> Your Educational Qualifications </h3>

<div class="form-group"> 
    <label class="control-label col-sm-2" for="skills"> Last School Attended:</label>
        <div class="col-sm-4"><input type="text" name="schoolnme" placeholder="Name of School" class="form-control" id="schoolnme">
        </div>
</div>

<div class="form-group"> 
    <label class="control-label col-sm-2" for="pgcourse"> Your Level of Education:</label>
        <div class="col-sm-4"> <select name="pgcourse" id="pgcourse"  class="form-control" required>
                                <option value="">Select</option>
                                <option value="JHS Graduate"> JHS Graduate </option>
                                <option value="SHS Graduate">SHS Graduate</option>
                                <option value="Tertiary Level 100">Uni Level 100</option>
                                <option value="Tertiary Level 200">Uni Level 200</option>
                                <option value="Tertiary Level 300">Uni Level 300</option>
                                <option value="Tertiary Level 400">Uni Level 400</option>
                                <option value="Polytechnic Graduate">Polytechnic Graduate</option>
                                <option value="University Graduate">University Graduate</option>
                                <option value="Other">Other</option>
                            </select>
          </div>
</div>

<div class="form-group"> 
    <label class="control-label col-sm-2" for="ugcourse"> Educational Certificate Attained: </label>
     <div class="col-sm-4"> <select name="ugcourse" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="JHS"> JHS </option>
                <option value="SHS">SHS</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="B.A">B.A</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select>
        </div>
 </div>
 
<div class="page-header"> </div>
           
    <div class="page-header"> </div>
   <div class="form-group form-inline col-sm-10">
   <label for="reg" class="control-label col-sm-5">Check for errors before submitting the form!</label>
    <button class="btn btn-success" type="submit"  id="reg">Register</button>
    <label for"reset" class="control-label"> </label>
     <button class="btn btn-danger" type="reset" id="reset"> Reset </button>
</div>
</form>
</div>
<div class="page-header"> </div>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
