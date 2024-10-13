@extends('admin.main')

@section('head')

@endsection
@section('content')

<form action="" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="menu">Tên Danh Mục</label>
        <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Nhập tên danh mục">
      </div>
        <div class="form-group">
            <label >Danh Mục</label>
            <select class="form-control" name="parent_id" >
                <option value="0"  {{ $menu->parent_id=0? 'selected' :''}}>Danh Mục Thực Phẩm</option>
                @foreach($menus as $menuParent)
                <option value="{{ $menuParent->id }}" {{ $menu->parent_id == $menuParent->id ? 'selected' :''}}>
                    {{ $menuParent->name }}
                </option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label >Mô tả</label>
            <textarea name="description" class="form-control" >{{ $menu->description }}</textarea>
          </div>
          <div class="form-group">
            <label >Mô tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control" >{{ $menu->content }}</textarea>
          </div>
          
            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" value="1" id="active" 
                  name="active"{{ $menu->active ==1 ? 'checked=""' : '' }}>
                  <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" value="1" id="inactive" name="active"
                    {{ $menu->active ==0 ? 'checked=""' : '' }}>
                    <label for="inactive" class="custom-control-label">Không</label>
                  </div>
            </div>
          
    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
    </div>
    @csrf
  </form>


@endsection

@section('footer')

@endsection