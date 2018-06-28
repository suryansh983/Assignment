<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:100px;

	background-color:#3300FF;
	float:left;
	text-align:center;
	color:#FF0000;
		}
.footer{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:#FF3300;
	float:left;
	text-align:center;
	color: #FFF;
		}

.leftcontent2{
	width:50%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}

.rightcontent2{
	
	width:50%;
	height:250px;
	
	background-color: #F90;
	float:left;
	text-align:center;
	color: #FFF;
		}	
		.image{
	width:100%;
	height:100px;

	background-image:url(4.jpg);
	float:left;
	text-align:center;
	color:#FF0000;
		}
.frontform{
	margin-top:10px;
}
</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('course').value);
var duration=parseInt(document.getElementById('duration').value);
var total=pa*duration
document.getElementById('ta').value=total;
}

</script>
</head>
<body>
<div class="header">
Site's Header 
</div>
<div class="menu">
Site's Menu
</div>

<div class="image">


</div>
<div class="leftcontent2">
<div class="frontform">
<select name="course" id="course" required="required">
<option value="">select course</option>
<option value="2000">FashionDesign</option>
<option value="50000">Polyechnic</option> 
<option value="80000">B.tech</option>
<option value="60000">B.C.A</option>
</select></div>
<div class="frontform">
<select name="Select Duration" id="duration" onblur="f1()" required="required">
<option value="">select Duration</option>
<option value="1">1</option>
<option value="2">2</option> 
<option value="3">3</option>
</select></div>
<div class="frontform">
<input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount" /> </div>

<div class="frontform"><input type="button" name="submit" value=" submit" />
</div></div>
</form>
</div>
<div class="rightcontent2">
<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<div class="frontform">Tech. Prob.<input type="checkbox" value="techproblem" name="techproblem" /> |
Tutorial Prob.<input type="checkbox" name="tutorialproblem" value="tutorialproblem" /> |
Tutor Prob.<input type="checkbox" name="tutorproblem" value="tutorproblem" /> |
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>
</div>
<div class="footer">
<font size="20">footer</font>
</div>

</body>
</html>