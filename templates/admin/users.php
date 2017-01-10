<?php include "templates/include-admin/header.php";
include "templates/include-admin/nav.php"; ?>



<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <?php if ( isset( $results['errorMessage'] ) ) { ?>
      <div class="alert bg-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $results['errorMessage'] ?>
      </div>
      <?php } ?>
      <div class="panel-body">
        <div class="col-md-12">
          <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Пользователи</a>
              <p>oaguneagn</p>
            </li>
            <li role="presentation"><a href="#">Новые</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->  
<?php include "templates/include-admin/footer.php" ?>