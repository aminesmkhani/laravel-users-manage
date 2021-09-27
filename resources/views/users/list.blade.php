@extends('layouts.layouts')
@section('title','Home')
@section('content')
  <div class="content-body">
    <!-- users list start -->
    <section class="app-user-list">
        <!-- list section start -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>نام</th>
                        <th>ایمیل</th>
                        <th>نقش ها</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>امین</td>
                            <td>a@a.com</td>
                            <td>مدیر</td>
                            <td>ویرایش</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- list section end -->
    </section>
    <!-- users list ends -->

</div>
@endsection
