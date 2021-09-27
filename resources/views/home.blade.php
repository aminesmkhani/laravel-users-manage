@extends('layouts.layouts')

@section('title','Home')


@section('content')

    <div class="row match-height">
        <!-- Greetings Card starts -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-congratulations">
                <div class="card-body text-center">
                    <img src="{{asset('images/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                    <img src="{{asset('images/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                    <div class="avatar avatar-xl bg-success shadow">
                        <a style="color: white" href="#">
                            <div class="avatar-content">
                                <i data-feather="users" class="font-large-1"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text-center">
                        <h1 class="mb-1 text-white">سیستم مدیریت کاربران</h1>
                        <p class="card-text m-auto w-75">
                            به راحتی کاربران خود را مدیریت کنید و دسترسی هایی که میخواهید برایشان ایجاد کنید
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Greetings Card ends -->
    </div>

@endsection
