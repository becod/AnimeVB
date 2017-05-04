<?php 
    session_start();
    $file=fopen("content/info/content.txt", "r");

    while(!feof($file)){
        $line=fgets($file);
        
        list($id, $user, $title, $plot, $img) = explode(";",$line);	
        
    }
?>
<section>
    <div>
        <div>
            <div>
                <img src="<?php echo $img?>" alt="">
                <h3><?php echo $title ?></h3>
                <p><?php echo $plot?></p>
                <h6>By <?php echo strtoupper($_SESSION['user'])?></h6>
                <a href="">Read More</a>
            </div>
        </div>
    </div>
</section>