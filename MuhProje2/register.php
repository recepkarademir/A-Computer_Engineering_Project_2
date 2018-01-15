<html>
    <head>
        <title>MuhProje2</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back<br/><br/>
        <form action="register.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>

<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = mysql_real_escape_string($_POST['username']);
		$pssword = mysql_real_escape_string($_POST['password']);
		$bool = true;
		
		mysql_connect("localost","root","") or die(mysql_error()); // Connect to server
		mysql_select_db("first_db")or die("Veri tabanýna baðlanýlamadý");
		if($bool)
		{
			mysql_query("INSERT INTO users (username, password) VALUES ('$username', 'password')"); // inserts value into table users
			Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
?>
		/*echo "Kullanýcý ismi  girin   : ". $username . "<br/>";
		echo "Kullanýcý þifresi girin : ". $pssword;*/
	}
	
?>