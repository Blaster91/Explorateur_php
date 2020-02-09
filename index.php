<?php
        $d = dir(".");
        echo "Pointeur: ".$d->handle."<br>\n";
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Explorateur php </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <!-- header -->
    <header>
      <h1>Explorateur de fichiers   <img class="logo_php" src="img/php.png" alt="logo php"></h1>

    </header><!-- header -->

<div class="test">

</div>
    <!-- table -->
    <section id="table_explorer">
      <h2 class="mb-3"><?php echo "path: ".$d->path."<br>"; ?></h2>
<div class="content_container_table">
  <div class="table_move">
    <a class="link_table_move link_table_move_left" href="#"><i class="fas fa-arrow-left"></i> Retour </a>
    <div class="space_bar">
    </div>
    <a class="link_table_move link_table_move_right" href="#">Précédent<i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="container_table">
    <table class="table_explorer">
      <thead>
        <?php
        while($entry = $d->read()) {
            echo "<tr>
              <td>" . $entry . '
              </td>
              <td>
                <a href="#">supprimé</a>
              </td>
            </tr>';
        }
        $d->close();
         ?>





      </tbody>
    </table>
  </div>
</div>
<div class="popup">
</div>
    </section><!-- table -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6fee70888d.js"></script>
  </body>
</html>
