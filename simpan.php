<?php   
 $nama       = trim($_POST["nama"]);  
 $namafile = "$nama.txt";  
 $isi      = trim($_POST["isi"]);  
 $file = fopen($namafile,"w");  
 fwrite($file,$isi);  
 fclose($file);  
 echo "<h2>Hasil Penyimpanan Data</h2>";  
 echo "<hr>";  
 echo "Hasil : <a href='$namafile'> $namafile </a>";  
 ?>  