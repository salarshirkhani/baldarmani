@extends('layouts.dashboard')
@section('sidebar')
    @include('dashboard.admin.sidebar')
@endsection
@section('hierarchy')
    <x-breadcrumb-item title="داشبورد" route="dashboard.admin.index" />
    <x-breadcrumb-item title="مدیریت کاربران" route="dashboard.admin.users.manage" />
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
            <x-card-header>مدیریت کاربر ها</x-card-header>
                <x-card-body>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره همراه</th>
                                <th>مدارک پزشکی</th>
                                <th>توضیحات</th>                               
                                <th>ویرایش</th>
                            </tr>
                            </thead>
                                <tbody>
                             @foreach($posts as $item)
                                <tr>
                                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                    @if($item->file!=NULL)
                                    <p style="color:green">فایل دارد</p> 
                                    @else
                                    <p style="color:red">بدون فایل</p>     
                                    @endif
                                   </td>
                                    <td>
                                    {{ $item->description }}
                                    </td>
                                    <td>
                                    <a href="{{route('dashboard.admin.users.user',['id'=>$item->id])}}" class="edit_post" target="_blank"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                             @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره همراه</th>
                                <th>مدارک پزشکی</th>
                                <th>توضیحات</th>                               
                                <th>ویرایش</th>
                                </tr>
                                </tfoot>
                        </table>
                    </div>
                    </x-card-body>
                <x-card-footer>
                </x-card-footer>      
        </x-card>
    </div>
    @endsection