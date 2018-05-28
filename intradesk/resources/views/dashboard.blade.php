@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body" align="center">
                    <table class="table">
                        <tr>
                            <th><a href="/employees/create" class="btn btn-primary">Create Employee</a></th>
                            <th><a href="/resources/create" class="btn btn-primary">Add Resource</a></th>
                            <th><a href="/categories/create" class="btn btn-primary">Add Category</a></th>
                        </tr>
                        <tr>
                            <th><a href="/employees" class="btn btn-primary">Edit Employees</a></th>
                            <th><a href="/" class="btn btn-primary">Edit Resources</a></th>
                            <th><a href="/categories" class="btn btn-primary">Edit Categories</a></th>
                        </tr>
                        <tr>
                            <th><a href="/holidays/create" class="btn btn-primary">Create Holidays</a></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th><a href="/holidays" class="btn btn-primary">Edit Holidays</a></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
