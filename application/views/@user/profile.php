<div id="content">
    <div class="ui grid two column">
        <!--Profile Card-->
        <div class="ui five wide column">
            <div class="ui violet card">
              <div class="image">
                <img style="height: 100%; width: 100%" src="<?php echo site_url('image/image5.png'); ?>">
              </div>
              <div class="content">
                <a class="header">.{username}</a>
                <div class="meta">
                  <span class="full-name">{fname} {lname}</span>
                </div>
                <div class="description">
                   <?=$gender?>
                </div>
              </div>
              <div class="extra content">
                <a>
                  <i class="paint brush icon" title="Entries submitted"></i>
                  120 &nbsp;
                  <i class="cocktail icon" title="Contests won"></i>
                  120 &nbsp;
                  <i class="ticket icon" title="Contests joined"></i>
                  120 &nbsp;
                  <i class="clone icon" title="Contests made"></i>
                  120 &nbsp;
                </a>
              </div>
            </div>
        </div>

        <!--Dasboard Menu Portion-->
        <div class="ui eleven wide column dashboard_menu">
            <div class="ui pointing menu">
             <a class="active item" do-open="home">
               <i class="home icon"></i>
             </a>
             <a class="item" do-open="my_contests">
               <i class="tasks icon"></i>
               My Contests
             </a>
             <a class="item" do-open="my_entries">
               <i class="paint brush icon"></i>
               My Entries
             </a>
             <a class="item" do-open="notification">
               <i class="mail icon"></i>
               Notification
             </a>
             <a class="item" do-open="awards">
               <i class="cocktail icon"></i>
               Awards
             </a>
             <a class="item" do-open="handshakes">
               <i class="comments icon"></i>
               Handshakes
             </a>
         </div>

         <!--Dashboard Viewer Portion-->
         <div class="viewer red ui segment">
             <div class="home">
              I love DesignMyShirt.com
             </div>
             <div class="my_contests" hidden>
                 My Contests
             </div>
             <div class="my_entries" hidden>
                 My Entries
             </div>
             <div class="notification" hidden>
                 Notification
             </div>
             <div class="awards" hidden>
                 Awards
             </div>
             <div class="handshakes" hidden>
                 Handshakes
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
    </div>


    <br />

    <div class="ui divider"></div>

    <div class="ui grid">
      <div class="four wide column">
        <div class="ui vertical fluid tabular menu">
          <a class="active item">
            Update Profile
          </a>
          <a class="item">
            Uploader
          </a>
          <a class="item">
            Notes
          </a>
          <a class="item">
            Advanced
          </a>
          <a class="item">
            <i class="users icon"></i>
            Admin Stuff.
        </div>
      </div>
      <div class="twelve wide stretched column">
            <div class="ui segment">
              This is an stretched grid column. This segment will always match the tab height
            </div>
          </div>
      </div>
    </div>

