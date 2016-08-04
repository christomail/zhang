/*
添加图片上传结构
 <li class="lrli">
     <label for="" class="label">顶部效果图*</label>
     <div class="listCell">
         <span class="btn_determine btn_upload btn_radius"><span id="spanButtonPlaceholder"></span></span>
         <span class="redtext">*上传格式为jpg</span>
     </div>
 </li>
 <li class="lrli">
     <label for="" class="label">预览</label>
     <div class="listCell">
         <div class="img_upload">
             <img id="img" src="" alt="">
             <input name="pic" id="pic" type="hidden" value="">
         </div>
     </div>
 </li>
 */
var swfu;
window.onload = function () {
    swfu = new SWFUpload({
        // Backend Settings
//            upload_url: "http://photo.leju.com/api/v2/upload",
//        upload_url: "http://src.house.sina.com.cn/resource/resource/upload/",
        upload_url: 'http://zhangyi.pic.com/upload.php',
        //post_params: {
        //    pkey: "8765d529b0fb83e46b1fe41df41bf1c6",
        //    mkey: "b92473b8e267bbfd9d893b0ef68551bb"
        //},

        // File Upload Settings
        file_size_limit : "1 MB",	// 10MB
        file_types : "*.jpg",
        file_types_description : "JPG Images",
        file_upload_limit : "0",

        // Event Handler Settings - these functions as defined in Handlers.js
        //  The handlers are not part of SWFUpload but are part of my website and control how
        //  my website reacts to the SWFUpload events.
        file_queue_error_handler : fileQueueError,
        file_dialog_complete_handler : fileDialogComplete,
        upload_progress_handler : uploadProgress,
        upload_error_handler : uploadError,
        upload_success_handler : uploadSuccess,
        upload_complete_handler : uploadComplete,

        // Button Settings
        button_image_url : "",
        button_placeholder_id : "logo",
        button_width: 92,
        button_height: 35,
        button_text : "上传logo",
        button_text_style : '',
        button_text_top_padding: 0,
        button_text_left_padding: 18,
        button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
        button_cursor: SWFUpload.CURSOR.HAND,

        // Flash Settings
        flash_url : "/swf/swfupload.swf",

        custom_settings : {
            upload_target : "divFileProgressContainer"
        },

        // Debug Settings
        debug: false
    });

};