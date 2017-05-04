<header>
    <nav class="nav">
        <div>
            Welcome, <?php echo $_SESSION['user'] ?>
            <a id="user_insert"><i class="fa fa-plus" aria-hidden="true"></i></a>
            <a id="user_config" ><i class="fa fa-cog" aria-hidden="true"></i></a>
            <a href="script/php/sign/signout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
        </div>
    </nav>
</header>


<div id="insert-box" class="header-box-one hiden">
   <form action="script/php/functions/insert.php" method="post" enctype="multipart/form-data">
       <div><i id="insert-close" class="fa fa-close"></i></div>
       <h2>Insert new content</h2><br>
       <input type="text" name="title" placeholder="Anime's title"><br>
       <textarea name="plot" id="" placeholder="Write the anime's plot" cols="24" rows="10"></textarea><br>
       <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
       <input type="file" name="img" id="img" accept="image/*" >
       <input type="submit" name="submit_insert" value="INSERT">
   </form>    
</div>
<div id="config-box" class="header-box-two hiden">
   <form action="script/php/sign/signup.php" method="post" >
      <div><i id="config-close" class="fa fa-close"></i></div>
      <input type="text" name="name" placeholder="Name" value="<?php echo $_SESSION['name']?>"><br>
      <input type="text" name="lname" placeholder="Lastname" value="<?php echo $_SESSION['lname']?>"><br>
      <input type="text" name="mail" placeholder="E-mail" value="<?php echo $_SESSION['mail']?>"><br>
      <input type="text" name="user" placeholder="Username" value="<?php echo $_SESSION['user']?>"><br>
      <input type="password" name="pass" placeholder="Password" value="<?php echo $_SESSION['pass']?>"><br>
      <input type="submit" value="SIGN UP">     
   </form>
</div>