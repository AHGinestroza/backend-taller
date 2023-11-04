<?php
    include 'connect.php';

    $query = mysqli_query($conection, "SELECT * FROM usuarios")
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="usu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript" src="scriptscript.js"></script>
	<section class="container">

  <h2>table filter</h2>
  <input
    type="search"
    class="form-control table-filter"
    placeholder="Search..."
  />

  <div class="table-responsive">
    <table role="table" class="table filtered-table">
      <thead role="rowgroup">
        <tr role="row">
          <th role="columnheader">id</th>
          <th role="columnheader">nombre</th>
          <th role="columnheader">apellido</th>
          <th role="columnheader">cedula</th>
          
        </tr>
      </thead>
      <tbody role="rowgroup">
        <tr role="row">
          <td role="cell">1</td>
          <td role="cell">Andres</td>
          <td role="cell">Pineda</td>
          <td role="cell">100000000</td>
          
        </tr>
        <tr role="row">
          <td role="cell">2</td>
          <td role="cell">Camilo</td>
          <td role="cell">Gutierrez</td>
          <td role="cell">200000000</td>
          
        </tr>
        <tr role="row">
          <td role="cell">3</td>
          <td role="cell">Jose</td>
          <td role="cell">Pardo</td>
          <td role="cell">300000000</td>
          
        </tr>
        <tr role="row">
          <td role="cell">4</td>
          <td role="cell">Nicolas</td>
          <td role="cell">Perez</td>
          <td role="cell">400000000</td>
          
        </tr>
        <tr role="row">
          <td role="cell">5</td>
          <td role="cell">Laura</td>
          <td role="cell">Espitia</td>
          <td role="cell">500000000</td>
         </tr> 
        
      </tbody>
    </table>
  </div>
</section>
<?php
            
            while ($mi_proyecto = mysqli_fetch_array($query)) {
                $id = $mi_proyecto['id'];
                $nombre = $mi_proyecto['nombre'];
                $apellido = $mi_proyecto['apellido'];
                $cedula = $mi_proyecto['cedula'];

                
            }

            ?>
     <script type="text/javascript" src="scriptscript.js"></script>
</body>
</html>