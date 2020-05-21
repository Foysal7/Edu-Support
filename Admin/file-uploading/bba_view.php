<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    </tr>
    <tr>
    <td>Book Title</td>
    <td>Book Type</td>
    <td>Book Size(KB)</td>
    <td>Download</td>
    </tr>
    <?php
	$sql="SELECT * FROM bba_uploads";
	$result_set=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank"><button type="button" onclick="alert('Ready for Download.Please Click OK.')">Download File</button></a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>