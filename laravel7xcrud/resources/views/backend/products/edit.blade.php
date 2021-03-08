@extends("backend.layouts.main")
@section("title","Sửa sản phẩm")
@section("content")
<h1>Sửa sản phẩm</h1>
<form name="product" action="/action_page.php" method="post">

       <div class="form-group">

           <label for="product_name">Tên sản phẩm:</label>

           <input type="text" name="product_name" class="form-control" id="product_name">

       </div>

       <div class="form-group">

           <label for="product_image">Ảnh sản phẩm:</label>

           <input type="file" name="product_image" class="form-control" id="product_image">

       </div>

       <div class="form-group">

           <label for="product_image">Mô tả sản phẩm:</label>

           <textarea name="product_desc" class="form-control" rows="10"></textarea>

       </div>

       <div class="form-group">

           <label for="product_publish">Thời gian mở bán sản phẩm:</label>

           <input type="text" name="product_publish" style="width: 250px" class="form-control" id="product_publish">

       </div>

       <div class="form-group">

           <label for="product_quantity">Tồn kho sản phẩm:</label>

           <input type="number" name="product_quantity" style="width: 250px" class="form-control" id="product_quantity">

       </div>

       <div class="form-group">

           <label for="product_price">Giá sản phẩm:</label>

           <input type="text" name="product_price" style="width: 250px" class="form-control" id="product_price">

       </div>





       <button type="submit" class="btn btn-info">Cập nhật sản phẩm</button>

   </form>
@endsection