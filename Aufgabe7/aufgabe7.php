<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Formular</title>
   <link rel="stylesheet" href="bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
   <?php

   /* in der folgenden Datei steht mein Passwort für den MySQl-Server
    *  $password = 'meinPasswort';
    *
    */
   //	require_once '../nichtinzip/passwd.inc.php';
   	require_once('DB.php');

   	/* hier wird ein neues Objekt von DB erzeugt
   	 * erster Parameter ist der Name Ihrer Datenbank (auf dem Studi-Server _IhreMatrNr__mockupdatadb
   	 * , lokal wahrscheinlich nur mockupdatadb
   	 * zweiter Parameter ist der MySql-Server (Studi-Server db.f4.htw-berlin.de:3306
   	 * , lokal wahrscheinlich localhost
   	 * dritter Parameter ist Ihr Nutzername (vom MySQL-Server) (Studi-Server Ihr FB4-Account
   	 * , lokal wahrscheinlich root
   	 * vierter Parameter ist Ihr Passwort (ich habe mein Passwort als Wert der Variablen $password
   	 * in der Datei passwd.inc.pwd abgelegt (siehe oben)
   	 */
   	$dbh = new DB('_s0569642__mockupdatadb', 'db.f4.htw-berlin.de:3306', 's0569642', 'password');

   	/* die folgende Funktion ist nur eine Hilfsfunktion zum Debuggen
   	 * auf der Konsole in den Entwicklertools Ihres Browsers erscheint ...
   	 * der als String übergebene Text
   	 * die Funktion kann auch gelöscht werden
   	 */
   function debug_to_console( $data ) {

       if ( is_array( $data ) )
           $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
       else
           $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

       echo $output;
   }
   ?>
      </head>
<body>
	<?php
	   $form_header = 'Teilnehmerin hinzufügen';
	
	   if ($_GET) {
            /*
             * es empfiehlt sich, an Ihre URL bei Absenden des Formulars ein "command" als Schlüssel anzuhängen,
             * welcher die Werte "edit" oder "delete" annehmen kann, je nachdem, ob Sie einen Datensatz
             * ändern oder löschen möchten
             * An den einzelnen "Karteikarten" erscheinen edit- und delete-"Buttons" - s.u.
             */
           $command = $_GET['command']; //auslesen des commands
           $id = $_GET['id'];
              if ($command=='delet')
              { // wenn auf delet clicken 8  command hänget an url für delet mit id auch
                 $dbh->delete($id); // delete() ist ein methode in DB-php ..löscht die daten
              }                     // <a class="btn btn-default btn-sm" href="./aufgabe7.php?command=delet&id='.$teilnehmerin["id"].'">delete</a>
          
              if ($command=='edit'){
                 $teilnehmerin=$dbh->get($id);
                 print_r($teilnehmerin);
                 
              }


	   }
	
	   elseif ($_POST) {
            /*
             * hier werden die Daten;die über das Formular gesendeten , ausgewertet
             * 2 Fälle: wird die id mitgesendet, dienen die übersendeten Daten der Änderung des
             * entsprechenden Datensatzes (mit id können daten ändern )
             * wird die id nicht mitgeliefert, dienen die Daten dem Einfügen eines neuen Datensatzes
             * in die Datenbank ( ohne id können daten einfügen )
             */

       // die folgenden drei Zeilen sind zum Testen --> können Sie jeweils auskommentieren, um zu testen
	   // $dbh->edit(array("Jan", "Justermann", "jan@justermann", "6789", 51));
	   // $dbh->add(array("Max", "Mustermann", "max@mustermann.de", "1234"));
        //$dbh->delete(3);


    $vorname  =filter_var($_POST['vorname'] , FILTER_SANITIZE_STRING);
    $nachname =filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
    $email    =filter_var($_POST['email']   , FILTER_SANITIZE_STRING);
    $ipnr     =filter_var($_POST['ipnr']    , FILTER_SANITIZE_STRING);

    if(isset($_POST['id']))
      {
       $id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
       $dbh->edit(array($vorname,$nachname,$email,$ipnr,$id));
      }

      else
        {
       $dbh->add(array($vorname,$nachname,$email,$ipnr));
        }
       }
      // $teilnehmerinnen bringt alle info (name nachname email....) von db und dann macht fetchall()..wie array behandelt
      $teilnehmerinnen = $dbh->all();
	?>


   <div class="container">
      <div class="panel panel-default">

         <div class="panel-heading">
            <h3 class="panel-title"><?= $form_header ?></h3>
         </div>

         <div class="panel-body">

            <?php if (isset($message)) : ?>
               <div class="alert alert-success">
                  <?= $message ?>
               </div>
            <?php endif; ?>

            <?php if (isset($command) && $command == 'edit') : ?>  <!--wenn es auf edit geclickt wurde   -->

            <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
             <!--
                  dies ist das Formular für die Änderung eines Datensatzes
                  es beinhaltet 4 einzeilige Textfelder: für Vornmae, Name, E-Mail-Adresse und IP-Nummer
                  beachten Sie: das Formular soll auch die id weitergeben (hidden-Textfeld)
                  beachten Sie: die Textfelder sind mit dem Datensatz, der editiert werden soll, vorausgefüllt
             -->
                <input type="text" class="form-control" name="vorname"  value="<?php echo $teilnehmerin['vorname']; ?>"/>
                <input type="text" class="form-control" name="nachname" value="<?php echo $teilnehmerin['nachname'];?>"/>
                <input type="text" class="form-control" name="email"    value="<?php echo $teilnehmerin['email'];   ?>"/>
                <input type="text" class="form-control" name="ipnr"     value="<?php echo $teilnehmerin['ipnr'];    ?> "/>
                <input type="text"

                <input type='hidden' class="form-control" name='id' value="<?php echo $teilnehmerin['id'];?>" />
                <button type="submit" class="btn btn-block btn-primary">Aktualisiern</button>
            </form>

            <?php else : ?>
           	<div class="row">
           		<div class="col-xs-12">
            		<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <!--
                             dies ist das Formular für das Anlegen eines neuen Datensatzes
                             es beinhaltet 4 einzeilige Textfelder: für Vornmae, Name, E-Mail-Adresse und IP-Nummer
                             keine id - diese wird von der Datenbank selbständig erzeugt (auto inkrement)

                        -->

                        <input type="text" class="form-control" name="vorname"  placeholder="Vorname"/>
                        <input type="text" class="form-control" name="nachname" placeholder="Nachname"/>
                        <input type="text" class="form-control" name="email"    placeholder="Email"/>
                        <input type="text" class="form-control" name="ipnr"     placeholder="IP-Nr"/>

                        <button type="submit" class="btn btn-block btn-primary">anlegen</button>

                    </form>
               	 </div>
             </div>
         <?php endif; ?>

         </div> <!-- / .panel-body -->
      </div> <!-- / .panel -->

      <div class="row">

         <?php
            if (!sizeof($teilnehmerinnen)) {
               echo '<div class="alert alert-info">Es sind keine Studentinnen angemeldet!</div>';
            }
            else {
               foreach ($teilnehmerinnen as $teilnehmerin)
               // $teilnehmerin = $dbh->get(6);
               {
                  echo
                  '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                     <div class="thumbnail">
                        <p>  '.$teilnehmerin["vorname"].'  </p>
      					<h4> '.$teilnehmerin["nachname"].' </h4>
      		 			<p>  '.$teilnehmerin["email"].'    </p>
      					<p>  '.$teilnehmerin["ipnr"].'     </p>
                        <div class="buttons-edit">
                           <a class="btn btn-default btn-sm" href="./aufgabe7.php?command=edit&id='.$teilnehmerin["id"].'">Edit</a>   
                           <a class="btn btn-default btn-sm" href="./aufgabe7.php?command=delet&id='.$teilnehmerin["id"].'">Delete</a>
                        </div>
                     </div>
                  </div>';
               }
            }
         ?>

      </div> <!-- / list-group -->
   </div> <!-- / .container -->
</body>
</html>
