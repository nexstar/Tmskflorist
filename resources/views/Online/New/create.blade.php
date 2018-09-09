@extends('Layouts.background')

@section('contents')

    @include('Repeat.header')

    <div class="container-fluid" style="margin-top: 55px;">
        <div class="row">

            <div id="main_right" class="col-md-12">

                <div class="row" style="padding-top: 20px;">
                    <div class="col-md-4">
                        <a href="{{ url('onlinenew') }}" class="btn btn-warning">返回</a>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <p style="font-size: 30px;">電商-(新增)新聞</p>
                    </div>
                    <div class="col-md-4" style="text-align: right;">
                        <a href="#" class="btn btn-primary">送出</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">新聞標題</label>
                            <input value="" id="title" name="title" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">時間</label>
                            <input value="" id="date" name="date" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">照片</label>
                            <img src="http://placehold.it/1170x613" alt="" style="width: 100%;margin-bottom: 1px;">
                            <input value="" id="title" name="title" type="file" class="form-control">
                        </div>
                    </div>

                    {{--<div class="col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">新聞照片</label>--}}
                            {{--<input value="" id="date" name="date" type="text" class="form-control">--}}
                            {{--<img src="http://placehold.it/1170x613" alt="" style="width: 100%;">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

    </script>

    <style type="text/css">

    </style>
@endsection

