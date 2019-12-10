<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Raffle Drum Animation</title>
        <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
        <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css'" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/raffledraw/css/prism.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/raffledraw/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/css/raffle.css">
    </head>
    <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav"  style="background-color: #5c0383; opacity: 90%;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Joo Lottery</a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded" data-toggle="modal" data-target="#exampleModal" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br><br><br>
      <div class="container" id="showWinner">

      </div>
        <!-- CONTENT START-->
        <div id="mainHolder">
            <section class="single">
            	<div class="demo">
                    <div id="firstDrumHolder" class="drumHolder fitImg">
                        <img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/stand.svg"/>
                        <!-- RAFFLE HOLDER-->
                        <div class="raffleHolder">
                            <img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/glass.svg"/>
                            <!-- TICKET RESULT-->
                            <div class="ticketResult"></div>
                            <div class="drumMask">
                            	<!-- DRUM ITEMS-->
                                <div class="itemsWrapper"></div>
                                <!-- DRUM TOP-->
                                <div class="drumGlassHolder">
                                    <img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/glass.svg"/>
                                </div>
                                <!-- DRUM SIDE-->
                                <div class="drumSideHolder">
                                    <div class="side"><img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/side.svg"/></div>
                                    <div class="side"><img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/side.svg"/></div>
                                    <div class="side"><img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/side.svg"/></div>
                                    <div class="side"><img src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/assets/side.svg"/></div>
                                </div>
                              </div>
                        </div>
                    </div>
                 </div>
            </section>
            <hr/>
        </div>
        <!-- CONTENT END-->
        <div class="">
          <?php
            if(isset($draw_data)){
              $srno = 1;
              $winnerCount = '';
              foreach ($draw_data as $draw_row) {
                $winnerCount .= '<strong>Prize# '.$srno.' : '.$draw_row['date_time'].' '.$draw_row['time'].' ('. $draw_row['number'].')</strong>   &nbsp&nbsp&nbsp&nbsp';
                $winner = $draw_row['number'];
                $srno++;
              }
            }
          ?>
        </div>
        <script src="<?php echo base_url(); ?>assets/raffledraw/js/vendor/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/raffledraw/raffledrumanimation/js/raffle.js"></script>
        <script src="<?php echo base_url(); ?>assets/raffledraw/js/prism.js"></script>
        <script src="<?php echo base_url(); ?>assets/raffledraw/js/init.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86567323-32"></script>
    <script type="text/javascript">
      function showwinner(){
        winner =  "<?php echo $winner; ?>";
        return winner;
      }
      function drawprize(){
        prize = "<?php echo $winnerCount; ?>";
        return prize;
      }
    </script>
    </body>
</html
