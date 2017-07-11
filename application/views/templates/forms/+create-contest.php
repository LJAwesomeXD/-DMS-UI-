<style>
    .create_contest_component
    {
        width: 550px;
        margin: 80px auto;
        padding: 30px 20px;
        background-color: white;
        border-radius: 5px;
        z-index: 2  ;
        text-align: center;
    }

    .input
    {
        background-color: white;
        margin-top: 10px;
    }

    .input:active
    {
        background-color: white;
    }

    .close_reg_icon
    {
        position: relative;
        top : -60px;
        margin-left: 500px;
    }

    .close_reg_icon:hover
    {
        cursor: pointer;
    }

    .textspan
    {
       border: 1px solid rgb(200, 200, 200);
       border-radius: 3px;
       resize: none;
       padding: 5px 10px;
       width: 100%;
    }
</style>
<div class="create_contest_component">
     <h3>Create a New Contest</h3>
     <div class="close_reg_icon">
         <i class="remove icon"></i>
     </div>
     <div class="ui input" style="margin-top: -40px; width: 100%">
        <input type="text" style="text-align: center;" id="title" placeholder="Contest Title"/>
    </div>
    <br />
    <div class="ui left icon input" style="width: 100%">
        <textarea id="description" class="textspan" placeholder="Description"></textarea>
    </div>
    <br />
    <div class="ui left icon input" class="textspan" style="width: 100%">
        <textarea id="summary" class="textspan" placeholder="Summary"></textarea>
    </div>

    <div class="ui left icon input">
         <i class="dollar icon"></i>
        <input type="number" id="prize" placeholder="Prize  " />
    </div>
    <div class="ui left icon input">
         <i class="calendar icon"></i>
        <input type="number" id="length" placeholder="Duration (days)" />
    </div>

    <br /><br />
    <div class="ui left  icon input group">
        <input type="radio" name="gender" />
        <i class="male big icon"></i>
    </div>
    <div class="ui left icon input group">
        <input type="radio" name="gender" />
        <i class="female big icon"></i>
    </div>
    <br />
    <br />
    <div class="ui input">
        <button class="ui button primary" id="do_create_contest">Start Contest</button>
    </div>
</div>
<script>
    //register a user given a user given data
    app.create_contest = function(data, cb)
    {
        var request = $.ajax
            //payload details
            ({
                data,
                url: "create_contest",
                method: "POST"
            });

        // trigger callback function when done
        request.done(cb);
    }

      
    //closes the register component when x button is clicked
    $(".close_reg_icon").click(function(){
        $(".dimmer").fadeOut();
        $(".create_contest_form").fadeOut();
    });

    //registers a user when register button is clicked (AJAX)
    $("#do_create_contest").click(function(){

        var $form = $(".create_contest_form");

       

        //fetch and structure payload details
        var data = {
             title : $form.find("#title").val(),
             description : $form.find("#description").val(),
             summary : $form.find("#summary").val(),
             prize : $form.find("#prize").val(),
             length : $form.find("#length").val(),
             gender : $form.find("#gender").val()
         };


         app.create_contest(data, function(msg){
             window.location = '';
         });
    });
  


 /**Generate Input
    window.generateInputs = () =>
    {
            $("#title").val(chance.last() + "'s Contest"),
            $("#description").val(chance.color()),
            $("#summary").val(chance.color ()),
            $("#prize").val(chance.integer()),
            $("#length").val(chance.integer())
             $("#gender").val(chance.gender()),

    }  
    **/

</script>
