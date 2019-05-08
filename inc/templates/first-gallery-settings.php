<h1>First Gallery Options</h1>
<hr>
<?php settings_errors(); ?>

<?php 
    $f_GallImg_1 = esc_attr(get_option('f_gall_img_1'));
    $f_GallImg_2 = esc_attr(get_option('f_gall_img_2'));
    $f_GallImg_3 = esc_attr(get_option('f_gall_img_3'));
    $f_GallImg_4 = esc_attr(get_option('f_gall_img_4'));
    $f_GallImg_5 = esc_attr(get_option('f_gall_img_5'));
 ?>

<section class="kinologi-admin-section">
<div>
<img id="gall_pic_peview_1" src="<?php print $f_GallImg_1; ?>" />
</div>
<div>
<img id="gall_pic_peview_2" src="<?php print $f_GallImg_2; ?>" />
</div>
<div>
<img id="gall_pic_peview_3" src="<?php print $f_GallImg_3; ?>" />
</div>
<div>
<img id="gall_pic_peview_4" src="<?php print $f_GallImg_4; ?>" />
</div>
<div>
<img id="gall_pic_peview_5" src="<?php print $f_GallImg_5; ?>" />
</div>

<form method="post" action="options.php" class="kinologi-general-form">
        <?php settings_fields('kinnologi-gallery-one'); ?>
        <?php do_settings_sections( 'kinologi_custom_css_slug'); ?>
        <?php submit_button(); ?>
</form>
</section>