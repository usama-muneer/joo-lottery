<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css'" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <style media="screen">
            /* reset */
        body, ul, li, p, h1, h2, h3, h4 {
        margin: 0;
        padding: 0;
        }

        /* slideshow */

        ul {
        width: 400px;
        height: 200px;

        margin: 0 auto;

        position: relative;

        list-style: none;

        -webkit-perspective: 700px;
        perspective: 700px;
        }

        li {
        position: absolute;

        transform-origin: 0 100%;
        }
        li.current {
        transition: all 0.3s ease-out;
        opacity: 1.0;
        }
        li.in {
        opacity: 0.0;
        transform: rotate3d(1, 0, 0, -90deg);
        }
        li.out {
        transition: all 0.3s ease-out;
        opacity: 0.0;
        transform: rotate3d(1, 0, 0, 90deg);
        }


    </style>
  </head>
  <body>
    <div class="jumbotron bg-dark">
      <h1 class="text-center text-white">Welcome to Joo Lottery</h1>
      <a href="http://localhost:8080/JooLottery/" class="float-right btn btn-info">Home</a>
    </div>
    <div class="container row">
      <div class="col-md-12">
        <br><br><br>
      <ul id='slideshow'>
        <li><img src='http://placehold.it/500x200&text=Next Draw at 03:15:00 PM' alt=''></li>
        <?php
        for($i=100; $i<=999; $i++){
         $j = rand(100,999);
          echo "<li><img src='http://placehold.it/500x200&text=".$j."' alt=''></li>";
        }
        ?>
      </ul>
      </div>
    </div>

  <button id='again'>Again :-)</button>
  <script type="text/javascript">
      var slides = $('#slideshow').find('li');
      // move all to the right.
      slides.addClass('in');

      // move first one to current.
      $(slides[0]).removeClass().addClass('current');

      var currentIndex = 0;

      var minimumCount = 10;
      var maximumCount = 30;
      var count = 0;

      function nextSlide() {
      $('#again').attr('disabled','disabled');

      currentIndex += 1;
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }

      // move any previous 'out' slide to the right side.
      $('.out').removeClass().addClass('in');

      // move current to left.
      $('.current').removeClass().addClass('out');

      // move next one to current.
      $(slides[currentIndex]).removeClass().addClass('current');


      count += 1;
      if (count > maximumCount || (count > minimumCount && Math.random()>0.6) ) {
        clearInterval(interval);

        $('#again').removeAttr('disabled');
      }
      }

      //var interval = setInterval(nextSlide, 200);


      $('#again').click(function(){
      count = 0;
      interval = setInterval(nextSlide, 120);
      });
  </script>
  </body>
</html>
