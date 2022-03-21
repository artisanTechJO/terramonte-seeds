@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Sub Branches</h4>
                            <a href="{{route('branches.create')}}" class="btn btn-rounded btn-primary">
                            <span class="btn-icon-start text-primary">
                                <i class="fa fa-plus color-info"></i>
                            </span>Add
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th><strong>ID</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Name</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($branches) > 0)
                                        @foreach($branches as $branch)
                                            <tr>
                                                <td><strong>{{$branch->id}}</strong></td>
                                                <td><img src="{{$branch->getMedia('branch')[0]->getUrl()}}" style="width:120px;height:120px" alt="branch"></td>
                                                <td>{{$branch->name}}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        @if($branch->status == 1)
                                                            <i class="fa fa-circle text-info me-1"></i> Normal
                                                        @elseif($branch->status == 2)
                                                            <i class="fa fa-circle text-warning me-1"></i> Special
                                                        @elseif($branch->status == 3)
                                                            <i class="fa fa-circle text-success me-1"></i> New
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('branches.edit',$branch)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                        <form action="{{route('branches.destroy',$branch)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button  class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                   </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <div class="alert alert-danger">No Sub Branches Added</div>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        @if (session()->has('create'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: 'Created successfully'
        })
        @endif
        @if (session()->has('edit'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: 'Edited successfully'
        })
        @endif
    </script>
@stop
