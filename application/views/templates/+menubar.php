<div class="menubar-component">
    <div class="ui secondary pointing menu">
        <a href="<?=base_url()?>pages/about" class="item about_pg">
            Guidelines
        </a>
        <a href="<?=base_url()?>pages/designers" class="item designers_pg">
            Designers
        </a>
        <a href="<?=base_url()?>contests/home" class="item contests_pg">
            Contests
        </a>
        <a href="<?=base_url()?>pages/shop"class="item shop_pg">
            Shop
        </a>

        <script>
            var page = "<?=$this->router->class?>";

               $(function(){
                   if(page == "contests")
                        $(".contests_pg").addClass('active');
                    if(page == "contests")
                         $(".contests_pg").addClass('active');
               })
        </script>

        <div class="right menu">
            <?php if(isset($_SESSION["username"])): ?>
                <a href="<?=base_url()?>user/profile"
                   class="ui item left icon profile">
                   <i class="user icon"></i>&nbsp;
                   My Profile
                </a>

                <a href="<?=base_url()?>user/do_logout"
                   class="ui item logout"
                   style="color: rgb(50, 70, 80); font-weight: bold;">
                   Log Out
                </a>
            <?php else: ?>
                <a class="ui item  login_opener"
                   style="color: rgb(50, 70, 80); font-weight: bold;">
                   Log In
                </a>
                <a class="ui item reg_opener"
                   style="color: rgb(50, 70, 30); font-weight: bold;">
                   Register
                </a>
            <?php endif ?>

        </div>
  </div>

  <style>
      .login_form, .reg_form
      {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
      }
  </style>
  <div class="login_form" hidden>
      <?php $this->load->view("templates/forms/+login")?>
  </div>
  <div class="reg_form" hidden>
      <?php $this->load->view("templates/forms/+registration")?>
  </div>
  <script>
        //display the login form when trigger is clicked
        $(".login_opener").click(function(){
            $(".dimmer").fadeIn();
            $(".login_form").fadeIn();
        });
        //display the registration form when trigger is clicked
        $(".reg_opener").click(function(){
            $(".dimmer").fadeIn();
            $(".reg_form").fadeIn();
        });
  </script>

</div>
