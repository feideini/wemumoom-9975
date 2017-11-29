$mysqli = new mysqli($host,$username,$password,$db_name);

// Oh no! A connect_errno exists so the connection attempt failed!
if ($mysqli->connect_errno) {
// The connection failed. What do you want to do? 
// You could contact yourself (email?), log the error, show a nice page, etc.
// You do not want to reveal sensitive information

// Let's try this:
echo "Sorry, this website is experiencing problems.";

// Something you should not do on a public site, but this example will show you
// anyways, is print out MySQL error related information -- you might log this
// echo "Error: Failed to make a MySQL connection, here is why: \n";
// echo "Errno: " . $mysqli->connect_errno . "\n";
// echo "Error: " . $mysqli->connect_error . "\n";

// You might want to show them something nice, but we will simply exit
exit;
}

echo "The hostname is $host, the username is $username, the password is $password, the database name is $db_name, and the table name is $tbl_name.";


