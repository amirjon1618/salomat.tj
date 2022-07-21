<!-- Content Header (Page header) -->

<style>
  .dataTables_filter {

    text-align: right;

  }

  .dataTables_filter input {

    margin-left: 10px;

  }
</style>

<section class="content-header">

  <h1>

    <br />

  </h1>

  <ol class="breadcrumb">

    <li><a href="{base_url}"><i class="fa fa-dashboard"></i> Главная</a></li>

    <li class="active">Пользователи</li>

  </ol>

</section>

{alert}

<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        <div class="box-header">

          <h3 class="box-title">СПИСОК ПОЛЬЗОВАТАЛЕЙ</h3>

          <a href="{base_url}Admin/addAdmin" class="add_btns add_btns_color btn btn-primary">
            <i class="fa fa-plus"></i> Добавить пользователя
          </a>
        </div><!-- /.box-header -->

        <div class="box-body">

          <table id="TableUser" class="table table-bordered table-hover">

            <thead>

              <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Login</th>
                <th>Тип</th>
                <th style="text-align: center;">Редактировать</th>
                <th style="text-align: center;">Удалить</th>
              </tr>

            </thead>

            <tbody>

              {clientList}

              <tr>
                <td>{user_id}</a></td>
                <td>{name}</td>
                <td>{login}</td>
                <td>{access_type}</td>
                <td style="text-align: center;width: 100px;"><a href="<?= base_url() ?>index.php/admin/editAdmin/{user_id}"><i style="font-size: 24px;" class="fa fa-edit"> </i></a> </td>
                <td style="text-align: center;width: 100px;"><a class="confirmation" href="/index.php/admin/admins?do=remove&user_id={user_id}"><i style="font-size: 24px;color: red;" class="fa fa-remove"> </i></a></td>
              </tr>

              {/clientList}

            </tbody>

          </table>

        </div><!-- /.box-body -->

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

<script src="{base_url}plugins/datatables/jquery.dataTables.min.js"></script>

<script src="{base_url}plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  $(function() {

    $('#TableUser').DataTable({

      "paging": true,

      "pageLength": 40,

      "lengthChange": false,

      "searching": true,

      "ordering": false,

      "info": true,

      "autoWidth": false

    });

  });
</script>

<style>
  .add_user_btn {
    margin-bottom: 10px;
  }
</style>