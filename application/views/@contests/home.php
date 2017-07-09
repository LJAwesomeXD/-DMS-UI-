<style>

</style>

<div id="content" style="margin-top: 130px;">
    <div class="ui grid two column">
        <?php if(isset($_SESSION["username"])): ?>
            <div class="ui six wide column">
                <div class="ui button primary" id="create_contest">
                    <i class="add icon"></i>
                      New Contest
                </div>
            </div>
        <?php endif ?>
    </div>
</div>

<div class="create_contest_form" hidden>
    <?php $this->load->view("templates/forms/+create-contest") ?>
</div>

<?php $this->load->view("templates/tables/+contest_table"); ?>


<script>
    $("#create_contest").click(function(){
        $(".dimmer").fadeIn();
        $(".create_contest_form").fadeIn();
    });
</script>
