
<!DOCTYPE html>
 <head>
 <head>
    <title>Imena korisnika</title>
 </head>
 <body>
    <?php
    
    $config = array(
    'database' => 'adresar',
    'username' => 'root',
    );
    
        $veza = new PDO("mysql:dbname=" . $config['database'], 
                                    $config['username']);
        $veza -> exec("set names utf8");
        $izraz = $veza->prepare("select * from Korisnik order by prezime asc");
        $izraz->execute();
        $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

        
 foreach($rezultati as $red):
 ?>
 <div class="row">
       <div class="klasaa">
            <h1><?php echo $red->prezime .  $red->ime ?></h1>
        </div>

		 
</div>
<?php endforeach; ?>
    
 </body>
</html>