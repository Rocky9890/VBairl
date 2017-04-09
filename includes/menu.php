<!--<link href="css/welcome.css" rel="stylesheet" />      
 <nav id="top-menu">
        <ul>
         		<li><a href="index.php">Home</a></li>
                <li><a href="flight.php">Flight</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                
        </ul>
    </nav>-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 36px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-bottom: #00ffff solid 4px;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php"></i>Home</a>
  <a href="flight.php">Flight</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <a onclick="exit()">Exit</a>
   <script type="text/javascript">
        function exit() {
            var x = confirm("Are You Sure You Want To Exit..?");
            if (x) {
                window.document.location.href = "login.html";
            }
			window.close();
            }               
        </script>
</div>
</body>
</html>
