<?php 
try {
    
    # code...
    $bdd = new PDO('mysql:host=localhost;dbname=id19290719_blog','id19290719_testphp','<pe@7OVuf}yto%MH');

} catch (Exception $e) {
    die('une erreur a éte trouve:' . $e->getMessage());
}

?>