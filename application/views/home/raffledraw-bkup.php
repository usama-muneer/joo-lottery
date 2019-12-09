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

      <div class="container" id='showWinner'>

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

                    <div class="action">
                        <button id="toggleSpin" class="site">Toggle Spin</button>
                        <button id="startSpin" class="site">Start Spin</button>
                        <button id="stopSpin" class="site">Stop Spin</button>
                        <button id="showResult" class="site">Show Result</button>

                        <br/><br/>

                        <button id="example1" class="site">Example 1</button>
                        <button id="example2" class="site">Example 2</button>
                        <button id="example3" class="site">Example 3</button>
                        <button id="destroy" class="site">Destroy</button>

                    </div>
                 </div>
            </section>

            <hr/>


        </div>
        <!-- CONTENT END-->
        <div class="">
          <?php
            if(isset($draw_data)){
              print_r($draw_data);
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
        winner =  "<?php echo $draw_data['winner']; ?>";
        return winner;
      }
    </script>
    </body>
</html
