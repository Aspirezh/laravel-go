@extends('admin/admin_template')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">车主信息</h3>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        {{ csrf_field() }}
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
                <th>Action</th>
            </tr>
            @foreach ($cars->chunk(3) as $chunk)
                    @foreach ($chunk as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->carperson}}</td>
                            <td>{{$car->data}}</td>
                            <td>
                                @if ($car->status ==1)
                                 <span class="label label-warning">
                                    未审核
                                @elseif($car->status ==2)
                                <span class="label label-success">
                                    审核通过
                                @elseif($car->status ==3)
                                <span class="label label-danger">
                                    审核不通过
                                @endif
                            </td>
                            <td>{{$car->reason}}</td>
                            <td>
                                <form action="" method="POST"
                                      style="display: inline;">
                                    <input name='id' type="hidden" value="">
                                    <input name='phone' type="hidden" value="">
                                    <button type="submit" class="btn btn-info btn-sm">通过</button>
                                </form>
                                <form action="" method="POST"
                                      style="display: inline;">
                                    <input name='id' type="hidden" value="">
                                    <input name='phone' type="hidden" value="">
                                    <button type="submit" class="btn btn-warning btn-sm">不通过&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button>
                                </form>
                                <br/>
                                <button class="btn btn-danger btn-sm" onclick="edit()">编辑</button>
                                <button class="btn btn-success btn-sm" onclick="show()">用户详情</button>
                            </td>
                        </tr>
                    @endforeach
            @endforeach
            </tbody>
        </table>
        <div style="text-align: center;">
            {{ $cars->links() }}
        <div>
    </div>

    <!-- /.box-body -->
</div>

@endsection