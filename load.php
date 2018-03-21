


<!doctype html>
 
<html>
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
        
        
             $after_2 = "<a href='index.php'><form  method='post' action=''>
          <input style='' type='submit' name='main_page' value='Powrót na  stronę główną' class='button-2'/></form></a>";
        
        ?>
        
        
        
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="css/load.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="javascript.js"></script>
        
	</head>

	<body class="small_fix" onload="load()">
       
        
        <div id="move">
            <div id="move_more">
                <div class="move_more_last"></div>
                
               
            </div>
        
        
        </div>
        
        
       <?php
            echo "<h1 style=''>Tabelka również została zapisana do pliku z rozszerzeniem .csv.<br>Życzę miłego dnia.</h1>";
        
       
        
        $count_one = count($date_month);
        echo '<div class="div_more_1"><table class="tab_more"><tr>';
        for($x_one=1; $x_one<=$count_one; $x_one++)
        {
            echo '<td>';
            echo $date_month[$x_one];
            echo '</td>';
        }
        echo '</tr><tr>';
        
        $count_two = count($date_day);
    
        for($y_two=1; $y_two<=$count_two; $y_two++)
        {
            echo '<td>';
            echo $date_day[$y_two];
            echo '</td>';
        }
        echo '</tr>';
        
        $count_three = count($date_bonus);
        
        for($z_three=1; $z_three<=$count_three; $z_three++)
        {
            echo '<td>';
            echo $date_bonus[$z_three];
            echo '</td>';
        }
        
        echo '</tr></table>';  
        echo $after_2;
    
        if(isset($_POST['main_page']))
        {
            header('Location:index.php');
        }
        
       
        
        
        ?>
        
        
	</body>
</html>