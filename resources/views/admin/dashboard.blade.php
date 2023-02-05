@extends('admin.layouts.master')
@section('content')
    @include('admin.layouts.breadcrumb')

    <div class="container-fluid home">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('warning') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-red">
                    <div class="widget-left">
                        <span class="ti-user"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Patients</h4>
                        @php $patientCount = \App\Models\Patient::count(); @endphp
                        <span class="numeric color-red">{{ $patientCount }}</span>
                        {{-- <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +20% Increased</p> --}}
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-green">
                    <div class="widget-left">
                        <span class="ti-bar-chart"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Appointments</h4>
                        @php $appointment = \App\Models\Appointment::get(); @endphp
                        <span class="numeric color-green">{{ count($appointment) }}</span>
                        {{-- <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p> --}}
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-yellow">
                    <div class="widget-left">
                        <span class="ti-money"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Total Revenue</h4>
                        @php $payment = \App\Models\Payment::sum('paid'); @endphp
                        <span class="numeric color-yellow">{{ $payment }}</span>
                        {{-- <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +10% Increased</p> --}}
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments Year by Year</h3>
                    <div id="lineMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title"> Patients Year by Year</h3>
                    <div id="barMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Doctor</th>
                                    <th>Check-Up</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        @php $patient = \App\Models\Patient::find($appointment->patientId) @endphp
                                        <td>{{ $patient->patient_name }}</td>
                                        @php $doctor = \App\Models\Doctor::find($appointment->doctor) @endphp
                                        <td>{{ $doctor->name }}</td>
                                        @php $department = \App\Models\Department::find($doctor->specialization) @endphp
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>@if ($appointment->time == 1)
                                            10AM-11AM
                                            @elseif ($appointment->time == 1)11AM - 12pm
                                            @elseif ($appointment->time == 2)12PM - 01PM
                                            @elseif ($appointment->time == 3)01PM - 02PM
                                            @elseif ($appointment->time == 4)02PM - 03PM
                                            @elseif ($appointment->time == 5)03PM - 04PM
                                            @elseif ($appointment->time == 6)04PM - 05PM
                                            @elseif ($appointment->time == 7)06PM - 07PM
                                            @elseif ($appointment->time == 8)07PM - 08PM
                                            @elseif ($appointment->time == 9)08PM - 09PM
                                        @endif</td>
                                        <td>
                                            @if ($appointment->status == 'Active')
                                                <span class="badge badge-info">{{ $appointment->status }}</span>
                                            @elseif ($appointment->status == 'Visited')
                                                <span class="badge badge-success">{{ $appointment->status }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ $appointment->status }}</span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-sm-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments Status</h3>
                    <div id="donutMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 progress-status proclinic-box-shadow">
                    <h3 class="widget-title">Doctors Availability</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Speciality</th>
                                    <th>Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->name }}</td>
                                        @php $department = \App\Models\Department::find($doctor->specialization) @endphp
                                        <td>{{ $department->name }}</td>
                                        <td>
                                            @if ($doctor->availability == 0)
                                                <span class="badge badge-danger">Not Available</span>
                                            @else
                                                <span class="badge badge-success">Available</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    @include('admin.layouts.dashboardScript')
@endsection
