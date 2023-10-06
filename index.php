<html lang = en>
<head>
<title>Nepal Election Phase 2 - 2074</title>
<link rel = "shortcut icon" type = "image/x-icon" href = "icion/election.jpg"/>
<link rel = "stylesheet" type = "text/css" href = "css/home_sheet01.css" />
<script type = "text/javascript" src = "script/jquery.js"></script>
<script type = "text/javascript" src = "script/elect_s.js"></script>
<script>

	
</script>
</head>
<body>
<div class = "map1"><center>
<table class = "head_e" ><tr><td><img src = "icion/headflag1.ico" id = "nep_flag"/></td><td><span id = "tit1" lang = "nep">स्थानीय निर्वाचन २०७४
</span><span id = "tit1" lang = "eng">Nepal Election 2074</span></td></tr>
</center>
<img src = "icion/election.jpg" id = "el1jpg" />
  </table>
</div>

<div class = "pro_search">
<span id = "slp">Search by Local unit</span><br><hr>
<form action =  "results.php" method = "get" class = "se_re">
<select name = "province" id = "res_prov" required  class = "com_in">
<option value = "">Province</option>
<option value = "1" >Province 1</option>
<option value = "2">Province 2</option>
<option value = "3">Province 3</option>
<option value = "4">Province 4</option>
<option value = "5">Province 5</option>
<option value = "5">Province 6</option>
<option value = "5">Province 7</option>
</select>
<br>
<select name = "district" id = "res_dis" required class = "com_in">
<option value = "">District</option>

</select><br>
<select name = "mun_vil" id = "vil_res_mun"  required  class = "com_in">
<option value = "">Muncipality or Village</option>
</select><br>
<button class = "ser_b"><table><tr><td><img src  = "icion/search.png" id = "ser_ch" /></td><td id = 'nig'>SEARCH</td></tr></table></button></form>
</div>

<div class = "tweet_hand">
<a class="twitter-timeline" data-width="375" data-height="450" href="https://twitter.com/nepalitimes">Tweets by nepalitimes</a> 
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div class = "wo_vod">
</div>

<div class = "map_side">
<div class = "over_view">
<!--<p id = "tit_txt">Overview</p><hr>-->
<div class = "may_dep"><span id = "mayo">Mayor/Chair</span>&nbsp &nbsp &nbsp <span id = "dep_may">Deputy Mayor/Chair</span></div>
<table class = "res_table" border="0">
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<?php
include "includes/np_map.php";
?>

</div> 

<div class  = "sub_anmetro">
<div class = "metro">
<p id = "m_name">Metropolitian Cities</p><hr>

<div id = "biratnagar1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Biratnagar</span><a href = "result.php?location=birtanagar" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "birgunj1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Birgunj</span><a href = "result.php?location=birgunj" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

</div>





<br>
<div class = "sub_metro">
<p id = "m_name">Sub-Metropolitian Cities</p><hr>

<div id = "ghorahi1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Ghorahi</span><a href = "result.php?location=ghorahi" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "janakpur1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Janakpur</span><a href = "result.php?location=janakpur" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "hetauda1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Hetauda</span><a href = "result.php?location=hetauda" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "dhangadhi1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Dhangadhi</span><a href = "result.php?location=dhangadhi" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div><div id = "tulsipur1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Tulsipur</span><a href = "result.php?location=tulsipur" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "itahari1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Itahari</span><a href = "result.php?location=itahari" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div><div id = "nepalgunj1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Nepalgunj</span><a href = "result.php?location=nepalgunj" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "butwal1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Butwal</span><a href = "result.php?location=butwal" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div><div id = "dharan1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Dharan</span><a href = "result.php?location=dharan" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "kalayia1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Kalayia</span><a href = "result.php?location=kalaiya" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

<div id = "simara1" class = "metro_box">
<p id = "m_t1"><span id = "m_title">Jeetpur Simara</span><a href = "result.php?location=simara" class = "link_des">Details</a></p>
<div class = "may_dep"><span id = "mayo1">Mayor</span>&nbsp &nbsp &nbsp <span id = "dep_may1">Deputy Mayor</span></div>
<table class = "res_table1" border = '0'>
<tr><td><img src = "icion/party/uml.jpg" class = "party_flag" /></td><td>UML</td><td>0</td></tr>
<tr><td><img src = "icion/party/nc.jpeg" class = "party_flag" /></td><td>NC</td><td>0</td></tr>
<tr><td><img src = "icion/party/mc.jpg" class = "party_flag" /></td><td>Moaist Centre</td><td>0</td></tr>
<tr><td><img src = "icion/party/nsn.jpg" class = "party_flag" /></td><td>Naya Shakti</td><td>0</td></tr>
<tr><td><img src = "icion/party/rjp.jpg" class = "party_flag" /></td><td>Madhesi Morcha</td><td>0</td></tr>
<tr><td><img src = "icion/party/other.png" class = "party_flag" /></td><td>Others</td><td>0</td></tr>
</table>
</div>

</div>
</div>
<div class = "footer">
<a href = "contact.php" class = "com_link">Contact</a><a href = "contact.php" class = "com_link">About</a><a href = "http://www.corrigedum.com/" id = "copy_spwn" target = "_blank">&copy Meisternator Systems Pvt. Ltd.</a>
</div>
</body>
</html>