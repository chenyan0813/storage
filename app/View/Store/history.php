<div class="panel_block" >
  <div class="submenu" >
<form class="padding" method="POST" action="/store/search_history/" >
<input  placeholder="分类"  type="text" name="category" list="category_item" value="" autocomplete="off" />
&nbsp;
日期  <input type="date" name="sdate" class="input-medium" value=""/>
-
<input type="date" name="edate" class="input-medium" value=""/>
<input type="submit" value="搜索" class="btn btn-primary"/>  
&nbsp;
<a href="/store/export_history/" class="btn" >导出EXCEL</a>
 </form>
</div>

<datalist id="category_item">
</datalist>
<div class="clear" ></div>

<div class="pagination" ></div>
<table class="table table-striped" id="jtable">
<thead>
  <tr>
    <th>日期</th>
    <th>品号 / 品名 / 型号</th> 
    <th></th>
    <th>数量</th>
    <th>单位</th> 
    <th>分类</th>
    <th>操作员</th>
    <th>备注</th>
    <th width="50">操作 </th>
  </tr>
</thead>

<tbody>
  <?php 
  foreach ($goods as $good){
  ?>		
  <tr class="odd">
    <td><?php echo $good["Good"]["date"];?></td>
    <td><?php echo $good["Good"]["name"] . " / " . $good["Good"]["code"] . " / " . $good["Good"]["category"];?></td> 
    <td><?php echo $good["Good"]["alert"];?></td>
    <td class="red"><?php echo $good["Good"]["amount"];?></td>
    <td><?php echo $good["Good"]["unit"];?> </td>
    <td><?php echo $good["Good"]["class"];?></td>
    <td><?php echo $good["Good"]["user_id"];?></td>
    <td><a title="remark" ><?php echo $good["Good"]["remark"];?></a></td>  
    <td> <a href="/store/edit/<?php echo $good["Good"]["id"];?>"  >编辑</a></td>
  </tr>
  <?php }?>
</tbody>
</table>
<div class="pagination" ></div>
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



