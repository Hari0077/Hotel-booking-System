<html>
<?php
$conn=oci_connect("system","Hari2000","localhost/ORCL");
if($conn)
{
    $dbsearch="SELECT * FROM ownerdetails";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    ?>
<font color="yellow"><table border="5" bgcolor="red" align="center">
<tr>
<th>OWNERNAME</th><th>HOUSENAME</th><th>HOUSENO</th><th>CITY</th><th>HOUSEADDRESS</th><th>PHONENO</th>
<th>TYPE</th><th>RENT</th></tr>

<?php

    while ($row = oci_fetch_array($stid)) {
        ?>
    <tr><td><?php echo $row[0]; ?> </td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td> 
    </tr>

   <?php
}
?>
</table>
</font>
<?php

}

?>
<center>
<button type="submit"><a href="delete.html"><b><font size="4">Placeorder</b></font></button></a></b></a></button></center>
    </html>