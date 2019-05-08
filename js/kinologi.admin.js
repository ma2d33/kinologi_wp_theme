jQuery(document).ready(function($){

    var mediaUploader;
    var first_textbox_img;
    var second_textbox_img;
    var third_textbox_img;

    /*First Gallery Images*/
      var f_gallery_img_1;
      var f_gallery_img_2;
      var f_gallery_img_3;
      var f_gallery_img_4;
      var f_gallery_img_5;
    /*====================*/

    uploadImg('#upload_button','#big_picure','#profile_pic_peview',mediaUploader);
    uploadImg('#upload_textbox_one','#first_text_box_picure','#first_textbox_picture',first_textbox_img);
    uploadImg('#upload_textbox_two','#second_text_box_picure','#second_textbox_picture',second_textbox_img);
    uploadImg('#upload_textbox_three','#third_text_box_picure','#third_textbox_picture',third_textbox_img);


    uploadImg('#f_img_btn_1','#f_img_1','#gall_pic_peview_1',f_gallery_img_1);
    uploadImg('#f_img_btn_2','#f_img_2','#gall_pic_peview_2',f_gallery_img_2);
    uploadImg('#f_img_btn_3','#f_img_3','#gall_pic_peview_3',f_gallery_img_3);
    uploadImg('#f_img_btn_4','#f_img_4','#gall_pic_peview_4',f_gallery_img_4);
    uploadImg('#f_img_btn_5','#f_img_5','#gall_pic_peview_5',f_gallery_img_5);

function uploadImg (button,hiddenId,showId,uploader){
    $(button).on('click',function(e) {
       e.preventDefault();
       if(uploader){
        uploader.open();
        return;
       }

       uploader = wp.media.frames.file_frame = wp.media({
            title : 'Choose  picture',
            button:{
                    text:'Choose Picture'
            },
            multiple:false
       });

       uploader.on('select',function(){
        attachment = uploader.state().get('selection').first().toJSON();
        $(hiddenId).val(attachment.url);
        $(showId).attr('src',attachment.url);
       });

       uploader.open();

    });
}

});

