@extends('admin.layouts.master')
@section('content')
    <div class="col-md-8 offset-2">
        <form action="{{route('import.excel')}}" method="post"  enctype="multipart/form-data">@csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Upload Excel file </label>
                    <input type="file" name="excel_file" value="{{ old('file') }}" class="form-control" placeholder="name" id="name">
                    @error('excel_file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div style="padding-top: 33px">
                    <button class="btn btn-primary"> upload excel file</button>                </div>

            </div>
        </form>


    <table class="table table-striped ">
       <h3 class="mt-3"> Excel Data table</h3>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @if(count($excels))
            @foreach($excels as $excel )
        <tr>
            <th >{{$excel->id}}</th>
            <td>{{$excel->name}}</td>
            <td>{{$excel->email}}</td>
            <td>{{$excel->password}}</td>
            <td>
                <span>
                    <a class="btn btn-primary">Edit</a>
                    <a class="btn btn-danger">Delete</a>
                </span>
            </td>
        </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5"> No data found </td>
            </tr>

        @endif

        </tbody>
    </table>
    </div>
@endsection
