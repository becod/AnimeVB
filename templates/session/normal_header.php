<header>
    <nav class="nav">
        <div>
            <a href="#" id="signin" >Sign In</a>
            <a href="#" id="signup">Sign Up</a>
        </div>
    </nav>
</header>
<div id="signin-box" class="header-box-one hiden">
   <form action="../Hw/script/php/sign/signin.php" method="post">
       <div><i id="signin-close" class="fa fa-close"></i></div>
       <input type="text" name="user" placeholder="Username"><br>
       <input type="password" name="pass" placeholder="Password"><br>
       <input type="submit" value="SIGN IN">
   </form>    
</div>
<div id="signup-box" class="header-box-two hiden">
   <form action="../Hw/script/php/sign/signup.php" method="post" >
      <div><i id="signup-close" class="fa fa-close"></i></div>
      <input type="text" name="name" placeholder="Name"><br>
      <input type="text" name="lname" placeholder="Lastname"><br>
      <input type="text" name="mail" placeholder="E-mail"><br>
      <input type="text" name="user" placeholder="Username"><br>
      <input type="password" name="pass" placeholder="Password"><br>
      <input type="submit" value="SIGN UP">     
   </form>
</div>