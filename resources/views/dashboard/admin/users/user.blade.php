@extends('layouts.dashboard')
@section('sidebar')
    @include('dashboard.admin.sidebar')
@endsection
@section('hierarchy')
    <x-breadcrumb-item title="داشبورد" route="dashboard.admin.index" />
    <x-breadcrumb-item title="کاربر" route="dashboard.admin.users.user" />
@endsection
@section('content')
    @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif
    <div class="col-md-12">
        <x-card type="info">
            <x-card-header>مشاهده کاربر {{$post->first_name}}</x-card-header>
                 <p>کاربر:{{$post->first_name}} {{$post->last_name}}</p>
                    <p>آدرس ایمیل:{{$post->email}}</p>
                    <p>شماره تماس:{{$post->mobile}}</p>
                    <p>توضیحات:</p>
                    {{$post->description}}
                    <br>
                    <p>فایل</p>
                    <img src="{{asset('files/'.$post['file'].'/'.$post['file'] )}}" style="width:350px;">
    </x-card>
    </div>
    @endsection