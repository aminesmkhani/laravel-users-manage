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
                          <form class="form" method="POST">
                              @csrf
                              <div class="row">
                                  <div class="col-md-3 col-4">
                                      <div class="form-group">
                                          <label for="roleName">نام نقش</label>
                                          <input type="text" id="roleName" class="form-control" placeholder="نام نقش" name="roleName">
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-4">
                                      <div class="form-group">
                                          <label for="roleNameFa">نام فارسی نقش</label>
                                          <input type="text" id="roleNameFa" class="form-control" placeholder="نام فارسی نقش" name="roleNameFa">
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
                              <th>#</th>
                              <th>نام</th>
                              <th>ایمیل</th>
                              <th></th>
                              <th>عملیات</th>
                          </tr>
                          </thead>
                          <tbody>
{{--                            @forelse($users as $user)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$user->id}}</td>--}}
{{--                                    <td>{{$user->name}}</td>--}}
{{--                                    <td>{{$user->email}}</td>--}}
{{--                                    <td>--}}
{{--                                        @foreach($user->roles as $role)--}}
{{--                                        <span class="badge badge-pill badge-light-success mr-1">--}}
{{--                                             {{$role->fa_name}}--}}
{{--                                        </span>--}}
{{--                                        @endforeach--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu">--}}
{{--                                                <a class="dropdown-item" href="{{route('users.edit', $user->id)}}">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>--}}
{{--                                                    <span>ویرایش</span>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item" href="#">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>--}}
{{--                                                    <span>پاک کردن</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                                <p>--}}
{{--                                    کاربری در سیستم تعریف نشده است--}}
{{--                                </p>--}}
{{--                            @endforelse--}}

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
