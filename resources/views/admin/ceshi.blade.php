@extends('admin/admin_template')
@section('content')
    <form action="post" method="post">
        <div class="user-details">
            <ul>
                {{$data[0]['xiaofei']}}
                <li><span>消费人</span>：{{$data[0]['xiaofei']}}</li>
                <li><span>手机号码</span>：{{$data[0]['account_id']}}</li>
                <li><span>公司地址</span>：{{$data[0]['user_id']}}</li>
                <li><span>账户类型</span>：</li>
                <li><span>推荐人</span>：</li>
                <li><span>账户余额</span>:200W</li>
            </ul>
        </div>
    </form>

@endsection