<?php
  if(isset($_POST['submit']))
  {
     $name = $_POST['name'];
     $Email = $_POST['Email'];
     $Subject = $_POST['Subject'];
     $Msg = $_POST['msg'];

     if(empty($name) || empty($Email) || empty($Subject) || empty($Msg))
     {
         header('location:contact.php?error');
     }
     else
     {
         $to = "admin@savemyass.tk";

         if(mail($to,$Subject,$Msg,$Email))
         {
             header("location:contact.php?success");
         }
     }
  }
  else
  {
      header("location:contact.php");
  }

?>


 
     
