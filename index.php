
<!doctype html>
<html lang="pl">

<head>
    
    
<?php
          

        $date_month = array(1 => 'miesiąc', 2 => 'styczeń', 3 => 'luty', 4 => 'marzec', 5 => 'kwiecień', 6 => 'maj', 7 => 'czerwiec', 8 => 'lipiec', 9 => 'sierpień', 10 => 'wrzesień', 11 => 'październik', 12 => 'listopad', 13 => 'grudzień');

    
        $date_day = array(1 => 'data wpłaty pensji na konto', 2 => 28, 3 => 28, 4 => 30, 5 => 27, 6 => 31, 7 => 29, 8 => 31, 9 => 31, 10 => 28, 11 => 31, 12 => 30, 13 => 31);

    
        $date_bonus = array(1 => 'data wpłaty premii na konto', 2 => 15, 3 => 15, 4 => 15, 5 => 18, 6 => 15, 7 => 15, 8 => 18, 9 => 15, 10 => 19, 11 => 15, 12 => 15, 13 => 31);

    
        $data_0 = array(1 => 'miesiąc', 2 => 'data wpłaty pensji na konto', 3 => 'data wpłaty premii na konto');
        $data_1 = array(1 => 'styczeń', 2 => 28, 3 => 15);
        $data_2 = array(1 => 'luty', 2 => 28, 3 => 15);
        $data_3 = array(1 => 'marzec', 2 => 30, 3 => 15);
        $data_4 = array(1 => 'kwiecień', 2 => 27, 3 => 18);
        $data_5 = array(1 => 'maj', 2 => 31, 3 => 15);
        $data_6 = array(1 => 'czerwiec', 2 => 29, 3 => 15);
        $data_7 = array(1 => 'lipiec', 2 => 31, 3 => 18);
        $data_8 = array(1 => 'sierpień', 2 => 31, 3 => 15);
        $data_9 = array(1 => 'wrzesień', 2 => 28, 3 => 19);
        $data_10 = array(1 => 'październik', 2 => 31, 3 => 15);
        $data_11 = array(1 => 'listopad', 2 => 30, 3 => 15);
        $data_12 = array(1 => 'grudzień', 2 => 31, 3 => 31);

        
        
        $before = '<form  method="post" action="">
          <input style="disaply:block;" type="submit" name="one" value="zapisz" class="button-1"/></form>';
    
        $after_1 = '<form  method="post" action="">
          <input style="disaply:block;" type="submit" name="one" value="uruchom zadanie" class="button-1"/></form>';
  
?>
       
      
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Programik</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="javascript.js"></script>
</head>

  

          
      
    
    

<body>

    <?php
    echo $after_1;
    
    if(isset($_POST['one']))
    {
        
        header('Location:load.php');           
        $file = fopen('plik.csv', 'w');
        fputcsv($file, $data_0);
        fputcsv($file, $data_1);
        fputcsv($file, $data_2);
        fputcsv($file, $data_3);
        fputcsv($file, $data_4);
        fputcsv($file, $data_5);
        fputcsv($file, $data_6);
        fputcsv($file, $data_7);
        fputcsv($file, $data_8);
        fputcsv($file, $data_9);
        fputcsv($file, $data_10);
        fputcsv($file, $data_11);
        fputcsv($file, $data_12);
        fclose($file);
            
    }
    
    
    
    
    ?>
      

</body>


</html>
