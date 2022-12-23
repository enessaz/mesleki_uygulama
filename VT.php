<?php
   // class VT{
   //    var $sunucu="localhost";
   //    var $user="root";
   //    var $password="";
   //    var $dbname="admin panel";
   //    var $baglanti;

   //    function __construct ()
   //    {
   //        try{ 
   //      $this->baglanti=new PDO("msql:host=".$this->sunucu."; dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);
   //       }catch(PDOException $error){
             
   //          echo $error-> getMessage();
   //          exit ();

   //       }
   //    }

   try {
      $baglan = new PDO("mysql:host=localhost; dbname=shopping; charset=UTF8","root","");
    
   } catch (PDOException $e) {
      echo $e->getMessage();
   }
        




   // }






?>
<?php
try {
   $db= new PDO("mysql:host=localhost; dbname=proje; charset=utf8", 'root', '');
   echo"Veritabanı baglantısı basarılı";
} catch (Exception $e) {
    echo $e->getMessage();
} 
?>