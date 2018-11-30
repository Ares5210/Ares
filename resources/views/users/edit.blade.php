<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>更新个人资料</h5>
    </div>
      <div class="panel-body">

        
        <div class="gravatar_edit">
          <a href="http://gravatar.com/emails" target="_blank">
            <img src="http://s.gravatar.com/avatar/da933f8ed84c786fe1e6df0430c987a4?s=100" alt="Ares" class="gravatar">
          </a>
        </div>

        <form method="POST" action="http://laravel.test/users/1">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="e3So70IpVyaWGGO3IpKR5pDb5fd4mqacWh2fEGML">

            <div class="form-group">
              <label for="name">名称：</label>
              <input type="text" name="name" class="form-control" value="Ares">
            </div>

            <div class="form-group">
              <label for="email">邮箱：</label>
              <input type="text" name="email" class="form-control" value="ares_5210@163.com" disabled="">
            </div>

            <div class="form-group">
              <label for="password">密码：</label>
              <input type="password" name="password" class="form-control" value="">
            </div>

            <div class="form-group">
              <label for="password_confirmation">确认密码：</label>
              <input type="password" name="password_confirmation" class="form-control" value="">
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
  </div>
</div>