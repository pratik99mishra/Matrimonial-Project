
<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter view example</title>
</head>
<body>
    <form method="post" action='<?php echo site_url("Controller/savingdata");?>'>
    	user_id:<input type="text" name="user_id"><br><br>
    	Name:<input type="text" name="name"><br><br>
    	<input type="submit" value="submit" name="save">
    </form>
</body>
</html>