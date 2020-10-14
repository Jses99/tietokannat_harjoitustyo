<a href="./harjoitus.html">Takaisin</a>
<h1>Albumit</h1>
<?php
 $host = 'localhost';
 $dbname = 't9sajo01';
 $username = 't9sajo01';
 $password = 'm1l02503';
 
 $con = mysqli_connect($host,$username,$password,$dbname);

 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM Albumi");
    echo "<table border='1'>
    <tr>
    <th>idAlbumi</th>
    <th>idEsittaja</th>
    <th>Albumi_nimi</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['idAlbumi'] . "</td>";
    echo "<td>" . $row['idEsittaja'] . "</td>";
     echo "<td>" . $row['Albumi_nimi'] . "</td>";
     echo "</tr>";
 }
 echo "</table>"; 
 mysqli_close($con);
?>
<p>
</body>