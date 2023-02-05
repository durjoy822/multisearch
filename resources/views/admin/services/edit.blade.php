@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Edit Service</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Edit Service</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Edit Service</h3>
                    <form action="{{route('service.update')}}" method="post" >@csrf
                        <input type="hidden" value="{{$service->id}}" name="id">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">name </label>
                                <input type="text" name="name" value="{{$service->name}}" value="{{ old('name') }}" class="form-control" placeholder="Service title" id="title">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="icone">email </label>
                                <input type="text" name="email" value="{{$service->email}}" value="{{ old('email') }}" class="form-control" placeholder="service icon" id="icon">
                                @error('icon')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">phone</label>
                                <input type="text" name="phone" value="{{$service->phone}}" value="{{ old('icon') }}" class="form-control" placeholder="service icon" id="icon">

                                @error('details')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection


