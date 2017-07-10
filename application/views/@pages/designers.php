<div id = "content">

<h1>Designers Hub</h1>
<br>

<div class="ui link cards">
 <?php foreach($users as $user): ?>
  <div class="card">
    <div class="image">
      <img src="<?php echo site_url('image/image3.png'); ?>">

    </div>
    <div class="content">
      <div class="header"><?=$user["username"]?></div>
      <div class="meta">
        <a><?=$user["gender"]?></a>
      </div>
      <div class="description">
        Matthew is an interior designer living in New York.
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
      <span>
        <i class="user icon"></i>
        75 Friends
      </span>
    </div>
  </div>
  <?php endforeach?>
</div>
