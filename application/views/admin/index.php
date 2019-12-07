<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to JooLottery</title>
    <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css'" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="jumbotron bg-dark">
        <h1 class="text-center text-white">Welcome to Joo Lottery</h1>
      </div>

      <!-- Draw Entery Form  -->.
      <div class="container row">
        <div class="col-md-12">
          <h5>Enter Draw numbers for todway:</h5>
          <br>
        </div>


        <div class="col-md-8">
          <!-- 13:1:00 -->
          <div class="col-md-12 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Time: 13:15:00</span>
            </div>
            <input type="number" class="form-control" name="time1315-number" placeholder="Enter Draw Number Here:" id="time1315-number" aria-label="Username" aria-describedby="basic-addon1">
            <input type="hidden" name="time1315" id="time1315" value="13:15:00">
            <button type="button" name="button-1315" class="btn btn-success" onclick="btn_1315()" id="btn-1315">Confrm</button>

          </div>

          <!-- 15:15:00 -->
          <div class="col-md-12 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Time: 15:15:00</span>
            </div>
            <input type="number" class="form-control" name="time1515-number" placeholder="Enter Draw Number Here:" id="time1515-number" aria-label="Username" aria-describedby="basic-addon1">
            <input type="hidden" name="time1515" id="time1515" value="15:15:00">
            <button type="button" name="button-1515" class="btn btn-success" onclick="btn_1515()" id="btn-1515">Confrm</button>
          </div>

          <!-- 16:45:00 -->
          <div class="col-md-12 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Time: 16:45:00</span>
            </div>
            <input type="number" class="form-control" name="time1645-number" placeholder="Enter Draw Number Here:" id="time1645-number" aria-label="Username" aria-describedby="basic-addon1">
            <input type="hidden" name="time1645" id="time1645" value="16:45:00">
            <button type="button" name="button-1645" class="btn btn-success" onclick="btn_1645()" id="btn-1645">Confrm</button>
          </div>

          <!-- 20:45:00 -->
          <div class="col-md-12 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Time: 20:45:00</span>
            </div>
            <input type="number" class="form-control" name="time2045-number" placeholder="Enter Draw Number Here:" id="time2045-number" aria-label="Username" aria-describedby="basic-addon1">
            <input type="hidden" name="time2045" id="time2045" value="20:45:00">
            <button type="button" name="button-2045" class="btn btn-success" onclick="btn_2045()" id="btn-2045">Confrm</button>
          </div>

        </div>
        <div class="col-md-4" id="draw-error">
        </div>
      </div>
      <hr>
      <!-- Display Daily Draw  -->.
      <div class="container">
        <table class="table table-striped table-bordered table-sm">
          <thead class="bg-dark text-white">
            <tr>
              <th scope="col">Sr#</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Number</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
      <br><br>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
      function btn_1315(){
        var number = $('#time1315-number').val();
        var time = $('#time1315').val();
        if(number == '' ){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Invalid Number </div>');
        }
        else if(number.length < 3){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at least 3 digits </div>');
        }
        else if(number.length > 4){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at most 4 digits </div>');
        }
        else{
          $.ajax({
            url:"<?php echo base_url(); ?>admin/insert_draw",
            method: "POST",
            data: {time:time,number:number},
            success:function(result){
              $('#draw-error').html('<div class="alert alert-success" id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully added</strong></div>');
            }
          });
        }
      }
      function btn_1515(){
        var number = $('#time1515-number').val();
        var time = $('#time1515').val();
        if(number == '' ){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Invalid Number </div>');
        }
        else if(number.length < 3){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at least 3 digits </div>');
        }
        else if(number.length > 4){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at most 4 digits </div>');
        }
        else{
          $.ajax({
            url:"<?php echo base_url(); ?>admin/insert_draw",
            method: "POST",
            data: {time:time,number:number},
            success:function(result){
              $('#draw-error').html('<div class="alert alert-success" id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully added</strong></div>');
            }
          });
        }
      }
      function btn_1645(){
        var number = $('#time1645-number').val();
        var time = $('#time1645').val();
        if(number == '' ){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Invalid Number </div>');
        }
        else if(number.length < 3){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at least 3 digits </div>');
        }
        else if(number.length > 4){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at most 4 digits </div>');
        }
        else{
          $.ajax({
            url:"<?php echo base_url(); ?>admin/insert_draw",
            method: "POST",
            data: {time:time,number:number},
            success:function(result){
              $('#draw-error').html('<div class="alert alert-success" id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully added</strong></div>');
            }
          });
        }
      }
      function btn_2045(){
        var number = $('#time2045-number').val();
        var time = $('#time2045').val();
        if(number == '' ){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Invalid Number </div>');
        }
        else if(number.length < 3){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at least 3 digits </div>');
        }
        else if(number.length > 4){
          $('#draw-error').html('<div class="alert alert-danger " id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Enter at most 4 digits </div>');
        }
        else{
          $.ajax({
            url:"<?php echo base_url(); ?>admin/insert_draw",
            method: "POST",
            data: {time:time,number:number},
            success:function(result){
              $('#draw-error').html('<div class="alert alert-success" id="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully added</strong></div>');
            }
          });
        }
      }
    </script>
  </body>
</html>
