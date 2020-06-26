<link href="css/stylesheet2.css" rel="stylesheet" type="text/css">

<?php
 
if(isset($_POST['email'])) {
 
     
	 
	 
	 
 
    //  giuseppe@nauornever.com | info@spagouomo.it
 
    $email_to = "giuseppe@nauornever.com";
	
	
	
	
	
	
 
    $email_subject = "email inviata da: SPAGO UOMO | WEB SITE ";
 
     function died($error) {
         echo "<div class='box29'> <p><br><img src='img/img_spago/logo_footer.fw.png' width='800' height='54' alt=''/><br>
<h2><br>Siamo spiacenti , abbiamo riscontrato degli errori nel messaggio inviato. ";
 
        echo "Questi errori vengono visualizzati in basso.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Si prega di tornare indietro e correggere questi errori
.<br /><br />";
  header( "refresh:6;url=index.html" );
  echo "</div>";
        die();
 
 
   
    }
 
   
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
				
		!isset($_POST['messaggio'])) {
 
        died('Siamo spiacenti , ma sembra che vi sia un problema con il modulo che ha inviato.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; 
 
    $last_name = $_POST['last_name']; 
 
    $email_from = $_POST['email']; 

    $messaggio_from = $_POST['messaggio']; 
     
 
 
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= "L'indirizzo email che ha inserito non sembra essere valido.<br />";
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'Il nome inserito non sembra essere valido.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'Il cognome inserito non sembra essere valido .
<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Dettagli contatto:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
    $email_message .= "Nome: ".clean_string($first_name)."\n";
 
    $email_message .= "Cognome: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    
	$email_message .= "Messaggio: ".clean_string($messaggio_from)."\n";


$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<div class="box29"> <p><br><img src="img/img_spago/logo_footer.fw.png" width="800" height="54" alt=""/><br>
<h2><br>Grazie per averci contattato.<br> Vi risponderemo al piu' presto.</h2> </p> <br>
 
 
<?php
 
}


  header( "refresh:4;url=index.html" );
  echo "</div>";


?>
</p>
</body>
</html>