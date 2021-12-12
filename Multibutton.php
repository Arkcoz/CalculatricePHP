
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="text-align:center;">
      
      <p>Choissisez un bouton</p>
         
       
         
       <?php
           if(array_key_exists('button', $_POST)) {
               if($_POST['button']=='Button1'){
                   button1();
               }
               if($_POST['button']=='Button2'){
                   button2();
               }
               if($_POST['button']=='Button3'){
                   button3();
               }
           }
           
           function button1() {
               echo "This is Button1 that is selected";
           }

           function button2() {
               echo "This is Button2 that is selected";
           }
           function button3() {
               echo "This is Button3 that is selected";
           }
        
       ?>
     
       <form method="post">
           <input type="submit" name="button" class="button" value="Button1"/>
           <input type="submit" name="button" class="button" value="Button2"/>
           <input type="submit" name="button" class="button" value="Button3"/>
       </form>

</body>
</html>
