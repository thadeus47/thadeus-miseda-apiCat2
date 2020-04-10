@extends('miseda.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Student MS</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="/students" class="btn btn-md btn-secondary">Add a new Students</a>
                        </div>
                        <div class="col-6">
                            <a href="/fees" class="btn btn-md btn-secondary">Add a new Fee Payment</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection