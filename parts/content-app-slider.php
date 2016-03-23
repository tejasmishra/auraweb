<?php
global $origin_theme;
        $apps_main_slides        = $origin_theme['apps-main-slides'];
        $slide_count        = count($apps_main_slides);
?>

<div class='appsslider autoplay'>
    <?php for($slide=0; $slide < $slide_count; $slide++ ) { ?>
            <div><img src='<?php echo $apps_main_slides[$slide]["image"]; ?>' ?></div>
    <?php } ?>
</div>
