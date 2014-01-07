
<div class="span6" >
    <div class="panel_block" >
  <h2>编辑商品信息</h2>
  <form class="form-horizontal" method="POST" >
    <div class="control-group">
      <label class="control-label" >品号</label>
      <div class="controls"><input type="hidden" name="id" value="id" required > <input type="text" name="pid" value="pid" required ></div>
    </div>
    <div class="control-group">
      <label class="control-label" >品名</label>
      <div class="controls"><input type="text" name="pname" value="pname"  required ></div>
    </div>
    <div class="control-group">
      <label class="control-label" >型号</label>
      <div class="controls"><input type="text" name="size" value="size" >  </div>
    </div>
    <div class="control-group">
      <label class="control-label" >分类</label>
      <div class="controls"><input type="text" name="category" value="category" >    </div>
    </div> 
    <div class="control-group">
      <label class="control-label" >警戒库存</label>
      <div class="controls">
      <input type="text" name="alert_level" value="alert_level" >  </div> 
   </div>  
    <div class="control-group">    
      <label class="control-label" >库位</label>
      <div class="controls"><input type="text" name="kuwei" value="kuwei"  required  >  </div> 
   </div>  
    <div class="control-group">    
      <label class="control-label" >单位</label>
      <div class="controls"><input type="text" name="unit" value="unit"  required  >  </div> 
   </div>  
    <div class="control-group">
     <div class="controls"><input type="submit" class="btn btn-primary" value="确认修改" >   </div> 
    </div> 
  </form>
</div>
<div class="clear" ></div>
</div> 

<div class="span6" >
    <div class="panel_block" >
   <form method="POST" action="" > 
  <ul><li>
   <div><input type="hidden" name="id" value="id" required >
   <input type="hidden" name="action" value="del" >
   
现有库存     <br />

当库存为 0 时，可以将次商品从数据库中删除。 <br />
   $val['balance'] == 0 ;
<input type="submit" class="submit-button" value="删除商品" >
  </div>
  </li></ul> 
 </form>
 </div>
 </div>
