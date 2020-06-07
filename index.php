<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyimpanan Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>APLIKASI PENYIMPANAN DATA PADA FILE TXT</h2> 
    <div>
        <form action="simpan.php" method="post">
        <table width="100%" border="0" align="center">
            <tr>
                <td>NAMA FILE</td>  
                <td><input type="text" name="nama" required></td>  
            </tr>  
            <tr>  
                <td valign="top">ISI TULISAN</td>  
                <td ><textarea name="isi" cols="50" rows="10" required></textarea></td>  
            </tr>
            <tr>  
                <td></td>
                <td align="center"><input type="submit" value="SAVE"></td>  
            </tr>  
        </table>
        </form>
    </div>
</body>
</html>
