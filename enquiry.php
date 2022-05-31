<html>
<head>
<title>
</title>
<link rel="stylesheet" href="main_page_design.css">
<style>
  *{
    margin: 0;
    padding: 0;
}
.fl{
    float: left;
}
.warpper{
    width: 100%;
    height: 100vh;
    background-image: url("image/a3.png");
    background-repeat: no-repeat;
    background-size: cover;
}
.main{
    width: 130%;
    height: 500px;
    background-color: rgba(7, 47, 79, 0.63);
    margin: 110px 20%;
    border-radius: 20px 20px 30px 30px;
}
.head{
    width: 100%;
    background-color: #f8B800;
    height: 40px;
    border-radius: 20px 20px 0 0;
}
.head p{
    line-height: 40px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    color: #fff;
}
.form{
    width: 100%;
    height: 500px;
}
.name{
    font-size: 16px;
    color: #fff;
    margin: 15px 0 0 5%;
}
.name-inp{
    width: 90%;
    height: 30px;
    margin: 5px 0 0 5%;
    font-size: 16px;
    padding: 2px;
    color: rgb(114, 111, 111);
    border: 1px solid rgb(17, 67, 107);
    background-color: rgb(231, 232, 250);
}
.name-textarea{
    width: 90%;
    height: 60px;
    margin: 5px 0 0 5%;
    font-size: 16px;
    padding: 2px;
    color: rgb(114, 111, 111);
    border: 1px solid rgb(17, 67, 107);
    background-color: rgb(231, 232, 250);
}
.name-inp:hover{
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.pass{
    margin: 5px 0 0 5%;
    height: 30px;
    width: 41%;
    padding: 2px;
    background-color: rgb(231, 232, 250);
    border: 1px solid rgb(17, 67, 107);
}
.pass:hover{
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.gender{
    margin: 15px 0 0 5%;
    color: #fff;
    font-size: 16px;
}
.gen{
    font-size: 18px;
}
.genm{
    margin-left: 5%;
}
.sub{
    width: 90%;
    margin: 15px 0 0 5%;
    font-size: 16px;
    height: 40px;
    background-color: #031c30;
    border: 1px solid rgb(17, 67, 107);
    color: #fff;
}
.sub:hover{
    background-color: #E94601;
    color: #fff;
}
  </style>

</head>

 <div class="admin">
 <a href="admin.php"> <input type="button" value="Admin" ></a>
 
 <a href="signup.php">  <input type="button" value="Singup" style="float: right;"></a>
 
	<a href="login.php"><input type="button" value="Singin"  style="float: right;"></a>
  </div> 
<div class="header">

  <h1>Tour And Travel</h1>
  
</div>


  
  
<div class="topnav">
  <a href="main_page.php">Home</a>
  <a href="#">About</a>
  <a href="#">Tour Pakages</a>
  <a href="#">Privacy Policy</a>
  <a href="#">Term of Use</a>
  <a href="#">Contact Us</a>
  <a href="#">Enquiry</a>

</div>
<body>
<form>
<div class="container">
<div class="two">
<div class="img">
<img src="town.jpg"></img>
</div>
<div class="top-mid">

 <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>
Enquiry Form Password</p>
</div>
<div class="form fl">
                <form method="POST">
                    <p class="name">
FULL NAME* :</p>
<p>
<input type="text" name="fname" placeholder="Full Name" class="name-inp"></p>

                    <p class="name">
EMAIL* :</p>
<p>
<input type="email" name="uid" placeholder="Email" class="name-inp"></p>
<p class="name">
PHONE* :</P>
                    <p>
<input type="text" name="phone" placeholder="Phone" class="name-inp"></p>
<p class="name">
SUBJECT* :</p>
<p>
<input type="text" name="subject" placeholder="Subject" class="name-inp">
                    
                    </p>

<p class="name">
DESCRIPTION* :</p>
<p>
<textarea type="text" name="description" placeholder="Description" class="name-textarea"></textarea>
                    
                    </p>
<p>	
<input type="submit" name="sb" value="SUBMIT" class="sub"></p>
</div>
</div>
</div>
</form>
</body>
</html>