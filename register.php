

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 
 
 <link href="bootstrap.min.css" rel="stylesheet"/>
 <style>
   body{
     background-color:lightblue;
   }
   #a{
     text-align:center;
   }
     h1,form{
       font-size:40px;
       color:black;
     }
   #div{
     display:inline-block;
     padding-top:50px;
     padding-left:50px;
   }  
   img{
     width:300px;
     height:300px;
 }
 #P{
     padding-left:200px;
 }
 button,#f{
   text-align:center;
 }

     </style>
</head>

<body>
<h1>Supper Generator</h1>
<h1>Register</h1>

<div id="a"> 
<form action="" method="post">
<div class="form-group">
<label  class="col-sm-2" >E-mail</label>
    <div class="col-sm-6">
      <input type="email"  class="form-control" id="e-mail" name="e-mail" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
<label  class="col-sm-2" >Password</label>
    <div class="col-sm-6">
      <input type="password"  class="form-control" id="password" name="password" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
        <div class="col-sm-4">
            <button style="height:75px; width:120px;" type="submit"  id="submit" class="btn btn-primary"  >Register</button>
        </div>
    </div>
    <div id="P">
<img src="o.jpg">
<img src="th.jpg">  
<img src="calzone.jpg">  
  <img src="a1.jpg">
</div>
</body>
    </html>
