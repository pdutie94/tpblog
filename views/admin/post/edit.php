<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Thêm bài viết
    </div>
    <div class="card-body">
        <form action="?controller=post&action=edit&post_id=0" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="featured_img">Hình ảnh</label>
                <div class="col-sm-10">
                    <button data-izimodal-iframeurl="{{url('tinymce')}}/filemanager/dialog.php?type=1" data-izimodal-open="#modal-iframe">Modal</button>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cat_name">Tên bài viết</label>
                <div class="col-sm-10">
                    <input id="cat_name" name="cat_name" value="<?php echo isset($post) ? $post['title'] : '' ?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cat_alias">Alias</label>
                <div class="col-sm-10">
                    <input id="cat_alias" name="cat_alias" type="text" value="<?php echo isset($post) ? $post['alias'] : '' ?>" class="form-control">
                    <small class="form-text text-muted">"Alias" là phiên bản URL thân thiện của tên bài viết. Nó thường là tất cả các chữ thường và chỉ chứa chữ cái, số và dấu gạch nối.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cat_parent">Danh mục</label>
                <div class="col-sm-10 select">
                    <select name="cat_parent" id="cat_parent" class="auto-width form-control">
                        <option value="">-- Chọn danh mục --</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="post_desc">Mô tả</label>
                <div class="col-sm-10 select">
                    <textarea class="form-control" id="post_desc" name="post_desc" rows="3"><?php echo isset($post) ? $post['description'] : '' ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="post_content">Nội dung</label>
                <div class="col-sm-10 select">
                    <textarea class="form-control" id="post_content" name="post_content" class="active_tinymce" rows="5"><?php echo isset($post) ? $post['content'] : '' ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="publish_yes">Xuất bản</label>
                <div class="col-sm-10 select">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input id="publish_yes" value="1" <?php echo (isset($post) && $post['publish'] == 1) ? 'checked' : 'checked' ?> name="publish" type="radio"> Có
                        </label>
                        <label class="btn btn-primary">
                            <input id="publish_no" <?php echo (isset($post) && $post['publish'] == 0) ? 'checked' : '' ?> value="0" name="publish" class="custom-control-input" type="radio"> Không
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" value="Thêm mới" class="btn btn-primary">
                </div>
            </div>
            <input type="hidden" value="" name="token">
            <input type="hidden" value="" name="token">
        </form>
    </div>
</div>