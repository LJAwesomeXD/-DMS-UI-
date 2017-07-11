

<div id ="content">

<h1>Admin Control Panel</h1>

<br>

 <div class="ui eleven wide column dashboard_menu">
            <div class="ui pointing menu">
             <a class="active item" do-open="home">
               <i class="user icon"></i>
               Users
             </a>
             <a class="item" do-open="my_contests">
               <i class="tasks icon"></i>
               Contests
             </a>
         </div>

          <div class="viewer red ui segment">
             <div class="users_panel">
              <?php $this->load->view("templates/tables/+admin_panel_table_user"); ?>

             </div>
             <div class="contests_panel">
               	 <?php $this->load->view("templates/tables/+admin_panel_table_contest"); ?>               
               </div>
          </div>
      
       	  <script>
                $(".dashboard_menu .item").click(function(){
                     $(".dashboard_menu .active").removeClass('active');
                     $(this).addClass('active');
                     $(".viewer *").hide();
                     $(".viewer").find("." + $(this).attr("do-open")).show();
                });
          </script>
      


</div>