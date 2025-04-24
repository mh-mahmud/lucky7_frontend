<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <title>BEET24 Is The best sport betting site in India</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="<?php echo base_url('assets/game2'); ?>/css/ludu/bootstrap.css">
 <script src="<?php echo base_url('assets/game2'); ?>/js/ludu/jquery.js" type="text/javascript"></script>
 <script src="<?php echo base_url('assets/game2'); ?>/js/ludu/bootstrap.js" type="text/javascript"></script>
 <link href="<?php echo base_url('assets/game2'); ?>/css/ludu/css.css" rel="stylesheet">
 <link href="<?php echo base_url('assets/game2'); ?>/css/ludu/custom.css" rel="stylesheet">
</head>
<body cz-shortcut-listen="true">
 <header>
  <nav class="navbar navbar-default heading-color" style="background:#777; margin: 0;">
    <div class="navbar-header ">
      <a href="index.php" class="btn btn-primary back-btn">Back</a>
      <div style="float:left;width:200px;">
        <a class="" href="index.php">
          <img style="width: 100%;height: 50px;margin-left: 10px;" src="<?php echo base_url('assets/game2'); ?>/images/logo.png">
        </a>
      </div>
            <div style="float:left;width:400px; font-size:20px; color:white; margin-left:20px; margin-top:10px;">
          Balance - 130        <a href="" class="btn btn-primary">Refresh</a>
      </div>
    </div>
  </nav>
</header>

<div style="margin:0 auto;min-height: 700px;background: #7b2d73; overflow: hidden;">
  <div id="coin">
    <div class="side-a tail">
      <img style="width: 100%;height: 100%;border-radius: 30px;" src="<?php echo base_url('assets/game2'); ?>/images/lududice.PNG">
    </div>
  </div>
  <h2 style="text-align:center; color:white;">You VS Computer</h2>
  <div id="error">
  </div>
  <div style="width:100%;display: block;overflow: hidden;">
    <div class="btn-top" style="">
      <p>Select a Dice please <span>Rate: 1.50</span></p>
    </div>

    <div style="padding: 5px 10px;background: #0a7b7b;margin-top: 10px;">
      <button class="btn d3" id="btn-head" style="width: 49%;"><div class="d31">RED</div></button>
      <button class="btn d3" id="btn-till" style="width: 49%;"><div class="d31">WHITE</div></button>
    </div>
    <div style="width:100%;float:left;margin-top: 10px;">
      <div style="width:40%;float:left;">
        <input type="number" class="form-control form-custom" name="coin_amount" id="coin_amount" placeholder=" Enter Amount">
      </div>
      <div style="width:60%;float:right;">
        <div class="posiblewin" id="posiblewin">
          <span>Possible Winning</span><span class="bg" id="coin_pwin">0.00</span>
        </div>
      </div>
    </div>
    <div class="play-btn">
      <img id="cplay" class="" src="<?php echo base_url('assets/game2'); ?>/images/play-btn.png" alt="">
      <img id="cplay1" class="hidden" src="<?php echo base_url('assets/game2'); ?>/images/play-btn.png" alt="">
    </div>
  </div>
</div>
<div class="modal fade" id="login-notice" role="dialog">
  <div class="modal-dialog  ">
    <div class="modal-content m-content">
      <div class="modal-header m-head mh-color" style="  background: #027B5B;">
        <button type="button" class="close" data-dismiss="modal" style="color: #ffff00">×</button>
        <h4 class="modal-title" style="color: #fff">   &nbsp; Sign In To Beet24.com</h4>
      </div>
      <div class="modal-body" style="padding: 2% !important">
        <form action="" method="POST" style="padding: 0;box-shadow: none">
          <div class="signup-form">
            <div id="formData">
              <div id="errorSignIn" class="alert alert-danger errorSignIn" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>  <strong>  Opps !!</strong> Please Login frist !!
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  setTimeout(function(){
    document.getElementById('aap').className = 'waa';
  }, 5000);
  jQuery(document).ready(function($){
    var addedclass="";
    var flipResult="";
    var result="";
    var coin_amount="";
    var coin_stake="";
    var run=0;
    $('#btn-head').click(function(event) {
      if(run==0)
      {

       coin_stake="red";
       $('#btn-head').addClass('active');
       $('#btn-till').removeClass('active');
     }
   });

    $('#btn-till').click(function(event) {
      if(run==0)
      {

       coin_stake="white";
       $('#btn-head').removeClass('active');
       $('#btn-till').addClass('active');
     }
     else
     {

     }
   });

    $('#cplay').on('click', function(){
      run=0;
      var coin_amount=$('#coin_amount').val();
      if(coin_stake=="" )
      {
        alert('Choose your Color ( Red or White )');
        run=0;
      }
      else
      {
        if(coin_amount<=0)
        {
          alert('Enter Stake amount');
          run=0;
        }
        else
        {
          $.ajax({
            method: "POST",
            url:'dicepost.php',
            data : {
             coin_stake: coin_stake,
             coin_amount: coin_amount
           },
           success : function (a){
            var respData = JSON.parse(a);
            $('#coin').html(respData.wstatues);
            $('#result').html(respData.b);
            $('#notice').html(respData.c);
            $('#posiblewin').html(respData.posiblewin);
            $('#error').html(respData.error);
          }
        }); 
        }
      }
    });

        $('#coin_amount').keyup(function(event) {
      // var rate=2.2;
      var rate=1.50;
      var amount=$('#coin_amount').val();
      var returna=amount*rate;
      var returna=returna.toFixed(1); 
      $('#coin_pwin').html(returna);
    });
  });


</script>

</body></html>