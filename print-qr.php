<?php
    include('koneksi.php');

    if (isset($_GET['print'])) {
		$id = $_GET['print'];
		$query = "SELECT * FROM serial_number WHERE id = $id";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
        $serial = $row['serial_number'];
	}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center;">
        <h4>Serial Number and QR Code:</h4>   
        <div id="qrcode"></div>
    </div>

    <script src="vendors\scripts\jquery.min.js"></script>
    <script src="vendors\scripts\jquery-qrcode-0.18.0.js"></script>
    <script>
		<?php echo "let text = '$serial';"; ?>
		$(document).ready(function() {
			$('#qrcode').qrcode({
                render: 'image',
                text: text,
				quiet: 4,
                mSize: 0.07,
                mPosX: 0.5,
                mPosY: 0.95,
                mode: 2,
                label: text,
                fontname: 'sans',
                fontcolor: '#000',
            });
		});
	</script>
</body>
</html>