<section class="content-header">
  <h1>
    <br />
  </h1>
  <ol class="breadcrumb">
    <li><a href="{base_url}index.php/admin"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li><a href="{base_url}index.php/admin/Categories"><i class="fa fa-list-ul"></i>
        Категории</a></li>
    <?php if (sizeof($parent_cat['parent_cat']) == 0) : ?>
      <li class="active">
        <?php echo $parent_cat['category_name'] ?></li>
    <?php endif; ?>
    <?php if (sizeof($parent_cat['parent_cat']) != 0) : ?>
      <li><a href="{base_url}index.php/admin/subCategories/<?php echo $parent_cat['parent_cat']['id'] ?>"><i class="fa fa-list-ul"></i>
          <?php echo $parent_cat['parent_cat']['category_name'] ?></a></li>
      <li class="active">
        <?php echo $parent_cat['category_name'] ?></li>
    <?php endif; ?>

    <li class="active">Подкатегории</li>
  </ol>
</section>
{alert}
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">СПИСОК ПОДКАТЕГОРИЙ</h3>
          <a href="{base_url}Admin/addCategory/{category_id}" class="add_btns btn btn-primary">
          <i class="fa fa-plus"></i> Добавить подкатегорию
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
                <?php if (sizeof($parent_cat['parent_cat']) == 0) : ?>
                  <th style="text-align: center;">Подкатегории</th>
                <?php endif; ?>
                <th style="text-align: center;">Изменить</th>
                <th style="text-align: center;">Удалить</th>
              </tr>
            </thead>
            <tbody>
              {list}
              <tr>
                <td>{id}</td>
                <td>{category_name}</td>
                <!-- <td>{category_name}</td> -->
                <!-- <td>{category_name}</td> -->
                <!-- <td><a target="_blank" href="/upload_banner/{product_pic}"><img src="/upload_product/{product_pic}" style="width: 100px;" /></a></td>-->
                <?php if (sizeof($parent_cat['parent_cat']) == 0) : ?>
                  <td style="text-align: center;width: 96px;"> <a href="{base_url}index.php/Admin/subCategories/{id}"><i style="font-size: 24px;" class="fa fa-list"> </i></a></td>
                <?php endif; ?>
                <td style="text-align: center;width: 100px;"> <a class="" href="{base_url}index.php/Admin/editCategory/{id}"><i style="font-size: 24px;" class="fa fa-edit"> </i></a></td>
                <td style="text-align: center;width: 100px;"> <a class="" href="{base_url}index.php/Admin/subCategories/<?= $category_id ?>?do=remove&cat_id={id}"><i style="font-size: 24px;color:red" class="fa fa-remove"> </i></a></td>
              </tr>
              {/list}
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->