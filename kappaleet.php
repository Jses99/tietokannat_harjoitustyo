<a href="./harjoitus.html">Takaisin</a>
<h1>Kappaleet</h1>
<?php
 $host = 'localhost';
 $dbname = 't9sajo01';
 $username = 't9sajo01';
 $password = 'm1l02503';
 
 $con = mysqli_connect($host,$username,$password,$dbname);

 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM Kappale");
    echo "<table border='1'>
    <tr>
    <th>idKappale</th>
    <th>Kappale_nimi</th>
    <th>Kesto</th>
    <th>idEsittaja</th>
    <th>idAlbumi</th>
    
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
     echo "<td>" . $row['idKappale'] . "</td>";
     echo "<td>" . $row['Kappale_nimi'] . "</td>";
     echo "<td>" . $row['Kesto'] . "</td>";
     echo "<td>" . $row['idEsittaja'] . "</td>";
     echo "<td>" . $row['idAlbumi'] . "</td>";
    echo "</tr>";
 }
 echo "</table>"; 
 mysqli_close($con);
?>
<p>
</body>