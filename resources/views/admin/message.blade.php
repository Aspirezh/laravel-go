
@extends('admin/admin_template')
@section('content')
    <div class="ibox-title">
        <h5>用户详情</h5>
        <div class="ibox-tools">
        </div>
    </div>

    <form action="post" method="post">
        <div class="user-details">
        <ul>
            <li><span>公司名称</span>：{{$users[0]->id}}</li>
            <li><span>手机号码</span>：{{$users[0]->phone}}</li>
            <li><span>公司地址</span>：{{$users[0]->username}}</li>
            <li><span>账户类型</span>：{{$users[0]->email}}</li>
            <li><span>推荐人</span>：{{$users[0]->id}}</li>
            <li><span>账户余额</span>:200W</li>
        </ul>
    </div>
    </form>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <a href = '{{asset('excel/export')}}'>客户导出</a>
    <br><br><br>
    <a href="{{asset('excel/import')}}">客户导入</a>
    <br><br><br>
    <h3><p>显示路线</p></h3>
    <form action="{{asset('map/relation')}}" method="post">
        {!! csrf_field() !!}
        <p>起点: <input type="text" name="fname" /></p>
        <p>终点: <input type="text" name="lname" /></p>
        <input type="submit" value="查询" />
    </form>
<!-- /.row -->



@endsection
