<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

    <h2>Data Vaksin Covid19</h2>

<table id="customers">
  <thead>
    <th>totalsasaran</th>
    <th>sasaranvaksinsdmk</th>
    <th>sasaranvaksinlansia</th>
    <th>sasaranvaksinpetugaspublik</th>
    <th>vaksinasi1</th>
    <th>vaksinasi2</th>
    <th>lastUpdate</th>
  </thead>
  <tbody>
    <tr>
      <td><?= $array['totalsasaran'] ?></td>
      <td><?= $array['sasaranvaksinsdmk'] ?></td>
      <td><?= $array['sasaranvaksinlansia'] ?></td>
      <td><?= $array['sasaranvaksinpetugaspublik'] ?></td>
      <td><?= $array['vaksinasi1'] ?></td>
      <td><?= $array['vaksinasi2'] ?></td>
      <td><?= $array['lastUpdate'] ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>
