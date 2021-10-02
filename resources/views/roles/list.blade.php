@extends('layouts.layouts')
@section('title','لیست کاربران')
@section('content')
  <div class="content-body">
      <section id="multiple-column-form">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">افزودن نقش</h4>
                      </div>
                      <div class="card-body">
                          <form class="form" method="POST" action="{{route('roles.store')}}">
                              @csrf
                              <div class="row">
                                  <div class="col-md-3 col-4">
                                      <div class="form-group">
                                          <label for="roleName">نام نقش</label>
                                          <input type="text" id="roleName" class="form-control" placeholder="نام نقش" name="name">
                                          @if($errors->has('name'))
                                            <small class="form-text text-danger">{{$errors->first('name')}}</small>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-4">
                                      <div class="form-group">
                                          <label for="roleNameFa">نام فارسی نقش</label>
                                          <input type="text" id="roleNameFa" class="form-control" placeholder="نام فارسی نقش" name="fa_name">
                                          @if($errors->has('fa_name'))
                                              <small class="form-text text-danger">{{$errors->first('fa_name')}}</small>
                                          @endif
                                      </div>
                                  </div>
                                      <div class="form-group">
                                          <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="margin-top: 20px">ثبت</button>
                                      </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="row" id="basic-table">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">لیست نقش ها</h4>
                  </div>
                  <div class="card-body">
                      <p class="card-text">
                        #
                      </p>
                  </div>
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                          <tr>
                              <th>نام</th>
                              <th>ایمیل</th>
                              <th>عملیات</th>
                          </tr>
                          </thead>
                          <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->fa_name}}</td>
                                    <td>
                                        <a class="dropdown-item" href="{{route('roles.edit', $role->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            <span>ویرایش</span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <p>
                                    نقشی در سیستم تعریف نشده است
                                </p>
                            @endforelse

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
