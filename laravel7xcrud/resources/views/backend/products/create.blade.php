@extends('backend.layouts.main')



@section('title', 'Tạo mới sản phẩm')



@section('content')

   <h1>Tạo mới sản phẩm</h1>
   <!-- @if($errors->any())
   <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        
        </ul>
   
   </div> -->



   <form name="product" action="{{url ("/backend/product/store") }}" method="post">
   @csrf 

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





       <button type="submit" class="btn btn-info">Thêm sản phẩm</button>

   </form>

@endsection