<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/5b5765fe72.js"></script>
</head>
<body>
    
    <?php require_once('header.php');?>
    
    <div class="content"> <?php require('content.php');?> </div>
    
    <?php require_once('footer.php');?>
    


<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.10/handlebars.amd.js"></script>
<script id="handlebars-demo" type="text/x-handlebards-template" >
    <div class="entry">
    <h1>{{title}}</h1>
    <div class="body">
      {{body}}
    </div>
</div>
    </script>

<script src="script/js/script.js" type="text/javascript"></script>
</body>
</html>