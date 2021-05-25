<html>
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
<table>
                    
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       require 'koneksi.php';
                                          $no = 0;
                                          $view = $koneksi -> query("SELECT * FROM `t_pengunjung` ");
                                          while($row=$view->fetch_array()){
                                             $no++;

                                            ?> 
                  <tr>
                 <td><?php echo $no ?></td>
                                  <td><?php echo $row['id']; ?></td>  
                                  <td><?php echo $row['nama']; ?></td>  
                                  <td><?php echo $row['jk']; ?></td>              
                                  <td><?php echo $row['jenis']; ?></td>                                  
                      
</tr>						
                                          <?php }?>
                     </tbody>
                  </table>
</body>
</html>