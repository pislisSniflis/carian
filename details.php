<?php
// masuk javascript

$name = $_POST['fname'];
$rno = $_POST['id'];

$con = mysql_connect("localhost","root","admin");
$db= mysql_select_db("ajax_demo", $con);
$sql = "SELECT * from mac2013 where namakementerian='$name'  AND skimperkhidmatan= '$rno' 
order by gredjawatan";
$result = mysql_query($sql,$con);

echo "<table border='1'>
<tr>
<th>Jenis Agensi</th>
<th>Nama Bekalan</th>
<th>Gred</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['jenisagensi'] . "</td>";
  echo "<td>" . $row['namabekalan'] . "</td>";
  echo "<td>" . $row['gredjawatan'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>