<?php
  $a=$_POST['name'];
  $b=$_POST['email'];
  $c=$_POST['phone'];
  $d=$_POST['pass'];
  $e=$_POST['city'];
 $conn=oci_connect("system","Hari2000","localhost/ORCL");
   if(!$conn)
	{
	 $m=oci_error();
	 echo $m['message'],"\n";
	 exit;
	}

else     
{
	$query="insert into data values('$a','$b','$c','$d','$e')";

	$inserts=oci_parse($conn,$query);
	  oci_execute($inserts);
    echo "<script>location.href='login.html'</script>";
	
}

oci_close($conn);
?>