@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body" style="margin-bottom: 400px">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Crop</h4>
                        </div>
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="basic-form">
                                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" required name="name" class="form-control input-rounded" placeholder="Crop Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Status</label>
                                            <select required class="default-select input-rounded form-control wide mb-3" name="status">
                                                <option value="">-- Select Status --</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Special</option>
                                                <option value="3">New</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Type</label>
                                            <select required class="default-select  input-rounded form-control wide mb-3" name="type">
                                                <option value="">-- Select Type --</option>
                                                <option value="1">Crop-Products</option>
                                                <option value="2">Crop-Branch-Products</option>
                                                <option value="3">Crop-Branch-Sub Branch-Products</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Crops Image</label>
                                            <input type="file" required name="image" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-primary mt-3">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        @if (session()->has('success'))
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
    </script>
@stop
