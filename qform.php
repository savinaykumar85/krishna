<!-- contact form start -->
<div class="floating-form" id="contact_form">
<div class="contact-opener">Send Enquiry</div>
    <div class="floating-form-heading">Send a free quote</div>
    <div id="contact_results"></div>
    <div id="contact_body">
        <label>
            <input type="text" name="qname" id="name" placeholder="Your Name Here" required="true" class="input-field">
        </label>
        <label>
            <input type="email" name="qemail" placeholder="Email Address" required="true" class="input-field">
        </label>
        <label>
            <input type="text" name="qphone" maxlength="4" placeholder="Phone" placeholder="+91" required="true" class="tel-number-field">
        </label>

         <label>
            <input type="date" name="qmdate" id="qmdate" placeholder="Moving Date" placeholder="Moving Date" required="true" class="input-field">
        </label>
        <label>
            <input type="text" name="qmfrom" required="true" placeholder="Moving From" class="input-field">
        </label>
        <label>
            <input type="text" name="qmto" required="true" placeholder="Moving To" class="input-field">
        </label>

        <label for="subject">
            <select class="select-field" name="qsub" value="Select">
            <option value="General Question">General Question</option>
            <option value="Advertise">Advertisement</option>
            <option value="Partnership">Partnership Oppertunity</option>
            </select>
        </label>
            <label for="field5">
            <textarea name="message" id="message" class="textarea-field" placeholder="Message" required="true"></textarea>
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
    position: fixed; /*Form position fixed*/
    bottom:590px;
    background:#ccc;
    z-index:9999;
    right: 0;
    }
.contact-opener { /*opener button*/
    position: relative;
    bottom: 70px;
    right: -65px;
    padding: 7px 10px;
    color: #fff;
    background: red;
    font-weight: bold;
    cursor: pointer;
    border-radius: 10px 10px 0px 0px;
    text-align: center;
    display: inline-block;
}
.floating-form-heading {
	text-align: center;
	font-size: 20px;
	margin-bottom: 10px;
	font-weight: ;
}
#contact_body input{
	width: 100%;
	padding: 6px 10px;
}
#contact_body select{
	width: 100%;
	padding: 6px 10px;
}
#contact_body textarea {
	width: 100%;
	padding: 6px 10px;
}
#contact_body label {
	display: inline-block;
	width: 100%;
	margin-bottom: 5px;
	font-weight: normal;
}
</style>


<script>
$(document).ready(function(){
    var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener") ;
    _floatbox.css("bottom", "-590px"); //initial contact form position
   
    //Contact form Opener button
    _floatbox_opener.click(function(){
        if (_floatbox.hasClass('visiable')){
            _floatbox.animate({"bottom":"-590px"}, {duration: 590}).removeClass('visiable');
        }else{
           _floatbox.animate({"bottom":"0px"},  {duration: 590}).addClass('visiable');
        }
    });
    
    //Ajax form submit
    $("#submit_btn").click(function() { 
    alert('1');
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields       
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color',''); 
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag  

            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
        });
       
        if(proceed) //everything looks good! proceed...
        {
        alert('12');
            //get input field values data to be sent to server
            post_data = {
                'user_name'     : $('input[name=name]').val(), 
                'user_email'    : $('input[name=email]').val(), 
                'country_code'  : $('input[name=phone1]').val(), 
                'phone_number'  : $('input[name=phone2]').val(), 
                'subject'       : $('select[name=subject]').val(), 
                'msg'           : $('textarea[name=message]').val()
            };
            
            //Ajax post data to server
            //$.post('floating-contact-form.php', {suggest: "Rahul"}, function(response, status){  
                //console.log(status);
                //console.log(response);
                // if(response.type == 'error'){ //load json data from server and output message     
                //     output = '<div class="error">'+response.text+'</div>';
                //     //output = '<div class="error">'+response+'</div>';
                // }else{
                //     output = '<div class="success">'+response.text+'</div>';
                //     //output = '<div class="success">'+response+'</div>';
                //     //reset values in all input fields
                //     $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
                // }
                // $("#contact_form #contact_results").show().html(output).slideDown();
            //});
            
           console.log($.ajax({
                url: 'floating-contact-form.php',
                data: {myData:post_data},
                method: 'POST', // or GET
                success: function(msg) {
                    //console.log("check="+msg);
                }
            }));
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});
</script>