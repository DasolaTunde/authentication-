  <?php
if(isset($_POST['Submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

if($email=="tundedsl@gmail.com" && $password=="age")
{
echo "you have successfully logged in";
}
else
echo "you are an intruder";
}
?>
