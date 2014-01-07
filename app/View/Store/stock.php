
<div class="panel_block" >
<div class="padding"><a href="/store/export/" class="btn btn-primary" >导出</a></div>

<table class="table table-striped" id="jtable" >
<thead>
  <tr> 
    <th>品号 / 品名 / 型号</th> 
    <th>分类</th>
    <th>库位</th>
    <th>库存</th>
    <th>警戒库存</th>
    <th width="50">操作 </th>
  </tr>
</thead>

<tbody>
<?php 
   foreach ($goods as $good) {
   	?>   
  <tr class="odd red">
    <td><?php echo $good["Good"]["name"] . " / " . $good["Good"]["code"] . " / " . $good["Good"]["category"];?></td>
    <td><?php echo $good["Good"]["class"];?></td>
    <td><?php echo $good["Good"]["location"];?></td>
    <td><?php echo $good[0]["balance"];?> </td>
    <td><?php echo $good["Good"]["alert"];?></td>
    <td>
      <a href="/store/history_view/<?php echo $good["Good"]["name"];?>/<?php echo $good["Good"]["code"]?>/<?php echo $good["Good"]["category"]?>" >明细</a>
      
    </td>
  </tr>
  <?php } ?>
  
</tbody>
</table>
</div>

<script type="text/javascript" src="/static/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#jtable').dataTable({"bPaginate": false,
         "oLanguage": {
            "sLengthMenu": "显示 _MENU_ 条每页",
            "sZeroRecords": "什么都没有找到 - 很抱歉",
            "sInfo": "总共 _TOTAL_ , 显示 _START_ 至 _END_ 条",
            "sSearch": "搜索",
            "sInfoEmpty": "没有数据！",
            "sInfoFiltered": "(过滤自 _MAX_ 条数据)"
        }
        });
} );
</script>