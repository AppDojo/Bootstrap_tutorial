<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/support.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Bootstrap Tuts <small><i class="icon-eye-open"></i>"All your attentions <strong>belong</strong> to me"<i class="icon-eye-open"></i></small></h1>
      <div class="row">
        <div class="span12 show-grid">
          <p class="lead">Grid example</p>
          <div class="span1 show-grid">span 1</div>
          <div class="span1 show-grid">span 1</div>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12 show-grid">
          <p class="lead">Grid example</p>
          <div class="span1 show-grid">span 1</div>
          <div class="span1 show-grid">span 1</div>
        </div>
      </div>
      <hr>
      <div><p class="lead">Modal example</p>
        <!-- Button to trigger modal -->
          <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
           
          <!-- Modal -->
          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Modal header</h3>
            </div>
            <div class="modal-body">
              <p>One fine body…</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
          </div>
      </div>
      <div><p class="lead">tooltip example</p>
          <p> meant what I said And I said what I meant….An elephant’s faithful One hundred per cent! And it should be,it should be, it SHOULD be like that! Because Horton was faithful! He sat and he sat!<br><br> BY:<a href="#" class="tooltipexample" data-placement="bottom" rel="tooltip" title="some kinda book writer guy">Dr. suse</a></p>
      </div>
      <div><p class="lead">popover example</p>
           <a href="#" class="your-class btn btn-success" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Click to toggle popover</a>      
      </div>
      <div><p class="lead">carousel example</p></div>
      <div><p class="lead">tabs/tables example</p></div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    //start modal call 
      $('#myModal').modal(options);
    //end modal call
    </script>
    <script type="text/javascript">
      //start tooltip
      $('.tooltipexample').tooltip()
      //end tooptip
    </script>
    <script>
    //start pop over
      $('.your-class').popover();
    //end pop over
    </script>

  </body>
</html>
