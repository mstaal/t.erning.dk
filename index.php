<html manifest="erning.appcache">
    <head>
      <?php
      $flader = 6;
      $dicesize = 50;
      $arWidth = 310;

      $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
      $android = strstr($_SERVER['HTTP_USER_AGENT'],'Android');

      if ($iphone == true or $android == true){
        $dicesize = 45;
        //Visitor is browsing on an iPhone, redirect them to your web app page
        // header("Location: mobile.php");
      }
      else {
        //Your visitor is not browsing on an iPhone
        //Load your non iPhone optimized website here
      }
      ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="/js/fastclick.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700'          rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="/js/erning.js"></script>
        <title>Erning :-)</title>
        <link rel="apple-touch-icon-precomposed" href="icons/dice.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/dicePad.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/dicePhoneRetina.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icons/dicePadRetina.png" />
        <meta name="viewport"
            content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style type="text/css"></style>
    </head>

    <body>
        <div id="upper">
        <br>
        </div>
        <h1>Erning :-)</h1>
        <div class="center" id="around" style="
            max-width:<?php echo $arWidth?>px;
            min-height:<?php echo $dicesize?>px;
            height:<?php echo $dicesize?>px;">
          <div class="center" id="lockdiv" style="display:none;">
            <button type="button" onclick="locking();" class="button small orange" id="lock">
                Lock
            </button>
          </div>
          <div id="terninger">
          </div>
        </div>
        <br>
        <div class="center">
            <select id="nummer" name="nummer" class="styled-select">
              <?php
               for ($i=1; $i < $flader + 1; $i++) {
              ?>
                   <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php
                 }
              ?>
            </select>
          <br><br>
            <button type="button" onclick="makeDices(<?php echo $dicesize; ?>);"
                class="button large blue" id="shake">
              Shake!
            </button>
            <button type="button" onclick="hiding();" class="button large red" id="hide">
              Hide
            </button>
        </div>
        <div id="footer">
        <p>
<!--           Proudly powered by <a href="https://www.random.org/" target="_blank">Random.org</a>
          <br> -->
          Copyright &copy; erning.dk <?php echo date('Y'); ?>
          <br>
        </p>
        </div>
          <script>
            document.getElementById("shake").click();
          </script>
    </body>
</html>
