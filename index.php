        <!--===============inclusao doos documentos===============-->

     <?php include("head.php");
foreach ($_REQUEST as $___opt => $___val) {
    $$___opt = $___val;
  }
  if(empty($esc)) {
  include("login.php");
  }
  elseif(substr($esc, 0, 4)=='http' or substr($esc,0, 1)=="/" or substr($esc, 0, 1)==".") 
  {
  echo '<br><font face=arial size=11px><br><b>A página não existe.</b><br>Por favor selecione uma página a partir do Menu Principal.</font>'; 
  }
  else {
  include("$esc.php");
  }
  
 ?>
 
       
     

     