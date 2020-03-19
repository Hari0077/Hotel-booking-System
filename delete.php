<?php
$a=$_POST['pname'];
$conn=oci_connect("system","Hari2000","localhost/ORCL");
if($conn)
{
	$query="delete from ownerdetails where HOUSENAME = '$a' ";
	  $delete=oci_parse($conn,$query);
	   oci_execute($delete);
	   echo "Order Placed Successfully";
	  
}
oci_close($conn);
?>