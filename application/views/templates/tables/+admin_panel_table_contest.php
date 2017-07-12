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
      <th>Contest title</th>
      <th>Contest Holder</th>
      <th>Prize</th>
      <th>Description</th>
      <th>Gender</th>
      <th>Duration</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($contests as $contest): ?>
    <tr>
       
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td><?=$contest["title"]?></td>
      <td>Admin_MarkSteady</td>
      <td><?=$contest["prize"]?></td>
      <td><?=$contest["description"]?></td>
      <td><?=$contest["gender"]?></td>
      <td><?=$contest["length"]?> day/s</td>
      <td>On Going</td>
        
    </tr>
          <?php endforeach?>
  </tbody>
  <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="7">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> APPROVE CONTEST
        </div>
        <div class="ui small button">
          PAUSE CONTEST
        </div>
         <div class="ui small button">
          RESUME CONTEST
        </div>
        <div class="ui right floated small red labeled icon button">
          DISAPPROVE CONTEST
        </div>
      </th>
    </tr>
  </tfoot>
</table>
</div>
