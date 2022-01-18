<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
<style>  
table {  
  font-family: arial, sans-serif;  
  border-collapse: collapse;  
  <!-- width: 50%; -->
}  
  
td, th {  
  border: 2px solid #111111;  
  text-align: left;  
  padding: 8px;  
}  
tr:nth-child(even) {  
  background-color: #D5D8DC;  
}  
</style>


 
</head>
<body>
<div class="container-sm">
<center>
<h2>ADSBexchange.com<br>Custom Receiver Software<br>Main Menu</h2>
<br />
<table>
<tr><td>
<?php
$receivername=file_get_contents("/tmp/webconfig/name");
$location = file_get_contents("/tmp/webconfig/location");
//echo "Receiver Name: " . $receivername;
echo "Receiver Name:<center><pre>$receivername</pre></center>";
echo "Approximate Configured Location:<center><pre>$location</pre></center>";
?>
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/wifi"/>Configure WiFi<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/config"/>Configure Receiver/Location<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/sdr-assign"/>Assign SDRs to services</a><br>(for multiple SDR Installs)
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/auth"/>Authentication and System Tools<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/info"/>System Info<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/tar1090"/>1090 map (default)<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/978"/>978 map (if enabled, US only)<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/tar1090/?pTracks"/>8 hours of tracks<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/graphs1090"/>graphs1090<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="/" onclick="javascript:event.target.port=3000"/>Grafana Dashboard<a/>
<br /><br />
</td></tr>
<tr><td>
<a class="btn btn-primary" href="https://www.adsbexchange.com/myip/"/>ADSBexchange Status (/myip)<a/>


</td></tr>
</table>

</center>
</div>
</body>
</html>
