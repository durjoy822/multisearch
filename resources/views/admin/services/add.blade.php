@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Service</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Add Service</li>
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
                    <h3 class="widget-title">Add Service</h3>
                    <form action="{{route('service.store')}}" method="post" >@csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name </label>
                                <input type="text" name="name" value="{{ old('title') }}" class="form-control" placeholder="name" id="name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="icone">Email </label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="email" id="email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="phone" id="phone">

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

