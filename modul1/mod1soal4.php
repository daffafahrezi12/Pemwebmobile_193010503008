
<?php
            $names= ["daffa", "fahrezi asmawi", "faeyza bin thalib"];
            function konsonan($kalimat) {
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = ($a+$i+$u+$e+$o);

            return $count;
          }

          function vokal($kalimat) {
            $jumlah = strlen($kalimat);
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = $jumlah - ($a+$i+$u+$e+$o);

            return $count;
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul1_193010503008</title>
</head>
<body>
<center>
      <table border="1" cellpadding="20" cellspacing="2">
          <thead>
            <tr>
               <th>Nama</th>
              <th>Konsonan</th>
              <th>Vokal</th>
            </tr>
          </thead>
          </center>
           <?php foreach ($names as $name) :  ?>
      
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?= vokal(  $name);  ?></td>
                        <td><?= konsonan( $name);  ?></td>
                    </tr>            
	                  <?php endforeach; ?>   
      
      
      
      </table>
</body>
</html>