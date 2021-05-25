
<?php
            $names= ["daffa", "fahrezi asmawi", "faeyza bin thalib"];


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
            </tr>
          </thead>
      </center>
           <?php foreach ($names as $name) :  ?>
      
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                    </tr>            
	                  <?php endforeach; ?>   
      
      
      
      </table>
</body>
</html>