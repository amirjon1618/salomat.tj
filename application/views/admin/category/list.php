<section class="content-header">
  <h1>
    <br />
  </h1>
  <ol class="breadcrumb">
    <li><a href="{base_url}index.php/admin"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li class="active">Категории</li>
    <li class="active">Список</li>
  </ol>
</section>
{alert}
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">СПИСОК КАТЕГОРИЙ</h3>
          <a href="{base_url}Admin/addCategory/0" class="add_btns add_btns_color btn btn-primary">
            <i class="fa fa-plus"></i> Добавить категорию
          </a>
        </div><!-- /.box-header -->
        <div class="box-body">
          <br />
          <br />
          <table id="TableUser" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Название</th>
                <!-- <th>Подкатегория</th> -->
                <!-- <th>Под-подкатегория</th> -->
                <!-- <th>Изображение</th> -->
                <th style="text-align: center;">Подкатегории</th>
                <th style="text-align: center;">Изменить</th>
                <th style="text-align: center;">Добавить в главную</th>
                <th style="text-align: center;">Добавить слайдер</th>
                <th style="text-align: center;">Слайдеры</th>
                <th style="text-align: center;">Удалить</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list as $item) : ?>
                <tr>
                  <td><?= $item['id'] ?></td>
                  <td><?= $item['category_name'] ?></td>
                  <!-- <td>{category_name}</td> -->
                  <!-- <td>{category_name}</td> -->
                  <!-- <td><a target="_blank" href="/upload_banner/{product_pic}"><img src="/upload_product/{product_pic}" style="width: 100px;" /></a></td>-->
                  <td style="text-align: center;width: 96px;"> <a href="<?= base_url() ?>index.php/Admin/subCategories/<?= $item['id'] ?>"><i style="font-size: 24px;" class="fa fa-list"> </i></a></td>
                  <td style="text-align: center;width: 100px;"> <a class="" href="<?= base_url() ?>index.php/Admin/editCategory/<?= $item['id'] ?>"><i style="font-size: 24px;" class="fa fa-edit"> </i></a></td>
                  <td style="text-align: center;width: 100px;">
                    <input id="stat_checkbox<?= $item['id'] ?>" type="checkbox" onclick="change_status(<?= $item['id'] ?>)" <?php if ($item['category_in_main'] == 1) echo 'checked="checked"'; ?> <?php if ($item['total_cat_in_main'] == 3 && !($item['category_in_main'] != 0)) echo 'disabled' ?>>
                  </td>
                  <td style="text-align: center;width: 100px;"> <a class="" href="<?= base_url() ?>index.php/Admin/addBanner/<?= $item['id'] ?>"><i style="font-size: 24px;" class="fa fa-plus-square-o"> </i></a></td>
                  <td style="text-align: center;width: 100px;"> <a class="" href="<?= base_url() ?>index.php/Admin/categoryBanners/<?= $item['id'] ?>"><i style="font-size: 24px;" class="fa fa-list"> </i></a></td>
                  <td style="text-align: center;width: 100px;"> <a class="" href="<?= base_url() ?>index.php/Admin/Categories?do=remove&cat_id=<?= $item['id'] ?>"><i style="font-size: 24px;color:red" class="fa fa-remove"> </i></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<script>
  function change_status(id) {
    var checked = 0;
    if ($('#stat_checkbox' + id).is(':checked')) {
      checked = 1;
    } else {
      checked = 0;
    }
    $.getJSON("<?= base_url() ?>index.php/admin/addCategoryToMain?main=" + checked + "&id=" + id, function(data, status) {
      if (data == 1) {
        location.reload();
      } else {
        alert(data);
      }
    });
  }
</script>