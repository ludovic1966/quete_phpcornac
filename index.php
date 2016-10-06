<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>

    <?php
      include 'header.php';
    ?>


    <div>
      <h1>Dans la peau d un Cornac</h1>
      <table>
        <tr>
          <td>Heure</td>
          <td>Titre_spectacle</td>
          <td>Artiste</td>
          <td>Image_url</td>
        </tr>
        <?php
          include 'tableau.php';


          foreach ($spectacles as $spectacle) {
            echo "<tr>";

            foreach ($spectacle as $key => $valeur) {
              echo  "<td>".$valeur."</td>" ;
            }
            echo  "<br>" ;
            echo "<tr>";
          }

        ?>

      </table>
    </div>


      <?php
      include 'footer.php';
      ?>

  </body>

</html>



