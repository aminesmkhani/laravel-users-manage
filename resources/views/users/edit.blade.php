@extends('layouts.layouts')
@section('title','ویرایش کاربر')
@section('content')
<div class="content-body">
    <!-- Basic Checkbox start -->
    <section class="basic-checkbox">
        <form method="post" action="{{route('users.update', $user->id)}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">افزودن نقش به کاربر</h4>
                        </div>
                        <div class="card-body">
                            <div class="demo-inline-spacing">
                                @forelse($roles as $role)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" {{$user->roles->contains($role) ?    'checked' : ''}} name="roles[]" value="{{$role->name}}" id="{{'role' . $role->id}}">
                                    <label class="form-check-label" for="{{'role' . $role->id}}">{{$role->fa_name}}</label>
                                </div>
                                @empty
                                    <p>
                                        هیچ نقشی موجود نیست
                                    </p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <input class="form-check-input" type="checkbox" name="permissions[]" {{$user->permissions->contains($permission) ?    'checked' : ''}} value="{{$permission->name}}" id="{{'permission' . $permission->id}}">
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
            <button type="submit" class="btn btn-success waves-effect waves-float waves-light">افزودن</button>
        </form>

    </section>
    <!-- Basic Checkbox end -->
</div>
@endsection
