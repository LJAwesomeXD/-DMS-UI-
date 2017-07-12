<style>
    .table_container
    {
        width: 960px;
        margin: 0 auto;
    }
</style>
<br />
<div class="table_container">
    <table class="ui compact celled definition table">
  <thead class="full-width">
    <tr>
      <th></th>
      <th>last_name</th>
      <th>first_name</th>
      <th>username</th>
      <th>gender</th>
      <th>email</th>
      <th>is_admin</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td><?=$user["last_name"]?></td>
      <td><?=$user["first_name"]?></td>
      <td><?=$user["username"]?></td>
      <td><?=$user["gender"]?></td>
      <td><?=$user["email"]?></td>
      <td><i class="user icon"></i></td>
    </tr>
          <?php endforeach?>
      </tbody>
  <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="6">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> make ADMIN
        </div>
        <div class="ui small button">
          BLOCK
        </div>
        <div class="ui small button">
          UNBLOCK
          
        </div>
      </th>
    </tr>
  </tfoot>
</table>
</div>
