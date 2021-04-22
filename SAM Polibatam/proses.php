<?php

$data = array(
    "username"      => $_POST['username'],
    "password"      => $_POST['password'],
    "token"         => "imsLKICAxlFhEOkbxeO8bbQu2LE44zVf"
);
$ch = curl_init('http://sid.polibatam.ac.id/apilogin/web/api/auth/login');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = json_decode(curl_exec($ch));

echo "<pre>";
print_r($result);
echo "</pre>";

echo "Status    : ".$result->status.'<br>';
echo "Message   : ".$result->message.'<br>';

if($result->status == "success") {
	// session_start();
    $_SESSION['username'] = $username;
    // $_SESSION['name'] = $name;
    // $_SESSION['nim_nik_unit'] = $nim_nik_unit;
	// $_SESSION['jabatan'] = $jabatan;

    header('location: Home.php');

}
?>