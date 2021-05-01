<?php
session_start();
error_reporting(E_ALL ^ E_WARNING); 
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
$array = json_decode(json_encode($result), true);

foreach ($array as $val){
    $nama = $val['name'];
}

echo "<pre>";
print_r($array);
echo "</pre>";

echo "Status    : ".$array['status'].'<br>';
echo "Message   : ".$array['message'].'<br>';
echo "Nama : ".$nama.'<br>';

if($result->status == "success" && ($result->data->nim_nik_unit == "3311901002" || $result->data->nim_nik_unit == "3311901018" || $result->data->nim_nik_unit == "3311901049" || $result->data->nim_nik_unit == "117175" || $result->data->nim_nik_unit == "3312001012")) {
	// session_start();
    //$_SESSION['username'] = $username; 
    $_SESSION['nama'] = $nama;
    $_SESSION['login'] = true;
    // $_SESSION['nim_nik_unit'] = $nim_nik_unit;
	// $_SESSION['jabatan'] = $jabatan;
    header('Location: Home.php');
}
else {
    $_SESSION['message'] = $array['message'];
    $_SESSION['status'] = $array['status'];
    //echo "<script> alert('password salah');</script>";
    header('Location: index.php');
    } 
?>
