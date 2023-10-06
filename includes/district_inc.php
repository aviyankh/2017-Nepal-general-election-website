<!--<select class = "com_in" id = "prov1" name = "province_one">-->
<?php
if(isset($_POST["province"]) && !empty($_POST["province"])){
$province = $_POST['province'];	
echo "<option value = ''>District</option>";
switch ($province){
	case "Province 1":
	echo "
    <option>Bhojpur</option>
    <option>Dhankuta</option>
    <option>Ilam</option>
    <option>Jhapa</option>
    <option>Khotang</option>
    <option>Morang</option>
    <option>Okhaldhunga</option>
    <option>Panchthar</option>
    <option>Sankhuwasabha</option>
    <option>Solukhumbu</option>
    <option>Sunsari</option>
    <option>Taplejung</option>
    <option>Terhathum</option>
    <option>Udayapur</option>";
   break;
   case "Province 2":
   echo "
<option>Bara </option>
<option>Dhanusha </option>
<option>Mahottari </option>
<option>Parsa </option>
<option>Rautahat </option>
<option>Saptari </option>
<option>Sarlahi </option>
<option>Siraha </option>";
   break;
   case "Province 3":
   echo "<option>Bhaktapur</option>
<option>Chitwan</option>
<option>Dhading</option>
<option>Dolakha</option>
<option>Kathmandu</option>
<option>Kavrepalanchok</option>
<option>Lalitpur</option>
<option>Makwanpur</option>
<option>Nuwakot</option>
<option>Ramechhap</option>
<option>Rasuwa</option>
<option>Sindhuli</option>
<option>Sindhupalchok</option>";
   break;
   case "Province 4":
   echo "<option>Baglung</option>
<option>Gorkha</option>
<option>Kaski</option>
<option>Lamjung</option>
<option>Manang</option>
<option>Mustang</option>
<option>Myagdi</option>
<option>Nawalparasi</option>
<option>Parvat</option>
<option>Syangja</option>
<option>Tanahun</option>";
   break;
   case "Province 5":
   echo "<option>Arghakhanchi</option>
<option>Banke</option>
<option>Bardiya</option>
<option>Dang</option>
<option>Gulmi</option>
<option>Kapilvastu</option>
<option>Nawalparasi</option> 
<option>Palpa</option>
<option>Pyuthan</option>
<option>Rolpa</option>
<option>Rukum</option>
<option>Rupandehi</option>";
   break;
   case "Province 6":
   echo "
<option>Dailekh</option>
<option>Dolpa</option>
<option>Humla</option>
<option>Jajarkot</option>
<option>Jumla</option>
<option>Kalikot</option>
<option>Mugu</option>
<option>Rukum</option>
<option>Salyan</option>
<option>Surkhet</option>";
   break;
   case "Province 7":
   echo "
<option>Achham</option>
<option>Baitadi</option>
<option>Bajhang</option>
<option>Bajura</option>
<option>Dadeldhura</option>
<option>Darchula</option>
<option>Doti</option>
<option>Kailali</option>
<option>Kanchanpur</option>";
   break;
 }
}
if(isset($_POST["district"]) && !empty($_POST["district"])){
   echo "
<option>Achham</option>
<option>Baitadi</option>
<option>Bajhang</option>
<option>Bajura</option>
<option>Dadeldhura</option>
<option>Darchula</option>
<option>Doti</option>
<option>Kailali</option>
<option>Kanchanpur</option>";
}
?>







