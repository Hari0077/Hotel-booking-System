<html>
<head><title>Oracle demo</title></head>
<body>
    <?php 
    $conn=oci_connect("system","Hari2000","localhost/ORCL");
    If (!$conn)
        echo 'Failed to connect to Oracle';
    else
        echo 'Succesfully connected with Oracle DB';
 
oci_close($conn);
?>
 
</body>
</html>