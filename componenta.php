<?php
    


?>

<div>


    <button class="<?php echo $class?> mb-5">
        <?php 
            echo $param;
            if(isset($subtitle)) echo $subtitle;
        
        ?>     

    </button>


    <?php if(isset($fulippo)): ?>
        <h1><?php echo $fulippo ?></h1>

        
    <?php endif; ?>

    <div style="background-color:green;">
        <?php 
            foreach($params as $carmelo){
                get_template_part('componentb.php', $carmelo);
            }
        ?>
    </div>
    
</div>