<?php
    /*
        @package kinotheme

        ========================
            ADMIN PAGE
        ========================         
    */

function kinologi_add_admin_page(){

    //  generate admin page
    add_menu_page( 'Kinilogi Theme Options', 'Kinilogi', 'manage_options', 'kinologi_admin_slug', 'kinologi_theme_create_page', $icon_url = '', 110 );
    //  generate admin subpages
    add_submenu_page( 'kinologi_admin_slug', 'Kinilogi', 'Genneral', 'manage_options', 'kinologi_admin_slug', 'kinologi_theme_create_page' );

    add_submenu_page( 'kinologi_admin_slug', 'First Gallery Options', 'First Gallery', 'manage_options', 'kinologi_custom_css_slug', 'kinologi_theme_settings_page' );

    //Activete Custom Settings
    add_action('admin_init','kinologi_custom_settings');
    add_action('admin_init','kinologi_admin_textboxes');
    add_action('admin_init','kinologi_description_section');
    add_action('admin_init','kinologi_gallery_one_section');
}

add_action( 'admin_menu', 'kinologi_add_admin_page');

function kinologi_custom_settings(){
    register_setting('kinnologi-settings-group','big_picure');
    register_setting('kinnologi-settings-group','slogan');
    register_setting('kinnologi-settings-group','title');

    add_settings_section( 'kinilogi-first-section-options', 'First Section Options', 'kinologi_firstsections_options', 'kinologi_admin_slug' );
    add_settings_field( 'kinologi-big-picture', 'Big Picture', 'kinologi_load_bigpicture', 'kinologi_admin_slug', 'kinilogi-first-section-options' );
    add_settings_field( 'kinologi-slogan', 'Website Slogan', 'kinologi_slogan_string', 'kinologi_admin_slug', 'kinilogi-first-section-options');
    add_settings_field( 'kinologi-title', 'Website Title', 'kinologi_title_string', 'kinologi_admin_slug', 'kinilogi-first-section-options' );
   
}
    
function kinologi_admin_textboxes(){
    /*text boxes*/
    register_setting( 'kinnologi-settings-group','textbox1_head');
    register_setting( 'kinnologi-settings-group','textbox1_body');
    register_setting( 'kinnologi-settings-group','textbox1_image');

    register_setting( 'kinnologi-settings-group','textbox2_head');
    register_setting( 'kinnologi-settings-group','textbox2_body');
    register_setting( 'kinnologi-settings-group','textbox2_image');

    register_setting( 'kinnologi-settings-group','textbox3_head');
    register_setting( 'kinnologi-settings-group','textbox3_body');
    register_setting( 'kinnologi-settings-group','textbox3_image');

    add_settings_section( 'kinilogi-second-section-options', 'Second Section Options', 'kinologi_secondsections_options', 'kinologi_admin_slug' );
     /*text boxes fields*/
    add_settings_field( 'kin-first-box-head', 'First textbox', 'first_text_box', 'kinologi_admin_slug', 'kinilogi-second-section-options');
    add_settings_field( 'kin-second-box-head', 'Second textbox', 'second_text_box', 'kinologi_admin_slug', 'kinilogi-second-section-options');
    add_settings_field( 'kin-third-box-head', 'Third textbox', 'third_text_box', 'kinologi_admin_slug', 'kinilogi-second-section-options');

}

function kinologi_description_section(){
    register_setting('kinnologi-settings-group','description_text'  );
    register_setting('kinnologi-settings-group','description_title' );

    add_settings_section( 'kinologi-descr-section', 'Description settings', 'kinologi_description_options','kinologi_admin_slug');
    add_settings_field( 'kin-description-field', 'Description options', 'kinologi_description', 'kinologi_admin_slug', 'kinologi-descr-section');
}

function kinologi_gallery_one_section(){
    register_setting('kinnologi-gallery-one','f_gall_img_1'  );
    register_setting('kinnologi-gallery-one','f_gall_text_1' );
    register_setting('kinnologi-gallery-one','f_gall_img_2'  );
    register_setting('kinnologi-gallery-one','f_gall_text_2' );
    register_setting('kinnologi-gallery-one','f_gall_img_3'  );
    register_setting('kinnologi-gallery-one','f_gall_text_3' );
    register_setting('kinnologi-gallery-one','f_gall_img_4'  );
    register_setting('kinnologi-gallery-one','f_gall_text_4' );
    register_setting('kinnologi-gallery-one','f_gall_img_5'  );
    register_setting('kinnologi-gallery-one','f_gall_text_5' );

    add_settings_section( 'f-kinologi-gallery-section', 'Gallery image and text settings','kinologi_gallery_settings' , 'kinologi_custom_css_slug');
    add_settings_field('f-kin-gallery-field','Gallery Settings','kinologi_gallery_title','kinologi_custom_css_slug','f-kinologi-gallery-section');
}

/*  SECTION OPTIONS    */
function kinologi_firstsections_options(){
    echo 'custom section options';
}

function kinologi_secondsections_options(){
    echo '<p>second section options</p>';
    echo '<hr>';
}

function kinologi_description_options(){
    echo '<p>Description settings</p>';
    echo '<hr>';
}

/*GALLERY*/
function kinologi_gallery_settings(){
    echo '<p>Gallery Settings</p>';
}
function kinologi_gallery_title(){
    $f_GallImg_1 = esc_attr(get_option('f_gall_img_1'));
    $f_GallText_1 = esc_attr(get_option('f_gall_text_1'));
    $f_GallImg_2 = esc_attr(get_option('f_gall_img_2'));
    $f_GallText_2 = esc_attr(get_option('f_gall_text_2'));
    $f_GallImg_3 = esc_attr(get_option('f_gall_img_3'));
    $f_GallText_3 = esc_attr(get_option('f_gall_text_3'));
    $f_GallImg_4 = esc_attr(get_option('f_gall_img_4'));
    $f_GallText_4 = esc_attr(get_option('f_gall_text_4'));
    $f_GallImg_5 = esc_attr(get_option('f_gall_img_5'));
    $f_GallText_5 = esc_attr(get_option('f_gall_text_5'));

    echo '<input type="hidden" name="f_gall_img_1" id="f_img_1" value="'.$f_GallImg_1.'" /><input type="button" class="button button-secondaty" id="f_img_btn_1" value="img" />
          <br><textarea name="f_img_text_1" value="" placeholder="Text under image"></textarea><br><br> ';
    echo '<input type="hidden" name="f_gall_img_2" id="f_img_2" value="'.$f_GallImg_2.'" /><input type="button" class="button button-secondaty" id="f_img_btn_2" value="img" />
          <br><textarea name="f_img_text_2" value="" placeholder="Text under image"></textarea><br><br> ';
    echo '<input type="hidden" name="f_gall_img_3" id="f_img_3" value="'.$f_GallImg_3.'" /><input type="button" class="button button-secondaty" id="f_img_btn_3" value="img" />
          <br><textarea name="f_img_text_3" value="" placeholder="Text under image"></textarea><br><br> ';
    echo '<input type="hidden" name="f_gall_img_4" id="f_img_4" value="'.$f_GallImg_4.'" /><input type="button" class="button button-secondaty" id="f_img_btn_4" value="img" />
          <br><textarea name="f_img_text_4" value="" placeholder="Text under image"></textarea><br><br> ';
    echo '<input type="hidden" name="f_gall_img_5" id="f_img_5" value="'.$f_GallImg_5.'" /><input type="button" class="button button-secondaty" id="f_img_btn_5" value="img" />
          <br><textarea name="f_img_text_5" value="" placeholder="Text under image"></textarea><br><br> ';
}

/*Description functions*/
function kinologi_description(){
    $text = esc_attr(get_option('description_text'));
    $title = esc_attr(get_option('description_title'));
    echo '<input type="text" name="description_title" id="description_title" value="'.$title.'" placeholder="Title"/>
        <br><br>
        <textarea name="description_text" id="description_text" placeholder="Description Text"></textarea>
    ';
}

/*textbox functions*/
function first_text_box(){
    $textbox_head = esc_attr(get_option('textbox1_head'));
    $textbox_body = esc_attr(get_option('textbox1_body'));
    $textbox1_image = esc_attr(get_option('textbox1_image'));
    echo'
        <input type="button" class="button button-secondaty" id="upload_textbox_one" value="image" />
        <input type="hidden" id="first_text_box_picure" name="textbox1_image" value="'.$textbox1_image.'" />
        <br />
        <br />
        <input type="text" name="textbox1_head" value="'.$textbox_head.'" placeholder="Textbox Header" />
        <br />
        <br />
        <textarea  name="textbox1_body" value="'.$textbox_body.'" placeholder="Textbox Body"></textarea>
    ';
}

function second_text_box(){
    $textbox_head = esc_attr(get_option('textbox2_head'));
    $textbox_body = esc_attr(get_option('textbox2_body'));
    $textbox1_image = esc_attr(get_option('textbox2_image'));
    echo'
        <input type="button" class="button button-secondaty" id="upload_textbox_two" value="image" />
        <input type="hidden" id="second_text_box_picure" name="textbox2_image" value="'.$textbox1_image.'" />
        <br />
        <br />
        <input type="text" name="textbox2_head" value="'.$textbox_head.'" placeholder="Textbox Header" />
        <br />
        <br />
        <textarea  name="textbox2_body" value="'.$textbox_body.'" placeholder="Textbox Body"></textarea>
    ';
}

function third_text_box(){
    $textbox_head = esc_attr(get_option('textbox3_head'));
    $textbox_body = esc_attr(get_option('textbox3_body'));
    $textbox1_image = esc_attr(get_option('textbox3_image'));
    echo'
        <input type="button" class="button button-secondaty" id="upload_textbox_three" value="image" />
        <input type="hidden" id="third_text_box_picure" name="textbox3_image" value="'.$textbox1_image.'" />
        <br />
        <br />
        <input type="text" name="textbox3_head" value="'.$textbox_head.'" placeholder="Textbox Header" />
        <br />
        <br />
        <textarea  name="textbox3_body" value="'.$textbox_body.'" placeholder="Textbox Body"></textarea>
    ';
}

function kinologi_load_bigpicture(){
    $picture = esc_attr( get_option('big_picure'));
    echo '
        <input type="button" class="button button-secondaty" id="upload_button" value="Upload Big Picture" />
        <input type="hidden" id="big_picure" name="big_picure" value="'.$picture.'"/>
    ';
}

function kinologi_slogan_string(){
    $slogan = esc_attr( get_option('slogan'));
    echo '<input type="text" name="slogan" value="'.$slogan.'" placeholder="Website Slogan"/>
    <p class="description">Input somthing clever</p>
    ';
}
function kinologi_title_string(){
    $title = esc_attr( get_option('title')); 
    echo '<input type="text" name="title" value="'.$title.'" placeholder="Website Title"/> 
    <p class="description">Input Page Title</p>
    ';
}
/*  ===================   */

function kinologi_theme_create_page(){
    require_once(get_template_directory().'/inc/templates/kinologi-admin.php');
}

function kinologi_theme_settings_page(){
    require_once(get_template_directory().'/inc/templates/first-gallery-settings.php');
}