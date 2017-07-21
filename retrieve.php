<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("formdb", $con);

$result = mysql_query("SELECT * FROM MARRIAGES");

echo "<table border='1'>
<tr>
<th>Sno</th>
<th>State</th>
<th>District</th>
<th>Mandal</th>
<th>City</th>
<th>Day</th>
<th>Month</th>
<th>Year</th>
<th>Name</th>
<th>Phone Number</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['sno'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['district'] . "</td>";
echo "<td>" . $row['mandal'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['day'] . "</td>";
echo "<td>" . $row['month'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['ph_num'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>