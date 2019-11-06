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
     
      
    <header>               
     <div class="container mt-5">
       <div class="clearfix">
           <h1 class="display-4 float-left">The English Quiz</h1>
           
           <button type="button" class="btn btn-secondary float-right mt-4" data-toggle="modal" data-target="#exampleModal">Log in as admin</button>
       </div>
     </div>
    </header>
                                           
     <div class="container mt-5">
        
        <div class="row justify-content-md-center">
          <div class="col-5 mt-5 mb-5 p-3">
              <p class="h4 lead">This is English language test. You will need to translate the russian sentence, putting given words in a proper order.</p>              
          </div>
         </div>   
           
        <div class="row justify-content-md-center">
            <div class="col-5 bg-light border p-3">
                
               <form action="quiz_view.php">
                  <div class="form-group">
                    <label for="First_name">First name</label>
                    <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="">

                  </div>
                  <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="">

                  </div>


                  <button type="submit" class="btn btn-primary">Start test</button>
                </form>
                
            </div>
        </div>
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
          
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in as admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="password">
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Log in</button>
      </div>
    </div>
  </div>
</div>
          
    <script>
      $('#exampleModal').on('show.bs.modal', function (event) {
  
})
      </script>
           
        
         
       
    

   
   
   
     
   
   
    
  </body>
</html>