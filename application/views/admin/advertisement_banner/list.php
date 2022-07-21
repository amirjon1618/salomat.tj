<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <br />
  </h1>
  <ol class="breadcrumb">
    <li><a href="{base_url}index.php/admin"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li class="active">Рекламные Баннеры</li>
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
          <h3 class="box-title">СПИСОК РЕКЛАМНЫХ БАННЕРОВ</h3>
          <a href="{base_url}index.php/admin/addAdvertisementBanner" class="add_btns add_btns_color btn btn-primary">
            <i class="fa fa-plus"></i> Добавить рекламный баннер
          </a>
        </div><!-- /.box-header -->
        <div class="box-body">
          <br />
          <br />
          <table id="TableUser" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Линк</th>
                <th>Изображение</th>
                <th>Тип</th>
                <th style="text-align: center;">Изменить</th>
                <th style="text-align: center;">Удалить</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list as $item) : ?>
                <tr>
                  <td><?= $item['id'] ?></td>
                  <td><?= $item['advertisement_name'] ?></td>
                  <td><a href="<?= $item['advertisement_link'] ?>"><?= $item['advertisement_link'] ?></a></td>
                  <td><a target="_blank" href="<?= $item['base_url'] ?>upload_banner/<?= $item['advertisement_pic'] ?>"><img src="<?= $item['base_url'] ?>upload_banner/<?= $item['advertisement_pic'] ?>" style="width: 100px;" /></a></td>
                  <td style="text-align: center;width: 100px;"><?= $item['advertisement_type'] ?></td>
                  <td style="text-align: center;width: 100px;">
                    <a href="{base_url}index.php/admin/editAdvertisementBanner/<?= $item['id'] ?>">
                      <i style="font-size: 24px;" class="fa fa-edit"> </i>
                    </a>
                  </td>
                  <td style="text-align: center;width: 100px;"> <a class="confirmation" href="<?= $item['base_url'] ?>index.php/Admin/advertisementBanners?do=remove&ad_id=<?= $item['id'] ?>"><i style="font-size: 24px;color:red;" class="fa fa-remove"> </i></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!--------------------------------------- ADD MODAL---------------------------->

  <!-- <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="modal_form" onsubmit="return tryAddAdvBanner()" role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Наименование </label>
              <input type="text" id="ad_slider_name" name="ad_slider_name" class="form-control" placeholder="Вводите ...">
            </div>
            <div class="form-group">
              <label>Ссылка (полная) </label>
              <input type="text" id="ad_slider_link" name="ad_slider_link" class="form-control" placeholder="Вводите ...">
            </div>
            <div class="form-group" id="file_div">
              <label class="userfile_label">Изображение </label>
              <input type="file" name="userfile" class="file_inp" size="20" />
              <i class="fa fa-times fa_cancel_file" onclick="cancel_file_input()"></i>
            </div>
            <div class="form-group">
              <label class="type_label">Тип</label>
              <select name="ad_type" id="ad_type">
                <option value="">Выберите</option>
                <option value="slider">Слайдер</option>
                <option value="mini_pic">Мини фото</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ad_banner_category" class="ad_banner_category_label">Под-категория </label>
              <select data-placeholder="Выберите ..." name="ad_banner_category" id="ad_banner_category" class="chosen-select">
              </select>
            </div>
            <div class="box-footer">
              <button type="button" data-dismiss="modal" class="btn btn-default">Отмена</button>
              <input type="submit" name="AddBtn" value="Создать" class="btn btn-primary pull-right" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

</section><!-- /.content -->
<script src="{base_url}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{base_url}plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  function cancel_file_input() {
    $('.file_inp').val('');
  }

  function tryAddAdvBanner() {
    removeErrorCss();

    var b = true;

    if ($("#ad_slider_name").val().length == 0) {
      $("#ad_slider_name").css('border-color', 'red');
      $("#ad_slider_name").focus();
      b = false;
    }

    if ($("#ad_slider_link").val().length == 0) {
      $("#ad_slider_link").css('border-color', 'red');
      $("#ad_slider_link").focus();
      b = false;
    }

    if ($('#addModal').hasClass('addModal')) {
      if ($(".file_inp").val().length == 0) {
        $(".userfile_label").css('color', 'red');
        $(".file_inp").focus();
        b = false;
      }
    }

    if ($("#ad_type").val().length == 0) {
      $(".type_label").css('color', 'red');
      $("#ad_type").focus();
      b = false;
    }

    return b;
  }

  function getAdBannerInfo(id) {
    removeErrorCss();
    $('#edit_loading').show();
    $('#ad_banner_category').html('');
    $.getJSON('<?= $base_url ?>index.php/api/GetAdBannerInfo/' + id, function(data, status) {
      $('.modal_form').attr('action', '{base_url}index.php/admin/editAdvertisementBanner/' + id);
      $('.modal-title').text('Изменить Рекламный Баннер');
      $('#ad_slider_name').val(data.advertisement_name);
      $('#ad_slider_link').val(data.advertisement_link);
      $('#ad_type option[value=' + data.advertisement_type + ']').attr('selected', 'selected');
      if (data.advertisement_category != null) {
        $('#ad_banner_category').html('<option val="' + data.advertisement_category + '" selected>' + data.advertisement_category_name + '</option>')
      }
      $('#addModal').addClass('editModal');
      $('#addModal').removeClass('addModal');
      $('#addModal').modal('show');
      $('#edit_loading').hide();
    });
  }

  function addModal() {
    removeErrorCss();
    $('.modal_form').attr('action', '{base_url}index.php/admin/addAdvertisementBanner');
    $('.modal-title').text('Добавить Рекламный Баннер');
    $('#ad_slider_name').val('');
    $('#ad_slider_link').val('');
    $('#ad_banner_category').html('');
    $('#ad_type').val('');
    $('#addModal').removeClass('editModal');
    $('#addModal').addClass('addModal');
    $('#addModal').modal('show');
  }

  function removeErrorCss() {
    $("#ad_slider_name").css('border-color', '');
    $("#ad_slider_link").css('border-color', '');
    $(".userfile_label").css('color', 'black');
    $(".type_label").css('color', 'black');
  }

  $(document).ready(function() {
    $("#ad_banner_category").select2({
      width: "auto",
      dropdownAutoWidth: true,
      minimumInputLength: 1,
      allowClear: true,
      dropdownParent: $("#addModal"),
      ajax: {
        url: '{base_url}Api/GetSubCategory',
        dataType: "json",
        data: function(term) {
          return {
            term: term.term
          };
        },
        processResults: function(data) {
          return {
            results: data
          };
        }
      }
    });
  });

  $(function() {
    $('#TableUser').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });
</script>