 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 

<!-- contact form start -->
<div class="floating-form" id="contact_form">
<div class="contact-opener">Open Contact Form</div>
    <div class="floating-form-heading">Please Contact Us</div>
    <div id="contact_results"></div>
    <div id="contact_body">
        <label><span>Name <span class="required">*</span></span>
            <input type="text" name="name" id="name" required="true" class="input-field">
        </label>
        <label><span>Email <span class="required">*</span></span>
            <input type="email" name="email" required="true" class="input-field">
        </label>
        <label><span>Phone <span class="required">*</span></span>
            <input type="text" name="phone1" maxlength="4" placeholder="+91" required="true" class="tel-number-field">
            —<input type="text" name="phone2" maxlength="15" required="true" class="tel-number-field long">
        </label>
        <label for="subject"><span>Regarding</span>
            <select name="subject" class="select-field">
            <option value="General Question">General Question</option>
            <option value="Advertise">Advertisement</option>
            <option value="Partnership">Partnership Oppertunity</option>
            </select>
        </label>
            <label for="field5"><span>Message <span class="required">*</span></span>
            <textarea name="message" id="message" class="textarea-field" required="true"></textarea>
        </label>
        <label>
            <span>&nbsp;</span><input type="submit" id="submit_btn" value="Submit">
        </label>
    </div>
</div>
<!-- contact form end -->

<style>
.floating-form { /*contact form wrapper*/
    max-width: 300px;
    padding: 30px 30px 10px 30px;
    border: 1px solid #ddd;
    right: 10px;
    position: fixed; /*Form position fixed*/
    }
.contact-opener { /*opener button*/
    position: absolute;
    left: -88px;
    transform: rotate(-90deg); /* rotate button -90deg */
    top: 100px;
    padding: 9px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.43);
    cursor: pointer;
    border-radius: 5px 5px 0px 0px;
}</style>


<script>
$(document).ready(function(){
    var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener") ;
    _floatbox.css("right", "-322px"); //initial contact form position
   
    //Contact form Opener button
    _floatbox_opener.click(function(){
        if (_floatbox.hasClass('visiable')){
            _floatbox.animate({"right":"-322px"}, {duration: 300}).removeClass('visiable');
        }else{
           _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
        }
    });

    //Effect on Scroll
    $(window).scroll(function(){
        if(_scroll){
            _floatbox.animate({"top": "30px"},{duration: 300});
            _scroll = false;
        }
        if(_timer !== false){ clearTimeout(_timer); }          
            _timer = setTimeout(function(){_scroll = true;
            _floatbox.animate({"top": "10px"},{easing: "linear"}, {duration: 500});}, 400);
    });

});
</script>