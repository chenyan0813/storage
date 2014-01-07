<div class="panel_block" >
<form class="padding" method="POST" action="/store/calculate" >
  <input  placeholder="分类"  type="text" name="category" list="category_item" value="" autocomplete="off" />
&nbsp;
日期  <input type="date" name="sdate" class="input-medium" value=""/>
-
<input type="date" name="edate" class="input-medium" value="" />  <input type="submit" value="搜索" class="btn btn-primary"/>  
&nbsp;
 <!-- <a href="/stock/export/" >导出EXCEL</a> -->
</form>

<datalist id="category_item">
  <option value="原料" >
  <option value="产成品" >
  <option value="其他" >
</datalist>

<table class="table" id="jtable" cellspacing=0 >
  <thead>
  <tr>
    <th>品号 / 品名 / 型号</th>
    <th>单位</th>
    <th>分类</th>
    <th>库位</th>
    <th>入库</th>
    <th>出库</th>
    <th>警戒库存</th>
    <th>
      操作
    </th>
  </tr></thead>
  <tbody>
  <?php 
   foreach ($goods as $good) {
   	?>   
  <tr class="odd">
    <td><?php echo $good["Good"]["name"] . " / " . $good["Good"]["code"] . " / " . $good["Good"]["category"];?></td>
    <td><?php echo $good["Good"]["unit"];?></td>
    <td><?php echo $good["Good"]["class"];?></td>
    <td><?php echo $good["Good"]["location"];?></td>
    <td>in</td>
    <td>out</td>
    <td><?php echo $good["Good"]["alert"];?></td>
    <td>
      <a href="/store/history/view/3" >明细</a>
    </td>
  </tr>
  <?php }?>
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

