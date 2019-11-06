<!doctype html>
<html lang="en">
  <head>
    <title>The English Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     
    <?php include_once('fetch.php'); ?>
    


      
    <header>                 
     <div class="container mt-5">
       <div class="clearfix">
           <h1 class="display-4 float-left">The English Quiz</h1>
           
           <p class="h3 text-primary float-right mt-4">Иванов Василий</p>
       </div>
      <h3 class="ml-5 mt-3">Question 1 of 1</h3>
     </div>
    </header>
                                           
     <div class="container mt-5">
         <div class="row justify-content-md-center mb-3">
         <p class="h5"> Расположите слова так чтобы получился правильный перевод фразы:</p>
          </div>            
         <div class="row justify-content-md-center">

            <div id="left_pan" class="col-2 bg-secondary border p-3">
              

              <?php


              foreach ($array_sorted as $ary) {
                  echo "<button class='btn mb-3 mr-2 btn-dark word'>$ary</button>";
                  
                  
              }
              
              ?>

              <!--
              <button class="btn mb-3 mr-2 btn-dark word">The</button>
              <button class="btn mb-3 mr-2 btn-dark word">quick</button>
              <button class="btn mb-3 mr-2 btn-dark word">brown</button>
              <button class="btn mb-3 mr-2 btn-dark word">fox</button>
              <button class="btn mb-3 mr-2 btn-dark word">jumps</button>
              <button class="btn mb-3 mr-2 btn-dark word">over</button>
              <button class="btn mb-3 mr-2 btn-dark word">the</button>
              <button class="btn mb-3 mr-2 btn-dark word">lazy</button>
              <button class="btn mb-3 mr-2 btn-dark word">dog</button>
              -->
            </div>
            <div class="col-6 bg-light border">
              
             <div class="row p-3">               
              <!--<p class="lead">Резвая бурая лиса прыгает через ленивую собаку</p>-->
              <p class="lead"><?php echo $q_row[0];?></p>
             </div>
           

            
            <div class="row p-3" id="right_pan"></div>
              
            
            
            <div class="row p-3 justify-content-end">
               <button class="done btn mb-3 mr-2 btn-primary done">Done</button>
               <button class="btn mb-3 mr-2 btn-primary next-quest">Next question</button>
            </div>                 
               
          

            </div>
        </div>
        

        <div class="container mt-5"> 
         <div class="clearfix">
          <div class="float-right mt-3">
              <p class="watches text-right"></p>
             
              <p class="data text-right">   sss  </p>
           
           <?php
              
              $Hour = date("H");
              $Minute = date("i");
              $Second = date("s");
              $xDate = date("d-m-Y");
              
            ?>
              
              <script>
                
                var arrayz = <?php echo $json;?>;
                var correct = false;
                var count = <?php echo $count;?>;

                //alert (count);

               $('button.next-quest').attr("disabled", true);
               $('button.done').attr("disabled", true);
                

               $('button.done').click(function(){

                  $( "button.word.chosen" ).each(function() {
                    
                    //Подсвечиваем красным цветом слова не на своих местах

                    if ( $(this).text() != (arrayz[ $(this).attr('id') ]) ) { 
                      correct = false;
                      $(this).removeClass('btn-dark');
                      $(this).addClass('btn-danger');
                    }

                    //Подсвечиваем зеленым цветом правильно выбранные слова
                    //*пока отключено
                    //else {
                      
                    //  $(this).removeClass('btn-dark');
                    //  $(this).addClass('btn-success');
                    //}


                  });

                  $( "button.word" ).each(function(){
                    $(this).attr("disabled", true);                    
                  })
                                      
                    $(this).attr("disabled", true);
                    $('button.next-quest').removeAttr("disabled");

                    alert (correct);
                })




                $('button.word').click(function(){  //При клике на кнопке
                
                 
                var parentId = $( this ).parent().attr('id'); //Узнаем Id родительского элемента
                
                if (parentId != 'right_pan') {  //Если кнопка не находиться в правой панели
                  
                  $('#right_pan').append($(this));  //Правая панель -> присоединить нажатую кнопку в конец
                  $(this).addClass('chosen'); //Добавляем класс Chosen

                  
                }
                  else {   //Иначе
                    $('#left_pan').append($(this));  //Переносим кнопку в левую панель
                    $(this).removeClass('chosen'); //Убираем класс chosen для слов которые перенесены обратно в левую панель
                    $(this).attr('id', '');   //              

                                 
                  }

                  //Пересчитываем ID кнопок
                  var count_btn = 0; //объявляем счетчик кнопок
                  $( "button.word.chosen" ).each(function() {
                    $(this).attr('id', count_btn);
                    count_btn++;
                  });

                  if (count_btn==count) {
                    
                    $('button.done').removeAttr("disabled");
                  }

                  else {
                   $('button.done').attr("disabled", true);
                  }

                                   
                });
                
                               


                var second=<?php echo $Second ?>;
                var minute=<?php echo $Minute ?>;
                var hour=<?php echo $Hour ?>;
                var data="<?php echo $xDate ?>";
                $("p.watches").text(" ");
                $("p.data").text(" ");
                
                function tictak(){
                    second++;
                    if (second>=60){
                    second=0
                    minute++
                    }
                    if (minute>=60){
                    minute=0
                    hour++
                    }
                    if (hour>23){
                    hour=0
                    minute=0
                    second=0
                    
                    }
                    
                
                  
                    var cHour = hour;
                    var cMinute = minute;
                    var cSecond = second;
                    if (second < 10) cSecond = "0" + second;
                    if (minute < 10) cMinute = "0" + minute;
                    if (hour < 10) cHour = "0" + hour;
                    $( "p.watches" ).text(cHour+":"+cMinute+":"+cSecond);
                    $("p.data").text(data);
                    setTimeout("tictak()",1000)
                }
              tictak();
                            
                  
                  
              </script>
          </div>
          </div>
         </div>
    </div>
               

   
   
    
  </body>
</html>