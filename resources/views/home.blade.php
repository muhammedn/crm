@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav  ">
                        <li>{{ link_to_route('companies.index', trans('company.list')) }}</li>
                    <li>{{ link_to_route('employees.index', trans('employee.list')) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
