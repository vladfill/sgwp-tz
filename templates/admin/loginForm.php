<?php include "templates/include-admin/header.php";
include "templates/include-admin/nav.php"; ?>



<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">Вход</div>
      <div class="panel-body">
        <?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="alert bg-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $results['errorMessage'] ?>
        </div>
        <?php } ?>
        <form  action="admin.php?action=login" method="post" role="form">
          <fieldset>
            <div class="form-group">
              <input  type="text" name="username" id="username" placeholder="Логин" required autofocus maxlength="20" class="form-control">
            </div>
            <div class="form-group">
              <input  type="password" name="password" id="password" placeholder="Пароль" required maxlength="20" class="form-control">
            </div>
            <input type="submit" name="login" value="Войти"  class="btn btn-primary"/>
          </fieldset>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->  
<?php include "templates/include-admin/footer.php" ?>