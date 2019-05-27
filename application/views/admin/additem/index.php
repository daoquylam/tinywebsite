  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Thêm sản Phẩm</h2>
			</div>
                    <form method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên Sản Phẩm</label>
						<input type="text" class="form-control" value="<?php echo set_value('ten')?>" name="ten">
                                                <div class="clear error" name="name_error"><?php echo form_error('ten')?></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Loại Sản Phẩm</label>
						<div class="styled-select">
						<select>
                                                    <option value="2">Nội thất Gỗ</option>
                                                    <option value="1">Gỗ Nguyên Liệu</option>
                                                    <option value="3">Phế Liệu Gỗ</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Giá</label>
						<input type="text" class="form-control" value="<?php echo set_value('gia')?>" name="gia">
                                                <div class="clear error" name="name_error"><?php echo form_error('gia')?></div>
					</div>
				</div>
                                <div class="col-md-6">
					<div class="form-group">
						<label>Giảm Giá</label>
						<input type="text" class="form-control" value="<?php echo set_value('giamgia')?>" name="giamgia">
                                                <div class="clear error" name="name_error"><?php echo form_error('giamgia')?></div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Mô Tả</label>
						<textarea rows="5" class="form-control" style="height:100px;" value="<?php echo set_value('mota')?>" name="mota"></textarea>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Chất Liệu</label>
						<input type="text" class="form-control" value="<?php echo set_value('chatlieu')?>" name="chatlieu">
                                                <div class="clear error" name="name_error"><?php echo form_error('chatlieu')?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Kích thước</label>
						<input type="text" class="form-control" value="<?php echo set_value('kichthuoc')?>" name="kichthuoc">
                                                <div class="clear error" name="name_error"><?php echo form_error('kichthuoc')?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Màu sắc</label>
						<input type="text" class="form-control" value="<?php echo set_value('mausac')?>" name="mausac">
                                                <div class="clear error" name="name_error"><?php echo form_error('mausac')?></div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Số Lượng</label>
						<input type="text" class="form-control" value="<?php echo set_value('soluong')?>" name="soluong">
                                                <div class="clear error" name="name_error"><?php echo form_error('soluong')?></div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Photos</label>
						<form action="/file-upload" class="dropzone dz-clickable">
                                                    <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                                </form>
					</div>
				</div>
			</div>
			<!-- /row-->
                        </div><input type="submit" class="btn_1 medium" value="Thêm mới">
                    </form>
		</div>

	
	  <!-- /.container-fluid-->
   	</div>