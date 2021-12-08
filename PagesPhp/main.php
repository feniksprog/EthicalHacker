<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHomeWork </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="logo/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Изучаем html, php... </p>
                    <p> Реализую динамически подгружаемые данные в страницу </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        echo 'Немного математики: '; 
						$a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo 'число ', $c, $d;
                    ?>   <br>                          
                     <?php
                        echo 'Время загрузки страницы:', ' ', $realtime;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
					Это просто текст и ничего больше. Учись на «пять», не ведай скуки, Примером будь ученикам! 
					Тебя успехи ждут, я знаю, И ты увидишь свой прогресс! Тебе удерживать желаю К наукам вечный интерес! 
					Желаю не стоять на месте, а смело двигаться вперёд — к новым знаниям, к новым открытиям, к новым мечтам.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
