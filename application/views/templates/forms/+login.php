<style>

    .login_component
    {
        width: 300px;
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

    .close_login_icon
    {
        position: relative;
        top : -70px;
        margin-left: 250px;
    }

    .close_login_icon:hover
    {
        cursor: pointer;
    }
</style>
<div class="login_component">
     <h2>Login to DesignMyShirt</h2>
     <div class="close_login_icon">
         <i class="remove icon"></i>
     </div>

     <div class="ui left icon input" style="margin-top: -40px;">
        <i class="user icon"></i>
        <input type="text" id="username" placeholder="Username" />
    </div>
    <div class="ui left icon input">
         <i class="key icon"></i>
        <input type="password" id="password" placeholder="Password" />
    </div>
    <div class="msg" hidden></div>

    <div class="ui input">
        <button class="ui button primary" id="do_login">Log In</button>
        <button class="ui button teal">Forgot It?</button>
    </div>
</div>
<script>
    //logins a user given a login data
    app.doLogin = function(data, cb)
    {
        var request = $.ajax
            //payload details
            ({
                data,
                url: "<?=base_url()?>user/do_signin",
                method: "POST"
            });

        // trigger callback function when done
        request.done(cb);
    }

    app.loginAction = function(){
        var $form = $(".login_component");

        //fetch and structure payload details
        var data = {
             password : $form.find("#password").val(),
             username :  $form.find("#username").val()
         };

         //console.log(data);
         app.doLogin(data, function(msg){
             if(msg=="#SUCCESS")
                window.location = "user/profile";
             else
                $form.find(".msg")
                     .html("<span style='color: red'>Invalid username or password. =(</span>")
                     .hide()
                     .fadeIn();
         });
    };

    //closes the login component when x button is clicked
    $(".close_login_icon").click(function(){
        $(".dimmer").fadeOut();
        $(".login_form").fadeOut();
    });

    //logins if login button is clicked (AJAX)
    $("#do_login").click(app.loginAction);
    $(".login_component").keyup(function(e){
        if(e.keyCode==13) app.loginAction()
    })

</script>
