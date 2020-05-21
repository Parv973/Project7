<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Unique Printer Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">


<style>
*
{
	margin:0;
	padding:0;
}
.container
{
	width:90%;
	margin-bottom:70px;
	margin-top:15px;
}
#list li a:hover
{
	color:#FFF;
}
.text
{
	border-radius:10px 10px 10px 10px;
	width:100%;
	height:50px;
	font-size:20px;
	padding-left:20px;
	margin-top:15px;
}
.textarea
{
	border-radius:10px 10px 10px 10px;
	font-size:20px;
	padding-left:20px;
	margin-top:15px;
	width:100%;
	
}
.sent
{
	color: #22C86A;
	font-weight: bolder;
	font-size: 20px;
	text-align: justify;
}
.notsent
{
	color: #F54949;
	font-weight: bolder;
	font-size: 20px;
	text-align: justify;
}
#contact
{
	font-size:50px;
    font-family: 'IM Fell French Canon SC', serif;	color:#656B72;
	margin:auto;
	margin-top:10px;
}
#contact:hover
{
	color:#240404;
}
#con
{
	font-family: 'Sulphur Point', sans-serif;
	font-size:28px;
	margin:auto;
	margin-bottom:10px;
	color:#13171B;
}
.info 
{
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
	margin:auto; 
	border-radius:10px 10px 10px 10px;
	margin-top:10px;
		
}

.info {background-color: #009;} /* Blue */
.info:hover {background: #0b7dda;}


body
{
	
	
}#con {
  color: #66C;
  animation-name: angry-animation;
  animation-duration: 2s;
  animation-timing-function: linear;
  animation-delay: 0s;
  animation-iteration-count: infinite;
  animation-direction: normal;
  font-family: 'Bebas Neue', cursive;
}
@keyframes angry-animation {
  0%{
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
  50%{
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }
  100%{
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
}
#add
{
	
	font-size:30px;
	font-family: 'Comic Neue', cursive;
}
.image
{
	width:100%;
	height:600px;
	background-image:url(images/contact.jpg);
	background-repeat:repeat;
	background-size:100% 100%;
	margin-top:-20px;
}
#footer
{
	height:25px;
	color:#FFF;
	font-size:15px;
	margin-top:15px;
	
}
.form
{
	border-radius:10px 10px 10px 10px;
	background-color:#63B5F1;
	padding-bottom:10px;
	
}
</style>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UNIQUE PRINTER SERVICES</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>

<div class="row">
	<div class="col-sm-12 image">
    </div>
</div>


<div class="container"> 

    <div class="row">
        <div class="col-12" align="center">
            <p id="con"><strong>Want to get in touch with us. Fill the Form and Contact us.</strong></p>
        </div>
    </div>

    <div class="row">
    	<div class="col-sm-6">
        </div>
        <div class="col-sm-6" align="center">
            <h1 id="contact">Contact Us</h1>
        </div>
    </div>

<div class="row">
	<div class="col-sm-6">
    	<p id="add"><strong>Address</strong><br>Am Harthberg 13,<br> 34613 Schwalmstadt,<br> Germany.</p>
    </div>
    
    <div class="col-sm-6 form">
    	<form action="contact.php" method="post">
            	<input type="text" name="t1" value="" placeholder="Full Name" required="required" class="text"/>
        
        <input type="email" name="t2" value="" placeholder="Email" required="required" class="text"/>
        
        <input type="text" name="t3" value="" placeholder="Phone(Optional)" class="text"/>
        
        <textarea name="t4" placeholder="Enter your message for us here. We will get back you soon." cols="50" rows="5" class="textarea" required="required"></textarea>
        
        <center><button class="btn info" name="btn" value="Send">Send</button></center>
        
        </form>
    
</div>

    
       
</div>
</div>

<div class="row">
	<div class="col-sm-12" style="background-color:#000; bottom:0; margin-top:15px;">
    	
            <center><p id="footer">DESIGNED BY PARVEEN, 2014</p></center>
   
    </div>    
    
</div>





</body>
</html>
