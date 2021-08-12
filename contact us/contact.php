<?php
 $showAlert=false;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';   
    
    $name = $_POST["userName"]; 
    $email = $_POST["userEmail"]; 
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $query = $_POST["query"];
   
            
    
    $sql = "Select * from users" ;
    
    
        
            $sql = "INSERT INTO `users` ( `time`,`name`, 
                 `email`,`subject`,`message`,`query`) VALUES ( UTC_TIMESTAMP(),'$name', 
                '$email','$subject','$content','$query')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
         
           

    
}
?>
<html>
<head>
<title>PHP Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
.form-container{display:table; border-style: solid;
  border-width: 3px;margin: 100px;padding:20px;margin-left:479px}

  .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; 
  top: 0; 
  width: 100%; 
}


.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar a:hover {
  background: #ddd;
  color: black;
}

@media (min-width: 300px) and (max-width: 990px) {
            .form-container {
            
                margin-left:0px;
                margin-top:90px;
            }
            .frmContact{
                width:277px;
            }
            .input-field{width:245px}
        }


</style>
</head>
<body>
<div class="navbar">
  <a href="contact.php">Home</a>
  <a href="#">Xyz</a>
  <a href="view.php">View Sent Message/Query</a>
</div>

<div class="main">
 
</div> 
    <div class="form-container">
        <form name="frmContact" id="frmContact" method="POST"
            action="contact.php" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

           
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail"style="width: 503px;
height: 40px;" />
            </div>
            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" style="width: 503px;
height: 40px;"/>
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" style="width: 503px;
height: 40px;"/>
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="30" rows="6"style="width: 503px;
height: 40px;"></textarea>
            </div>
            <div class="input-row">
                <label>Query</label> <span id="userquery-info"
                    class="info"></span><br />
                <textarea name="query" id="query"
                    class="input-field" cols="60" rows="6" style="width: 503px;
height: 40px;"></textarea>
            </div>
            <hr style="element {
    width: 506px;
    float: left;" ><br>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Submit " style="width: 250px;
height: 40px;margin-left:100px" />

                <div id="statusMessage"> 
                        <?php
                        if ($showAlert) {echo'<script>';
                        echo'{alert("Query/Message Successfuly Submitted")}';
                        echo'</script>';
                        }
                            ?>
                           
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            var query = $("#query").val();
            
            if (userName == "") {
                $("#userName-info").html("(*)");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("(*)");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("(Invalid Email Address)");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("(*)");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("(*)");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>