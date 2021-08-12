
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Sent Query</title>
    <style>

        .main{    margin-left: 485px;
    display: table-caption;
    align-content: center;
    color: white;
    background-color: black;
}
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

table, th, td {
    border: 2px solid gray;
margin-top: 20px;
}
@media (min-width: 300px) and (max-width: 990px) {
            .main {
                display:flex;
                justify-self: space-around;
                float:left;
                margin-left:0px;
                margin-top:90px;
            }
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
  <p style="margin-top:60px;display:table;">
  <?php
include('config.php');

$sql = "SELECT time,id, name, email,subject,message,query FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0){echo "<table><tr><th>Time</th><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Query</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["time"]. "</td><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td> " . $row["email"]. "</td><td> " . $row["subject"]. "</td><td> " . $row["message"]. "</td><td> " . $row["query"]. "</td></tr>";
}
echo "</table>";
} 
else {
    echo "0 results";
}


$conn->close()
?>
  </p>
</div> 
</body>
</html>