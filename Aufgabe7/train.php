 <?php هب
 <form method="POST"  action=<?php echo htmlspecialchars( $_SERVER(PHP_self));   ?>>

<input type="text" name="vorname" value="<?php  echo $_post["vorname"] ?>" >



$teilnehmerinnen=pdg->all();
<?php
 foreach($teilnehmerinnen as $teilnehmerin){
     <div>
     <div class="karte">
   echo '  
                         <p> '.$teilnehmerin["vornamd"].'   </p>
                        <h4> '.$teilnehmerin["nachname"].' </h4>
      		 			<p>  '.$teilnehmerin["email"].'    </p>
      					<p>  '.$teilnehmerin["ipnr"].'     </p>
     
     </div>
     <div class="gli" >
                            <a  href="./aufgabe7.php?command=edit&id='.$teilnehmerin["id"].'"> edet   </a>>
                                      <a  href="./aufgabe7.php?command=delet&id='.$teilnehmerin["id"].'">Delete</a>

        <a href="">     </a>
     </div>     
        </div>  
     
    '
 }





?>