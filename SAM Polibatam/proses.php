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

if($result->status == "success" && ($result->data->nim_nik_unit == "3311901002" || $result->data->nim_nik_unit == "3311901018" || $result->data->nim_nik_unit == "3311901049" || $result->data->nim_nik_unit == "117175" || $result->data->nim_nik_unit == "3312001012" || $result->data->nim_nik_unit == "219299" || $result->data->nim_nik_unit == "207044" || $result->data->nim_nik_unit == "209083")) {
	foreach ($array as $val){
    		$nama = $val['name'];
	}

    	$_SESSION['nama'] = $nama;
    	$_SESSION['login'] = true;

    	header('Location: Home.php');
}


else {
    $_SESSION['message'] = $array['message'];
    $_SESSION['status'] = $array['status'];
    header('Location: index.php');
    }
?>
