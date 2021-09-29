@extends('layouts.layouts')
@section('title','ویرایش کاربر')
@section('content')
<div class="content-body">
    <!-- Basic Checkbox start -->
    <section class="basic-checkbox">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">افزودن نقش به کاربر</h4>
                    </div>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked="">
                                <label class="form-check-label" for="inlineCheckbox1">مدیر</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked="">
                                <label class="form-check-label" for="inlineCheckbox1">پاک کردن کاربر</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Checkbox end -->
</div>
@endsection
