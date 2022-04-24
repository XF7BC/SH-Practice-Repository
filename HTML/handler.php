<html>
    <body>
    <?php
$pid = $_GET["pid"];
$username = $_GET["username"];
$password = $_GET["password"]; 
$fname = $_GET["fname"]; 
$dob = $_GET["dob"]; 
$gender = $_GET["gender"]; 
$sog = $_GET["sog"]; 
$lga = $_GET["lga"]; 
$email = $_GET["email"]; 
$pnumber = $_GET["pnumber"]; 
$zcode = $_GET["zcode"]; 

echo " The client, ". $fname ."<br>" ;
echo "username,". $username . "<br>";
echo "password,". $password . "<br>";
echo "gender,". $gender . "<br>";
echo "E-mail,". $email . "<br>";
echo "Phone number,". $pnumber . "<br>";
echo "Zipcode,". $zcode. "<br>";
echo "Date Of Birth,". $dob. "<br>";
?>
    </body>
</html>