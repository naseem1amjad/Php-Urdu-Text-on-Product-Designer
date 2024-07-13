<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Desinger By Naseem Amjad</title>
    <meta name="description" content="PRODUCT DESIGNER BY Naseem Amjad">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- your stylesheet with modifications -->
    <link href="assets/css/jquery-ui.css" rel="stylesheet">

	<style>	
	.ur {
		font-family: 'Jameel Noori Nastaleeq', 'Nafees', 'Noto Naskh Urdu', 'Noto Naskh Arabic', 'Arial';
		direction: rtl;
		max-width: 100%;
		padding: 4px;		
		background-color: #DCFFDC;
	}	

	.textarea {
		height: 4em;
    	width: 480px;
		max-width: 96%;
		padding: 5px;
		line-height: 1.5em;
	}

	.urdu_keyboard_image {
		height: auto;
		width:480px;		
		max-width: 96%;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="assets/dist/jquery.fontpicker.css">	
    <style>
    #preview_t{
        width:100%;
        height:100%;
        display:inline;
        overflow:hidden;
    }

    #preview_front,#preview_back{
        width:100%;
        height:100%;
        background-repeat:no-repeat;
        background-position: center; 
        background-size:100%;
        text-align: left;
    }
    .colors{
        border-radius:50%;
        width:20px;
        height:20px;
        display:inline-block;
    }

    ::-webkit-scrollbar {
        width: 10px;
        height:10px;
    }
    
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 

    }
    
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
        background-color: #1abc9c;
    }

    .new_text{
        display: inline-block;
        float:left;
    }

    .new_icon,.new_text{
        cursor:move;
        position:absolute;        
        padding:0px;
    }

    .new_icon .property_icon,.new_text .property_icon{
        display:none;
    }

    .new_icon:hover,.new_text:hover,.new_icon:active,.new_text:active{
        border:1px solid #95a5a6;
    }

    .delete_icon,.delete_text,.drag_text{
        background:#e74c3c;
        height:20px;
        width:20px;
        display:block;
        cursor:pointer;
        position:absolute;
        top:-10px;
        border-radius:5px;
        -webkit-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .delete_icon,.delete_text{
        right:-18px;
        background-size:20px 20px;
        background-image:url(../images/del.jpg);
    }

    .delete_icon:hover,.delete_text:hover,.drag_text:hover{ 
        top:-10px;
        right:-18px;
        
    }

    .dis_none{
        display:none;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .Text_input{
        height:auto;
        width:auto;
    }


    .drag_text{
        background:#3498db;
        left:-12px;
    }

    #text_style{
        background:none;
        border:none;
        width:auto;
        height:auto;
        resize:none;
        overflow:hidden;
    }

    #text_div{
        float:left;
    }

    #menu,#options,#preview_t,#view_mode,#overview{
        float:left;
        //border:1px solid #000;
    }


    .front_print,.back_print{
        width:470px;
        height:500px;
        //border:1px solid #acacac;
        position:absolute;
        padding:5px;
    }

    .popup {
    width: 100%;
    height: 100%;
    display: none;
    position: fixed;
    top: 0px;
    left: 0px;
    background: rgba(0, 0, 0, 0.75);
    }

    .popup {
    text-align: center;
    }

    .popup:before {
    content: '';
    display: inline-block;
    height: 100%;
    margin-right: -4px;
    vertical-align: middle;
    }

    .popup-inner {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
    position: relative;
    max-width: 1100px;
    width: 90%;
    padding: 40px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
    border-radius: 3px;
    background: #fff;
    text-align: center;
    }

    .popup-inner h1 {
    font-family: 'Roboto Slab', serif;
    font-weight: 700;
    }

    .popup-inner p {
    font-size: 24px;
    font-weight: 400;
    }

    .popup-close {
    width: 34px;
    height: 34px;
    padding-top: 4px;
    display: inline-block;
    position: absolute;
    top: 20px;
    right: 20px;
    -webkit-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
    border-radius: 100%;
    background: transparent;
    border: solid 4px #808080;
    }

    .popup-close:after,
    .popup-close:before {
    content: "";
    position: absolute;
    top: 11px;
    left: 5px;
    height: 4px;
    width: 16px;
    border-radius: 30px;
    background: #808080;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }

    .popup-close:after {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }

    .popup-close:hover {
    -webkit-transform: translate(50%, -50%) rotate(180deg);
    transform: translate(50%, -50%) rotate(180deg);
    background: #f00;
    text-decoration: none;
    border-color: #f00;
    }

    .popup-close:hover:after,
    .popup-close:hover:before {
    background: #fff;
    }

    img {
    image-rendering: auto;
    }
    </style>
</head>
<body>
<!-- navbar-->
    
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="row box" id="productMain" style="background-color:white;">
                        <div class="col-sm-12">
                                <h3>Products</h3>
                                <div class="col-md-1">
                                    <div class="row">
                                        <div class="box" id="product_types" style="margin:1px;" title="">
                                            <img src="assets/img/product/tee/white/white_front.png" height="35px" width="100%">
                                            
                                        </div>
                                        <div class="box text-center" id="color_palettes" style="margin:1px;" title="Front">
                                            <i class="fa fa-paint-brush" style="font-size:35px;"></i>
                                        </div>
                                        <div class="box text-center" id="design_templates" style="margin:1px;" title="Designs">
                                            <i class="fa fa-image" style="font-size:35px;"></i>
                                        </div>
                                        <div class="box text-center" id="upload_design" style="margin:1px;" title="Import Design">
                                           <i class="fa fa-upload" style="font-size:35px;"></i>
                                        </div>
                                        <div class="box text-center" id="add_text" style="margin:1px;" title="Add Text">
                                            <i class="fa fa-font" style="font-size:35px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="product_type_content">
                                            <div class="box" style="height:500px;padding:0px;overflow-y:scroll;">
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="tee" style="margin:1px;">
                                                        <img src="assets/img/product/tee/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="vneck" style="margin:1px;">
                                                        <img src="assets/img/product/vneck/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="hoodie" style="margin:1px;">
                                                        <img src="assets/img/product/hoodie/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="mug" style="margin:1px;">
                                                        <img src="assets/img/product/mug/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="card" style="margin:1px;">
                                                        <img src="assets/img/product/card/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4" style="padding:0px;">
                                                    <div class="box product_type" id="whiteboard" style="margin:1px;">
                                                        <img src="assets/img/product/whiteboard/white/white_front.png" height="60px" width="100%">
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="product_color_content" style="display:none;">
                                            <div class="box" style="height:500px;padding:15px;overflow-y:scroll;">
                                                <div class="col-md-12 text-center">
                                                    <div class="colors" id="white" style="background-color:white;border:1px solid black;"></div>
                                                    <div class="colors" id="black" style="background-color:black;"></div>
                                                    <div class="colors" id="red" style="background-color:red;"></div>
                                                    <div class="colors" id="navy" style="background-color:navy;"></div>                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product_design_template" style="display:none;">
                                            <div class="box" style="height:500px;padding:0px;overflow-y:scroll;">
                                                <?php
                                                    $dir    = 'assets/img/design_templates/';
                                                    $files1 = scandir($dir);
                                                    //$files2 = scandir($dir, 1);
                                                    foreach ($files1 as &$value) {
                                                        if (strpos($value,'.png') !== false) {
                                                            //echo 'true';
                                                            ?>
                                                                <div class="col-sm-3" style="padding:0px;">
                                                                    <div class="box sample_icons" id="tee" style="margin:1px;padding:16px;">
                                                                        <img src="assets/img/design_templates/<?php echo $value; ?>" height="40px" width="100%">
                                                                    </div>
                                                                </div> 
                                                            <?php
                                                            // echo '<div class="sample_icons"><img src="tdesignAPI/images/Images/' .$value. '" width="100%" height="100%" /></div>' ;
                                                        }elseif(strpos($value,'.') === false){
                                                            //echo '<div class="sample_icons"><img src="tdesignAPI/images/folder.png" width="100%" height="100%" />' .$value. '</div>' ;
                                                        }
                                                            //echo "Value: $value<br />\n";
                                                    }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="product_upload_design" style="display:none;">
                                            <div class="box" style="height:500px;padding:15px;overflow-y:scroll;">
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <div class="custom_icon">
                                                            <form id="form1" runat="server">
                                                                <label for="usr">Choose Image:</label>
                                                                <input type='file' id="imgInp" class="form-control">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="product_custom_font" style="display:none;">
                                            <div class="box" style="height:500px;padding:15px;overflow-y:scroll;">
                                                <div class="col-md-12">
                                                    <div class="custom_font">
                                                    <div class="form-group">
                                                    <label for="kbd">Choose Keyboard:</label>
                                                            <select id="keyboard_type" class="form-control" onchange="changeKeyboard(this.value);">
                                                                <option selected="selected" value="sys">System</option>
                                                                <option value="urd">Urdu</option>				
                                                            </select>                                                    
                                                        </div>                                                        
                                                        <div class="form-group">                                                        
                                                        <input id="font1" type="text">                                                        
                                                        <div class="font_styling" style="margin-bottom:0px;">                                                        
                                                            <select id="font_size" class="form-control" title="Font Size" onchange="changeFontSize(this.value);" style="display:inline-block !important;width:80px;">
                                                                <?php
                                                                    for($i=10;$i<=64;$i+=2){
                                                                ?>
                                                                    <option value="<?php echo $i; ?>px"><?php echo $i; ?>px</option>
                                                                <?php       
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>                                                        
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="usr">Choose Color:</label>
                                                          <input type="color" class="form-control" id="favcolor" name="favcolor" onChange="changeColor(this.value);" placeholder="Color Name" />
                                                        </div>
                                                        <hr>                                                       
                                                        <textarea id='u' class="ur textarea" placeholder="یہاں لکھیں"></textarea>
		                                                <textarea id='e' class="textarea" placeholder="Type here."></textarea>
                                                        <p><img class="urdu_keyboard_image" id="kbd_u" title="Urdu Phonetic Keyboard Layout (Unclickable)" alt="Image of Urdu Phonetic Keyboard to be used by Urdunize component" src="assets/img/urdu_phonetic_keyboard.png"/></p>
                                                        
                                                        <textarea readonly id="custom_text" rows="1" class="form-control" placeholder="Preview..."></textarea>
                                                        <hr>
                                                        <button type="button" class="btn btn-primary" id="apply_text">
                                                            New
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="update_text">
                                                            Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="box" style="height:500px;">
                                            <div id='preview_t'>
                                                <div id="preview_front">
                                                    <div class="front_print">

                                                    </div>
                                                </div>
                                                <div id="preview_back">
                                                    <div class="back_print">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-1">
                                    <div class="row">
                                        <div class="box" id="o_front_ctrl" style="margin:1px;" title="Front">
                                            <img id="o_front" src="assets/img/product/tee/white/white_front.png" height="35px" width="100%">
                                            
                                        </div>
                                        <div class="box" id="o_back_ctrl" style="margin:1px;" title="Back">
                                            <img id="o_back" src="assets/img/product/tee/white/white_front.png" height="35px" width="100%">
                                        </div>
                                        <div class="box preview_images text-center" style="margin:1px;" title="Preview">
                                            <i class="fa fa-eye fa-2x"></i>
                                        </div>
                                        <input type="hidden" name="img_front" id="img_front" value="" />
                                        <input type="hidden" name="img_back" id="img_back" value="" />
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup" pd-popup="popupNew">
            <div class="popup-inner">
                <a class="popup-close" pd-popup-close="popupNew" href="#"> </a>
                <div class="row" style="overflow-x:scroll;">
                    <div class="col-md-6">
                        <div id="image_product_preview_front" ></div>
                    </div>
                    <div class="col-md-6">
                        <div id="image_product_preview_back"></div>
                    </div>
                </div>
            </div>
            
        </div>
        <center><p>Developed by <a href="https://www.ajsoftpk.com/naseem_amjad/">Naseem Amjad</a></p></center>
    </div>
    <!-- Javascript files-->
    <script
    src="assets/js/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/html2canvas.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/urdunize.js"></script>

    <script type="text/javascript">
        var $sel_text;//selected textbox (used in update_text)
        function image_icon($srcimg){
            $("."+$y_pos+"_print").append("<div id=icon"+($nos_icons)+" class='new_icon' onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);'><span class='delete_icon property_icon' onClick='delete_icons(this);'><i class='fa fa-trash' style='color:white;margin-left:5px;'></i></span><img src='"+$srcimg+"' width='100%' height='100%' /></div>");
            $( "#icon"+($nos_icons)+"" ).draggable({ containment: "parent" });
            $( "#icon"+($nos_icons)+"" ).resizable({
                maxHeight: 480,
                maxWidth: 450,
                minHeight: 10,
                minWidth: 10,
                handles: 'n, e, s, w, se, ne, sw, nw'
                });
            $( "#icon"+($nos_icons)+"" ).css({'top':'100px','left':'150px'});
            ++$nos_icons;
        }


        function textbox_clicked(e){//nsm
            $("textarea#custom_text").val($(e).text());
            $("textarea#custom_text").css("color",$(e).css("color"));
            $("textarea#custom_text").css("font-size",$(e).css("font-size"));
            var txtlang=$(e).attr("data-textlanguage");
            if (txtlang=="ur"){
                $("#keyboard_type").val("urd");                
                changeKeyboard("urd");
            }else{
                $("#keyboard_type").val("sys");                
                changeKeyboard("sys");
            }
            
            var txtrgb=$(e).css("color");
            const rgb2hex = (rgb) => `#${rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/).slice(1).map(n => parseInt(n, 10).toString(16).padStart(2, '0')).join('')}`

            
            $("#favcolor").val(rgb2hex(txtrgb));
            $("#font_size").val($(e).css("font-size"));

            $sel_text=$(e).attr("id");
            $("#update_text").show();
            
        }

        function delete_icons(e){
            
            $(e).parent('.new_icon').remove();
            
            --$nos_icons;
        }

        function show_delete_btn(e){

            $(e).children('.property_icon').show();
        }
        function hide_delete_btn(e){

            $(e).children('.property_icon').hide();
        }
        function delete_text(f){
            $(f).parent('.new_text').remove();
            --$nos_icons;
        }

        var $type="tee",$color="white",$y_pos="front",$nos_icons=0,$nos_text=0,$custom_img=0;

        //ONLOAD
        $("#preview_front").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png) ') ;
        $("#preview_back").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png) ') ;
        // $("#preview_back").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_back.png) ') ;
        $("#o_front").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png');
        $("#o_back").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_back.png');
        $("#preview_back").addClass('dis_none') ;
        $('.product_type').click(function(){
            $type=$(this).attr('id');
            change_it();
        });


        function change_it(){
            $("#preview_front").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png) ') ;
            $("#preview_back").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_'+$y_pos+'.png) ') ;
            $("#o_front").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png');
            $("#o_back").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_back.png');
        }


        $("#o_front_ctrl").click(function(){
            $y_pos="front";
                    $("#preview_front").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_'+$y_pos+'.png) ') ;
                    $("#o_front").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png');
                    $("#o_back").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_back.png');
                    $("#preview_front").removeClass('dis_none') ;
                    $("#preview_back").addClass('dis_none') ;
                    change_it();
        });
        $("#o_back_ctrl").click(function(){
            $y_pos="back";
                    $("#preview_back").css('background-image', 'url(assets/img/product/'+$type+'/'+$color+'/'+$color+'_'+$y_pos+'.png) ') ;
                    $("#o_front").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_front.png');
                    $("#o_back").attr('src','assets/img/product/'+$type+'/'+$color+'/'+$color+'_back.png');
                    $("#preview_back").removeClass('dis_none') ;
                    $("#preview_front").addClass('dis_none') ;
                    change_it();
        });

        $('#color_palettes').click(function(){
            $('.product_type_content').hide();
            $('.product_design_template').hide();
            $('.product_custom_font').hide();
            $('.product_upload_design').hide();
            $('.product_color_content').show();
        });

        $('#product_types').click(function(){
            $('.product_color_content').hide();
            $('.product_design_template').hide();
            $('.product_custom_font').hide();
            $('.product_upload_design').hide();
            $('.product_type_content').show();
        });

        $('#design_templates').click(function(){
            $('.product_color_content').hide();
            $('.product_type_content').hide();
            $('.product_custom_font').hide();
            $('.product_upload_design').hide();
            $('.product_design_template').show();
        });

        $('#upload_design').click(function(){
            $('.product_color_content').hide();
            $('.product_type_content').hide();
            $('.product_design_template').hide();
            $('.product_custom_font').hide();
            $('.product_upload_design').show();
        });


        $('#add_text').click(function(){
            $('.product_color_content').hide();
            $('.product_type_content').hide();
            $('.product_design_template').hide();
            $('.product_upload_design').hide();
            $('.product_custom_font').show();
        });


        $('.colors').click(function(){
            $color=$(this).attr('id');
            change_it();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image_icon(e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $("#imgInp").change(function() {
            readURL(this);
        });

        $(".sample_icons").click(function(){
            var $srcimg=$(this).children("img").attr('src');
            image_icon($srcimg);
            
        });


        function b() {
            $('#custom_text').toggleClass('bold_text');
            $("#bold_button").toggleClass('box-shadow', '0 0 10px inset #3c3c3c');
        }

        function i() {
            $('#custom_text').toggleClass('italic_text');
        }

        function changeFont(_name) {
            $('#custom_text').css("font-family", _name);
            //alert(_name);
        }       

        function changeFontSize(_size) {
            $('#custom_text').css("font-size", _size);
        }

        function changeColor(_color) {
            $('#custom_text').css("color", _color);
        }


        $('#apply_text').click(function(){
            if ($("#naseem_amjad_keyboard_language").val()=="ur"){
                $("textarea#custom_text").val($("#u").val());                
            } else {
                $("textarea#custom_text").val($("#e").val()); 
            }
            var text_val = $("textarea#custom_text").val();
            if(!text_val)
                return false;
            
                $("."+$y_pos+"_print").append("<div id=text"+($nos_text)+" class='new_text' data-textlanguage="+$('#naseem_amjad_keyboard_language').val()+" onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);' onclick='textbox_clicked(this);'><span class='drag_text property_icon'  ><i class='fa fa-arrows' style='color:white;margin-left:3px;'></i></span><div id='text_style' >"+text_val+"</div><span class='delete_text property_icon' onClick='delete_text(this);' ><i class='fa fa-trash' style='color:white;margin-left:5px;'></i></span></div>");
                $( "#text"+($nos_text)+"" ).draggable({ containment: "parent" });
                $( "#text"+($nos_text)+"" ).resizable({                  
                });

            var $font_          =$('#custom_text').css("font-family");
            var $font_size      =$("#font_size").val();
            var $font_weight    =$('#custom_text').css("font-weight");
            var $font_style     =$('#custom_text').css("font-style");
            var $font_color     =$("#favcolor").val();
            
            //$("custom_text").height( $("custom_text")[0].scrollHeight );

            $("#text"+($nos_text)+"" ).css("font-family", $font_);
            $("#text"+($nos_text)+"" ).css("font-size", $font_size);
            $("#text"+($nos_text)+"" ).css("font-weight", $font_weight);
            $("#text"+($nos_text)+"" ).css("font-style", $font_style);
            $("#text"+($nos_text)+"" ).css("color", $font_color);
            $("#text"+($nos_text)).css({'top':'100px','left':'150px'});
            //document.getElementById("text"+($nos_text)+" textarea").style.textDecoration=(""+$font_u+"");
            ++$nos_text;
            
            $("#update_text").hide();

            
        });

        $('#update_text').click(function(){
            if ($("#naseem_amjad_keyboard_language").val()=="ur"){
                $("textarea#custom_text").val($("#u").val());                
            } else {
                $("textarea#custom_text").val($("#e").val()); 
            }
            var text_val = $("textarea#custom_text").val();
            if(!text_val)
                return false;
            /*
                $("."+$y_pos+"_print").append("<div id=text"+($nos_text)+" class='new_text' data-textlanguage="+$('#naseem_amjad_keyboard_language').val()+" onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);' onclick='textbox_clicked(this);'><span class='drag_text property_icon'  ><i class='fa fa-arrows' style='color:white;margin-left:3px;'></i></span><div id='text_style' >"+text_val+"</div><span class='delete_text property_icon' onClick='delete_text(this);' ><i class='fa fa-trash' style='color:white;margin-left:5px;'></i></span></div>");
                $( "#text"+($nos_text)+"" ).draggable({ containment: "parent" });
                $( "#text"+($nos_text)+"" ).resizable({                  
                });
*/
            
            var $font_          =$('#custom_text').css("font-family");
            var $font_size      =$('#custom_text').css("font-size");
            var $font_weight    =$('#custom_text').css("font-weight");
            var $font_style     =$('#custom_text').css("font-style");
            var $font_color     =$('#custom_text').css("color");
            
            
            //alert($sel_text);
            
            //alert(text_val);
            $("#"+$sel_text).text(text_val);
            //debugger;
            $("#"+$sel_text).css("font-family", $font_);
            $("#"+$sel_text).css("font-size", $font_size);
            $("#"+$sel_text).css("font-weight", $font_weight);
            $("#"+$sel_text).css("font-style", $font_style);
            $("#"+$sel_text).css("color", $font_color);            
            
        });


        $('.preview_images').click(function(){
            capture();


/*
            html2canvas(document.querySelector("#preview_front")).then(canvas => {
                document.body.appendChild(canvas)
            });
*/

            //$('.modal').addClass('in');
            // $('.layer').css('visibility','visible');
            //$('.layer').css('visibility','visible');
            //$('body').css('position','fixed');
            //$('.modal').css({'display':'block','height':'auto'});
            //$('.design_api').css('position', 'fixed');
            //$('.modal').css('overflow', 'scroll');
        });

        function capture() {
            $("#preview_back").removeClass('dis_none') ;
            $("#preview_front").removeClass('dis_none') ;
            $("#image_product_preview_front").empty();
            $("#image_product_preview_back").empty();
            // $("#image_reply").empty();
            $('[pd-popup="popupNew"]').fadeIn(800);
            
            $("#preview_front").css("text-align", "left");//try to fix Urdu text not rendering in capture
            $("#image_product_preview_front").css("text-align", "left");

            html2canvas(document.querySelector("#preview_front")).then(canvas => {
                document.getElementById("image_product_preview_front").appendChild(canvas);
            });
            html2canvas(document.querySelector("#preview_back")).then(canvas => {
                document.getElementById("image_product_preview_back").appendChild(canvas);
                if($y_pos=="front"){
                    $("#preview_back").addClass('dis_none') ;
                }
                else{
                    $("#preview_front").addClass('dis_none') ;
                }
                
            });


        }

        $('[pd-popup-close]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('pd-popup-close');
            $('[pd-popup="' + targeted_popup_class + '"]').fadeOut(200);

            e.preventDefault();
        });
    </script>
    <script src="assets/dist/jquery.fontpicker.js"></script>
	<script>

	function applyFont(element, fontSpec) {
		if (!fontSpec) {
			// Font was cleared
			console.log('You cleared font');

			$(element).css({
				fontFamily: 'inherit',
				fontWeight: 'normal',
				fontStyle: 'normal'
			});
			return;
		}
		console.log('You selected font: ' + fontSpec);

// Split font into family and weight/style
var tmp = fontSpec.split(':'),
	family = tmp[0],
	variant = tmp[1] || '400',
	weight = parseInt(variant,10),
	italic = /i$/.test(variant);

// Apply selected font to element
$(element).css({
	fontFamily: "'" + family + "'",
	fontWeight: weight,
	fontStyle: italic ? 'italic' : 'normal'
});
}
	$('#font1')
	.fontpicker()
	.on('change', function() {
	   applyFont('#u', this.value);
       applyFont('#e', this.value);
       applyFont('#custom_text', this.value);
	});
	</script>

    <script>
		function myinitialize(){
			var $hiddenInput = $('<input/>',{type:'hidden',id:"naseem_amjad_keyboard_language",value:$("#keyboard_type").val()});
			$hiddenInput.appendTo('body');

			$("#u").val("");
			$("#e").val("");
			connectKeyboard("#u");
			hideKeyboard("#u","rtl");
			//hideKeyboard("#e","ltr");

            $("#font_size").val("18px");

            $("#update_text").hide();
		}

		function changeKeyboard(_name){
			if (_name=="urd" || _name=="arb"){
				showKeyboard("#u","rtl",false);
				hideKeyboard("#e","ltr");
				$("#naseem_amjad_keyboard_language").val("ur");
			}
			else
			{				
				hideKeyboard("#u","rtl",false);
				showKeyboard("#e","ltr");
				$("#naseem_amjad_keyboard_language").val("en");
			}
		}		

		myinitialize();
	</script>
</body>
</html>
