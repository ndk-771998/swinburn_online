@extends('layout.master')
@section('title')
    <title>{{__('404.error')}} - Swindurn Việt Nam</title>
@endsection
@section('content')
<div class="error__page--alert" style="padding-top: 10vh">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 error__form--alert" >
                <h3>{{__('404.error')}} </h3><h4>{{__('404.message')}}</h4>
                <p>{{__('404.description')}}</p>
                <form action="{{ route('search') }}" method="get">
                    <div class="input-group d-flex ">
                        <input type="search" placeholder="{{__('404.search')}}" name="search" class="form-control col-md-7">
                        <div class="input-group-append">
                            <button type="submit" class="btn d-flex"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <a href="/">{{__('404.back')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection
