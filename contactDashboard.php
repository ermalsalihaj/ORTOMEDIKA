<?php

require_once ('./modelicontact.php');

?>
<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #82AAE3;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>


<div>
    <table class="content-table">
        <thead>
            <tr>
            
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Emaili</th>
              <th>Nrtelefonit</th>
              <th>Mesazhi</th>
              <th>EDIT</th>
              <th>DELETE</th>
              
            </tr>
        </thead>

        <tbody>
<?php
$kon = new kontakti();
$allkontakti = $kon->readData();
foreach($allkontakti as $kontakti): ?>
    <tr>
              
              <td><?php echo $kontakti['emri'];?></td>
              <td><?php echo $kontakti['mbiemri'];?></td>
              <td><?php echo $kontakti['emaili'];?></td>
              <td><?php echo $kontakti['nrtelefonit'];?></td>
              <td><?php echo $kontakti['mesazhi'];?></td>
            
              <td><a href="edit-kontakti.php?id=<?php echo $kontakti['id'];?>">EDIT</a></td>
              <td><a href="delete-kontakti.php?id=<?php echo $kontakti['id'];?>">DELETE</a></td>
            </tr>
            <?php endforeach; ?>
             </tbody>
    </table>
</div>