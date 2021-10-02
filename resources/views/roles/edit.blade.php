@extends('layouts.layouts')
@section('title','لیست کاربران')
@section('content')
    <div class="content-body">
        <form class="form" method="POST" action="#">
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">افزودن نقش</h4>
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3 col-4">
                                        <div class="form-group">
                                            <label for="roleName">نام نقش</label>
                                            <input type="text" id="roleName" value="{{$role->name}}" class="form-control" placeholder="نام نقش" name="name">
                                            @if($errors->has('name'))
                                                <small class="form-text text-danger">{{$errors->first('name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <div class="form-group">
                                            <label for="roleNameFa">نام فارسی نقش</label>
                                            <input type="text" id="roleNameFa" value="{{$role->fa_name}}" class="form-control" placeholder="نام فارسی نقش" name="fa_name">
                                            @if($errors->has('fa_name'))
                                                <small class="form-text text-danger">{{$errors->first('fa_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="margin-top: 20px">ثبت</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">افزودن دسترسی به کاربر</h4>
                        </div>
                        <div class="card-body">
                            <div class="demo-inline-spacing">
                                @forelse($permissions as $permission)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" {{$role->permissions->contains($permission) ?    'checked' : ''}} value="{{$permission->name}}" id="{{'permission' . $permission->id}}">
                                        <label class="form-check-label" for="{{'permission' . $permission->id}}">{{$permission->fa_name}}</label>
                                    </div>
                                @empty
                                    <p>
                                        هیچ دسترسی موجود نیست
                                    </p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
