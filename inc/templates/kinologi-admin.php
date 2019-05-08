<h1>Kinologi Theme Options</h1>
<hr>
<?php settings_errors(); ?>
<?php  

    $bigpicture = esc_attr( get_option('big_picure'));
    $slogan = esc_attr( get_option('slogan'));
    $title = esc_attr( get_option('title')); 
    $textbox1_image = esc_attr(get_option('textbox1_image'));
    $textbox2_image = esc_attr(get_option('textbox2_image'));
    $textbox3_image = esc_attr(get_option('textbox3_image'));

?>

<section class="kinologi-admin-section">
    <div class="kinologi-preview">
        <div class="kinologi-firstsection">
            <h4 class="kinologi-slogan"><?php print $slogan;?></h4>
            <h3 class="kinologi-title"><?php print $title;?></h3>
        </div>
    </div>

    <div class="big-picture-cont">
        <div class="big-picture">
            <img id="profile_pic_peview" src="<?php print $bigpicture; ?>" />
        </div>
     </div>

     <div class="big-picture-cont">
        <div class="big-picture">
            <img id="first_textbox_picture" src="<?php print $textbox1_image; ?>" />
        </div>
     </div>
     <div class="big-picture-cont">
        <div class="big-picture">
            <img id="second_textbox_picture" src="<?php print $textbox2_image; ?>" />
        </div>
     </div>
     <div class="big-picture-cont">
        <div class="big-picture">
            <img id="third_textbox_picture" src="<?php print $textbox3_image; ?>" />
        </div>
     </div>
    <form method="post" action="options.php" class="kinologi-general-form">
        <?php settings_fields('kinnologi-settings-group'); ?>
        <?php do_settings_sections( 'kinologi_admin_slug'); ?>
        <?php submit_button(); ?>
    </form>
</section>


