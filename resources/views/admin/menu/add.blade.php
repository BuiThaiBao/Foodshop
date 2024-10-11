@extends('admin.main')

@section('head')
<script src="{{ asset('/ckeditor5/ckeditor5.js') }}"></script>
@endsection
@section('content')

<form action="" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="menu">Tên Danh Mục</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
      </div>
        <div class="form-group">
            <label >Danh Mục</label>
            <select class="form-control" name="parent_id" >
                <option value="0">Danh Mục Thực Phẩm</option>
                @foreach($menus as $menu)
                <option value="{{ $menu->id }}">{{ $menu->name }}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label >Mô tả</label>
            <textarea name="description" class="form-control" ></textarea>
          </div>
          <div class="form-group">
            <label >Mô tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control" ></textarea>
          </div>
          
            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" value="1" id="active" name="active">
                  <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" value="1" id="inactive" name="active">
                    <label for="inactive" class="custom-control-label">Không</label>
                  </div>
            </div>
          
    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Tạo danh mục</button>
    </div>
    @csrf
  </form>


@endsection

@section('footer')

@endsection