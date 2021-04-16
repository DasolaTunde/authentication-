  <?php

if(isset($_POST['Submit']))
{


$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$middleName=$_POST['middleName'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];
$Confirmpassword=$_POST['Confirmpassword'];

$array_data=[
              'firstName'=>$firstName,
              'lastName'=>$lastName,
               'middleName'=>$middleName,
                  'dob'=>$dob,
                  'email'=>$email,
                      'password'=>$password,
                      'Confirmpassword'=>$Confirmpassword
];


echo $firstName .$lastName .$middleName .$dob .$email .$password .$Confirmpassword;

file_put_contents('files/'.$array_data['firstName'] . ".txt", $array_data);
//file_put_contents('files/'.$array_data['firstName'] .  ".json", json_encode($array_data));

echo file_get_contents('files/' .$array_data['firstName'] . ".txt", true);

echo 'Submitted';
}
?>
