@extends('layouts.app')

@section('content')

 <div class="page-wrapper">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{trans('lang.setting')}} <small>{{trans('lang.setting_desc')}}</small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> {{trans('lang.dashboard')}}</a></li>
                </ol>
            </div>
        </div>
    </div>

<div class="content">
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-3">
            @include('layouts.settings.menu')
        </div>
@endsection
