<div class="panel_block" >
  <div class="submenu" >
<form class="padding" method="POST" >
<input  placeholder="分类"  type="text" name="category" list="category_item" value="category" autocomplete="off" />
&nbsp;
日期  <input type="date" name="sdate" class="input-medium" value="2013-12-29"/>
-
<input type="date" name="edate" class="input-medium" value="2013-12-29" /> <input type="submit" value="搜索" class="btn btn-primary"/>  
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
    <th>结余</th> 
    <th>分类</th>
    <th>操作员</th>
    <th>备注</th>
  </tr>
</thead>
<tbody>

  <tr class="odd">
    <td>datetime</td>
    <td>pid / pname / size</td> 
    <td>action_label</td>
    <td class="red">num</td>
    <td>balance (unit) </td>
    <td>category</td>
    <td>doer</td>
    <td><a title="remark" >备注</a></td>
  </tr>
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



