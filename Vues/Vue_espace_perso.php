
<!-- **************************************** -->
<?php
  include("Template_header.html");
?>
<!-- **************************************** -->


<div id="about" class="jumbotron text-center">
  <h1>Espace Client</h1> 
  <p>Bonjour <?php echo $_SESSION['mail'];?></p> 
</div>


   


<div id="alarme" class="container-fluid text-center">
  <h2> Alarme </h2></br>
     <div class="panel-group">
       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3"><span class="glyphicon glyphicon-list"></span> Mes Alarmes </a>
            </h4>
          </div>
        
          <div id="collapse3" class="panel-collapse collapse">
            <!-- <?php echo $ChaineAlarme;?> -->
          </div>
        </div>
      </div>
</div>

<div id="planning" class="container-fluid text-center bg-grey">
  <h2>Planification des tâches</h2></br>
     <div class="panel-group">
       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-calendar"></span> Mes taches</a>
            </h4>
          </div>
        
          <div id="collapse1" class="panel-collapse collapse">
            <!-- <?php echo $chaineTaches;?> -->
          </div>
        </div>
      </div>
</div>   

      <!-- <?php  
          if($info)
          {
            if($etat == 1)
            {
              ?><div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                    <?php echo $info; ?>
                  </center> 
              </div> <?php
            }
            else if($etat == 0)
            {
              ?><div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                    <?php echo $info; ?>
                  </center> 
              </div> <?php
            }  
          }
      ?> -->

    

<!-- //***************************************// -->
<?php
  include("Template_Footer.html");
?>
<!-- //***************************************// -->