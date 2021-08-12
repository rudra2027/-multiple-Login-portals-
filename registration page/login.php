
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration/Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <center> <b><u>Registration/Login Page</b></u></center>
</head>
<body>


   <div class="container">
   <div class="login-box">
   <div class="row">
   <div class="col-md-6 login-left" >
   <h2>Login Here</h2>
   <form action="validation.php" method="post">
   <div class="form-group">
   <input type="text" name="user" class="form-control" placeholder="Enter Name" required>
   </div>
   <br>
   <div class="form-group">
     <input type="password" class="form-control" name="password"  placeholder="Enter Password" required>
   </div>
   <button type="submit"class="btn btn-primary">Login</button>
</form>
   </div>
   
    <div class="col-md-6 login-right" >
   <h2>Register Here</h2>
   <form action="registration.php" method="post">
   <div class="form-group">
   <input type="text" name="user" class="form-control" placeholder="Enter Name" required>
   </div>
   <br>
   <div class="form-group">
     <input type="password" class="form-control" name="password"  placeholder="Enter Password" required>
   </div><br>
<div class="form-group"> 
<label>Upload Image:
</label>
    <input type="file"id="myfileinput"  class="form-control"accept="image/*" required/>
    <img id="imgpreview"src="recentImageDataUrl"class="form-control" style="margin:3px;padding:12px;max-width:100%;height:auto;">
    <script>
document.querySelector("#myfileinput").addEventListener("change",function(){
   // console.log(this.file);  
const reader=new FileReader();
reader.addEventListener("load",()=>{

localStorage.setItem("recent-image",reader.result);
}) ;
reader.readAsDataURL(this.files[0]);

});

document.addEventListener("DOMContentLoaded",()=>{
const recentImageDataUrl=localStorage.getItem("recent-image");
if(recentImageDataUrl){
   document.querySelector("#imgpreview").setAttribute("src",recentImageDataUrl);
}

});




</script>
    <br><input type="submit" value="Register" name="submit"class="btn btn-primary">



</div>
 
</form>


   </div>
   </div>
   </div>
   
   </div>
   
   </div> 
</body>







</html>