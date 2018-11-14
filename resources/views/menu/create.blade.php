@extends('layouts.app')

@section('content')
    <div class="container venue_list">
        <div class="row">


            <div class="btn-group-vertical col-md-2 zuo">
                <ul>
                    <li>会员<br>中心</li>
                    <li>菜谱</li>
                    <li>话题</li>
                    <li>日志</li>
                    <li>菜单</li>
                    <li>收藏</li>
                    <li>账户<br>设置</li>
                </ul>
            </div>


            {{--<div class="col-md-1 btn-group-vertical">--}}

            {{--</div>--}}
            <div class="col-md-10 you">
                <h2 class="title">编辑菜谱</h2>
                <div class="top">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">菜谱名称</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">成品图片(最多9张)</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">点击上传成品图</p>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="请输入菜谱描述，最多500个字"></textarea>
                    </form>
                </div>
                <div class="middle">
                    <p>基本参数</p>

                    <div class="btn-group ">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                            <span class="directText">难度 :   默认 <i class="glyphicon glyphicon-chevron-down"></i></span>
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>
                        <ul class="dropdown-menu direct">
                        </ul>
                    </div>


                </div>




            </div>

        </div>
    </div>

@endsection

