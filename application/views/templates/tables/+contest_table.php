<style>
    .table_container
    {
        width: 960px;
        margin: 0 auto;
    }
</style>
<br />
<div class="table_container">
    <table class="ui celled padded table">
      <thead>
        <th style="width: 35px;">ID</th>
        <th>Title</th>
        <th style="width: 50px">Prize</th>
        <th style="width: 400px;">Summary</th>
        <th>Time Left</th>
        <th>Entries</th>
      </tr></thead>
      <div>
      <tbody style="overflow-y: scroll; max-height: 300">
       <?php foreach($contests as $contest): ?>
       <tr>
          <td class="single line">
            <?=$contest["contest_id"]?>
          </td>
          <td>
            <b><?=$contest["title"]?></b>
          </td>
          <td class="right aligned">
            <?=$contest["prize"]?>
          </td>
          <td>
            <?=$contest["summary"]?>
          </td>
          <td>
          </td>
          <td>
          </td>
        </tr>
    </div>
        <?php endforeach?>
      </tbody>
    </table>
</div>
