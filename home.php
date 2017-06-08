<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/5b5765fe72.js"></script>
    <script
      src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="script/js/handlebars-v4.0.10.js" ></script>
</head>
<body>
    
    <?php require_once('header.php');?>
    
    <div class="content"> <?php require('content.php');?></div>
    
    <div id="main" class="content"></div>
    
    <?php /*require_once('footer.php');*/?>

<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script 
  src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.10/handlebars.js"></script>
<script 
  id="app-script"  
  type="text/handelbars-template" 
  src="templates/content/layout.js"></script>    
<script 
  src="script/js/script.js" 
  type="text/javascript">
    </script>
<script type="text/javascript" >
/*$.ajax({
  type: 'POST',
  url: 'content.php',
  data: {format:'json'},
  dataType: 'json'
});*/
        
    /*error: function (jqXHR, exception) {
    var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        $('#app').html(msg);
    }*/
</script>    
</body>
</html>