<?php
$a=$_POST['oname'];
$b=$_POST['hname'];
$c=$_POST['hno'];
$d=$_POST['city'];
$e=$_POST['hadd'];
$f=$_POST['hphone'];
$g=$_POST['hbhk'];
$h=$_POST['rent'];
 $conn=oci_connect("system","Hari2000","localhost/ORCL");
   if(!$conn)
	{
	 $m=oci_error();
	 echo $m['message'],"\n";
	 exit;
	}

else     
{
	$query="insert into ownerdetails values('$a','$b','$c','$d','$e','$f','$g','$h')";

	$inserts=oci_parse($conn,$query);
	  oci_execute($inserts);
    echo "<script>location.href='available.php'</script>";
	
}

oci_close($conn);
?>