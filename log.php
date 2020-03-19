
<?php
$a=$_POST['email'];
$b=$_POST['password'];
 $conn=oci_connect("system","Hari2000","localhost/ORCL");
   $dbsearch="SELECT * FROM data   where Email='$a' and password='$b'";
    $stid = oci_parse($conn, $dbsearch);
    oci_execute($stid);
    if($row = oci_fetch_array($stid, OCI_NUM))
    {
        if($_POST['email'] == $a && $_POST['password'] == $b)
    {
        $_SESSION['email']=$a;
        echo "<script>location.href='welcome.html'</script>";
    }   
    }
    else
    {
        echo "<script>alert('username or password is incorrect!')</script>";
        echo "<script>location.href='1.html'</script>";
        echo "s";
    }
?>
</body>
</html>