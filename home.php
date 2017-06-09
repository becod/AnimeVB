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
    
    <!--<script src="templates/content/layout.js"></script>-->
</head>
<body>
    
    <?php /*require_once('header.php');*/?>
    <header id="menuc" ></header>
    <script id="menu" type="text/x-handlebars-template">
        <nav class="nav">
           <div>
               <a href="home.php"><img src="content/img/data/Anime-Logo.jpg" alt="Logo-Site"></a>
           </div>
           <!--<div>
               <i class="fa fa-search" aria-hidden="true"></i>
           </div>-->
            <div>
                <a href="#" id="signin" >Sign In</a>
                <a href="#" id="signup">Sign Up</a>
            </div>
        </nav>
        <div id="signin-box" class="header-box-one hiden">
           <form action="script/php/sign/signin.php" method="post">
               <div><i id="signin-close" class="fa fa-close"></i></div>
               <input type="text" name="user" placeholder="Username"><br>
               <input type="password" name="pass" placeholder="Password"><br>
               <input type="submit" value="SIGN IN">
           </form>    
        </div>
        <div id="signup-box" class="header-box-two hiden">
           <form action="script/php/sign/signup.php" method="post" >
              <div><i id="signup-close" class="fa fa-close"></i></div>
              <input type="text" name="name" placeholder="Name"><br>
              <input type="text" name="lname" placeholder="Lastname"><br>
              <input type="text" name="mail" placeholder="E-mail"><br>
              <input type="text" name="user" placeholder="Username"><br>
              <input type="password" name="pass" placeholder="Password"><br>
              <input type="submit" value="SIGN UP">     
           </form>
        </div>
    </script>
    <script id="menu2" type="text/x-handlebars-template">
        <nav class="nav">
            <div>
               <a href="home.php"><img src="content/img/data/Anime-Logo.jpg" alt="Logo-Site"></a>
           </div>
           <!--<div>
               <i class="fa fa-search" aria-hidden="true"></i>
           </div>-->
            <div>
                Welcome, {{<?php echo $_SESSION['user'] ?>}}
                <a id="user_insert"><i class="fa fa-plus" aria-hidden="true"></i></a>
                <a id="user_config" ><i class="fa fa-cog" aria-hidden="true"></i></a>
                <a href="script/php/sign/signout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </nav>
        <div id="insert-box" class="header-box-one hiden">
           <form action="script/php/functions/insert.php" method="post" enctype="multipart/form-data">
               <div><i id="insert-close" class="fa fa-close"></i></div>
               <h2>Insert new content</h2><br>
               <input type="text" name="title" placeholder="Anime's title"><br>
               <textarea name="plot" id="" placeholder="Write the anime's plot" cols="24" rows="10"></textarea><br>
               <!--<input type="hidden"  name="MAX_FILE_SIZE" value="60000" />-->
               <input type="file" name="image" id="image"  > <!-- accept="image/*" -->
               <input type="submit" name="submit_insert" value="INSERT">
           </form>    
        </div>
        <div id="config-box" class="header-box-two hiden">
           <form action="script/php/sign/userconfig.php" method="post" >
              <div><i id="config-close" class="fa fa-close"></i></div>
              <input type="text" name="name" placeholder="Name" value="{{<?php echo $_SESSION['name']?>}}"><br>
              <input type="text" name="lname" placeholder="Lastname" value="{{<?php echo $_SESSION['lname']?>}}"><br>
              <input type="text" name="mail" placeholder="E-mail" value="{{<?php echo $_SESSION['mail']?>}}"><br>
              <input type="text" name="user" placeholder="Username" value="{{<?php echo $_SESSION['user']?>}}"><br>
              <input type="password" name="pass" placeholder="Password" value="{{<?php echo $_SESSION['pass']?>}}"><br>
              <input type="submit" value="SIGN UP">     
           </form>
        </div>
    </script>
    
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
<script type="text/javascript">
  localStorage.setItem("lastname", "Smith");    
    

var source2 = $('#menu').html();    
var template2 = Handlebars.compile(source2); 
var html2 = template2();
$('#menuc').html(html2);    
    </script>    
</body>
</html>