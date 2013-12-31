<div class="span6" >
  <div class="panel_block" >
    <h2>修改企业名称</H2> 
    <form method="POST" >
    <ul>
      <li>
        <input placeholder="企业名称"  type="text" class="long"  name="title" value="title" />
        <input type="submit"  value="修改企业名称" /> 
        </li>
      </ul>
    </form> 
  </div>

  <div class="panel_block" >
    <h2>分类管理</H2>
    <form method="POST" >
      <ul>
        <li><textarea class="long" name="category" style="width:90%;height:80px;">category</textarea><input type="submit" value="确认提交" /></li>
      </ul>
    </form> 
  </div>
  
  <div class="panel_block" >
    <h2>数据导入</H2> 
    <form enctype="multipart/form-data" method="POST" >
      <ul>
        <li>
        <input placeholder="企业名称"  type="file" class="medium"  name="file" value="" />
        <input type="submit"  value="导入库存数据" /> 
        </li>
            <li class="notice" >
        下载 <a href="/static/eku.xls" >模板文件</a>， 录入数据后另存为 csv 格式，后导入。
        </li>
      </ul>
    </form> 
  </div>

  <div class="panel_block" >
    <h2>数据清空</H2> 
    <form method="POST" >
      <ul>
        <li><h4></h4></li>
        <li>
        <input placeholder="输入管理帐号密码"  type="password" class="medium"  name="password" value="" />
        <input type="submit"  value="清空现有数据" /> 
        </li>
      </ul>
    </form>
  </div>
</div> 
<div class="span6">
  <div class="panel_block" >
    <h2>系统版本</H2> 
    <form method="POST" >
      <ul>
        <li>Open Source Edition</li>
      </ul>
    </form> 
  </div>
  <div class="panel_block" >
    <h2>用户管理</H2>
    <form method="POST" >      <ul>
        <li>
        <table>
          <tr><td>email</td><td>姓名</td><td></td></tr>
          
            <tr>
              <td>email</td><td><input type="text" name="users['id']" value="users/id" class="short" ><td>
              <td>管理员':'删除/清空密码 </td>
            </tr>
         
        </table></li>
        <li><input type="submit" value="更新用户"  class="btn"  /></li>
    </ul>
    </form>
  </div>
  <div class="panel_block" >
  <h2>添加用户</H2>
  <ul>
    <li>
    <form method="POST" action="/sys/add_user/" >
      <input type="hidden" value="id" name="app_id" />
      每行输入一个 email 地址
      <textarea name="add_users" style="width:90%;height:80px;"></textarea>
      <input type="submit" value="添加用户"  class="btn"  /></li>
      <li> <div class="alert" >注意： 添加完成后，用添加的 email登录，系统会记住第一次登录的密码为登录密码</div> </li>
    </ul>
  </div>
  
</div>
