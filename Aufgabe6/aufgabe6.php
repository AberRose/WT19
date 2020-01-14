<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Aufgabe 6</title>
    <?php
        require_once "./mockdataarray.php";
    ?>
</head>
<body>
<div class="container">
    <h1>Teilnehmerinnen</h1>
    <?php
    if (isset($_GET['id'])) :
      //form

   $id=$_GET['id'];
   echo "
     <form action='./aufgabe6.php' methode='post'>
     <div class='form-group row'>
     <label for='vorname' class='col-2'>vorname</label>
     
      <input type='text' class='form-control col-10' name='vorname' value='".$members[$id][0]."'/>
      

     </div>
     <div class='form-group row'>
     <label for='nachname' class='col-2'>nachname</label>
     
      <input type='text' class='form-control col-10' name='nachname' value='".$members[$id][1]."'/>
      

     </div>
     <div class='form-group row'>
        <label for='email' class='col-2'>email</label>
     
      <input type='text' class='form-control col-10' name='email' value='".$members[$id][2]."'/>
      

     </div>
     <input type='hidden' name='id' value='".$id."'/>  
     <button type='submit'>Save changes </buttton>
      </form>
   ";
      /*type=hidden (Mit Formularfeldern vom Typ hidden kann man Werte für Variablen übergeben OHNE dass diese vom Benutzer eingeben werden müssen.)oder
        Notice that the hidden input field is not shown to the user, but the data is sent when the form is submitted*/
    /*  die print_r()-Funktion ist nur zur Kontrolle, ob das $members-Array
        befüllt ist. Kommentieren Sie diese Anweisung aus.
        Das Auslesen des $members-Array erfolgt dann unten in der Tabelle
    */
   // print_r($members);
    /*
        in diesem php-Tag könnten Sie stattdessen prüfen, ob das $_GET-Array
        oder das $_POST-Array befüllt ist
        falls $_GET-Array, dann Formular mit den passenden Werten
        falls $_POST-Array, dann das Array ändern und in die Datei schreiben
        In die Datei schreiben:
            $datei = fopen("./mockdataarray.php", "r+");
            $output = '<?php $members='.var_export($members, true).'; ?>';
            fwrite($datei, $output);
            fclose($datei);
    */
    else :
        //tablle
        if (isset ($_POST['id'])) :
        $id= $_POST['id'];
        $vorname= filter_var($_POST['vorname'], filter_SANIITIZE_STRING);  // datie änder nach edite
        $nachname= filter_var($_POST['nachname'], filter_SANITIZE_STRING);
        $email= filter_var($_POST['email'], filter_SANITIZE_STRING);

        $members[$id][0] =$vorname;  //geänderte datei in tbelle einfügen
        $members[$id][1] =$nachname;
        $members[$id][2] =$email;



        endif;



    ?>
    <table class="table table-striped table-responsive">
        <thead>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>E-Mail</th>
        <th>Edit</th>
        </thead>

        <!-- hier die einzelnen Zeilen einfügen
             jede Zeile ist ein Array aus dem 2-dimensionalen
             $members-Array
             -->
        <?php
        foreach ($members as $id => $member)  // id =0....49 für a href -- member ist name ,nachname emeil
        {
             echo "<tr>";
            echo "<td>".$member[0]."</td>>"; // alle key element in inner arrys mit key =0 ... resut=name
            echo "<td>".$member[1]."</td>>";//............................................result nachname
            echo "<td>".$member[2]."</td>>";//............................................result email
            echo "<td> <a href='./aufgabe6.php?id=".$id."'>edit</a> </td>";// wenn z.B id=3...rüft das array num 3 und gibt  die ganze zeile num 3 zurück

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    endif;
    ?>
</div>
</body>
</html>