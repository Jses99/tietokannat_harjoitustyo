<a href="./harjoitus.html">Takaisin</a>
<h1>Esittajat, albumit ja kappaleet</h1>
<?php
 $host = 'localhost';
 $dbname = 't9sajo01';
 $username = 't9sajo01';
 $password = 'm1l02503';
 
 $con = mysqli_connect($host,$username,$password,$dbname);

 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT Esittaja.Esittaja_nimi, Albumi.Albumi_nimi, Kappale.Kappale_nimi FROM Kappale
 JOIN Esittaja ON Kappale.idEsittaja = Esittaja.idEsittaja JOIN Albumi ON Kappale.idAlbumi = Albumi.idAlbumi");
    echo "<table border='1'>
    <tr>
    <th>Esittaja_nimi</th>
    <th>Albumi_nimi</th>
    <th>Kappale_nimi</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
     echo "<td>" . $row['Esittaja_nimi'] . "</td>";
     echo "<td>" . $row['Albumi_nimi'] . "</td>";
     echo "<td>" . $row['Kappale_nimi'] . "</td>";
    echo "</tr>";
 }
 echo "</table>"; 
 mysqli_close($con);
?>
<p>
</body>