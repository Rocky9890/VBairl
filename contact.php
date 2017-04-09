<?php
include 'core/init.php';
protect_page();	
include 'includes/overall/header.php';?>
<?php
if(isset($_POST)){
if (empty($_POST) === false) {
	
	
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$text	= $_POST['text'];

	mysql_query("INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$text')");
	}
}
else{
	echo "something wrong!";
}

?>
<h2>Contacts Us</h2>
<div>
			<img src="img/co1.png" width="600" height="300" frameborder="0" style="border:0" ></img>
</div>
<h2><b>Please Provide Your Valuable Feedback!</b></h2>
			<form action="" method="post">
			<ul>
				
		
						<li>Name:<br>
						<input type="text" name="name" onkeypress="return onlyAlphabets(event,this);"  required placeholder="Your name here...">
						</li>
						
						<li>Email:<br>
						<input type="text" name="email" required placeholder="example@mail.com">
						</li>
						<li>Feedback:<br>
						<textarea rows="10" cols="28" name="text"> 
					    </textarea>
						</li>
						<input type="submit" value="submit"/>
						<input type="reset" name="goback" value="Cancel" onClick="window.location.href='index.php';" />
<input type="Reset" name="Reset" value="Reset" />
				
						
			<ul>
			</form>
<?php include 'includes/overall/footer.php';?>