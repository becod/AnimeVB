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
    
    <script src="templates/content/layout.js"></script>
</head>
<body>
    
    <?php require_once('header.php');?>
 
    <div id="mainc" class="content"></div> 
    <script id="main" type="text/x-handlebars-template">
        {{#each anime}} 
        <div class="content-box">
             <div>
                 <img src="{{this.img}}" alt="{{this.name}} ">
                 <h3>{{this.name}}</h3>
                 <p>{{this.about}}</p>
             </div>
        </div>
        {{/each}} 
    </script>
    
    <?php /*require_once('footer.php');*/?>
 
<script 
  src="script/js/script.js" 
  type="text/javascript">
    </script>
<script type="text/javascript" >
    
    
</script>    
</body>
</html>