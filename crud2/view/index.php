<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link  rel="stylesheet" type="text/css" href="/crud2/view/style.css">

    <title>Crud 2.0</title>
  </head>
  <body id="body">
    <?php include_once "../model/db.php"; ?>
    <?php include_once "../controller/percorrerTabela.php"; ?>

    <div id="table">
      
    <table border="1">
          <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Status</td>
          </tr>
      </table>

    <tbody>
    <table border="1">
          <tr>
            <td><?php echo $row['id']?></td>
            <td>Nome</td>
            <td>Email</td>
            <td>Status</td>
          </tr>
      </table>
      
    </tbody>



    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
