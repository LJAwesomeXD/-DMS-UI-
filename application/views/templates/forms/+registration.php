<style>
    .reg_component
    {
        width: 550px;
        margin: 80px auto;
        padding: 30px 20px;
        background-color: white;
        border-radius: 5px;
        z-index: 10;
        text-align: center;
    }

    .input
    {
        margin-top: 10px;
        background-color: white;
    }

    .input:active
    {
        background-color: white;
    }

    .close_reg_icon
    {
        position: relative;
        top : -70px;
        margin-left: 500px;
    }

    .close_reg_icon:hover
    {
        cursor: pointer;
    }
</style>
<div class="reg_component">
     <h2>Register with DesignMyShirt</h2>
     <div class="close_reg_icon">
         <i class="remove icon"></i>
     </div>
     <div class="msg ui green segment" hidden></div>
     <div class="ui left icon input" style="margin-top: -40px;">
        <i class="user icon"></i>
        <input type="text" id="username" placeholder="Username" />
    </div>
    <div class="ui left icon input">
        <i class="at icon"></i>
        <input type="email" id="email" placeholder="E-mail Address" />
    </div>
    <div class="ui left icon input">
         <i class="key icon"></i>
        <input type="password" id="password" placeholder="Password" />
    </div>
    <div class="ui left icon input">
         <i class="key icon"></i>
        <input type="password" id="cpassword" placeholder="Confirm Password" />
    </div>

    <div class="ui divider"></div>


    <div class="ui left icon input">
        <i class="genderless icon"></i>
        <input type="text" id="first_name" placeholder="First Name" />
    </div>
    <div class="ui left icon input">
        <i class="genderless icon"></i>
        <input type="text" id="last_name" placeholder="Last Name" />
    </div>
    <div class="ui left icon input">
        <i class="text telephone icon"></i>
        <input type="text" id="contact_no" placeholder="Contact No." />
    </div>
    <div class="ui left icon input">
        <i class="mail telephone icon"></i>
        <input type="text" id="address" placeholder="Mailing Address" />
    </div>
    <br />
    <br />
    <div class="ui left  icon input group">
        <i class="male big icon"></i>
        <input type="radio" name="gender" value="Male" />
    </div>
    <div class="ui left icon input group">
        <input type="radio" name="gender" value="Female"/>
        <i class="female big icon"></i>
    </div>
    <br />
    <br />
    <div class="ui input">
        <button class="ui button primary" id="do_reg">Register</button>
    </div>
</div>
<script>
    //register a user given a user given data
    app.doReg = function(data, cb)
    {
        var request = $.ajax
            //payload details
            ({
                data,
                url: "<?=base_url()?>/user/do_signup",
                method: "POST"
            });

        // trigger callback function when done
        request.done(cb);
    }
    app.regAction = function(){

        var $form = $(".reg_component");

        //fetch and structure payload details
        var data = {
             first_name : $form.find("#first_name").val().trim(),
             last_name : $form.find("#last_name").val().trim(),
             contact_number : $form.find("#contact_no").val().trim(),
             address : $form.find("#address").val().trim(),
             gender :$form.find("[name='gender']:checked").val().trim(),
             email : $form.find("#email").val().trim(),
             password : $form.find("#password").val().trim(),
             username :  $form.find("#username").val().trim()
         };


         app.doReg(data, function(msg){
             if(msg=="#SUCCESS")
                $form.find(".msg")
                     .html("Registration successful, \
                            you many now close this box,  \
                            then log in.")
                     .hide()
                     .fadeIn();
              else
                $form.find(".msg")
                     .html("Errors were found during validation.")
                     .hide()
                     .fadeIn();
         });
    };

    //closes the register component when x button is clicked
    $(".close_reg_icon").click(function(){
        $(".dimmer").fadeOut();
        $(".reg_form").fadeOut();
    });

    //registers a user when register button is clicked (AJAX)
    $("#do_reg").click(app.regAction);
    $(".reg_component").keyup(function(e){
        if(e.keyCode == 13) app.regAction();
    });
</script>
