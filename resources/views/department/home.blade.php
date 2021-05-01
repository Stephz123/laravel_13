@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-body">
                    <h1>halaman Department</h1>
                </div>-->

                <!--<example-component></example-component>-->

                <!--<department-component></department-component>-->
                
                <department-component :data="{{$data->toJson()}}">
                </department-component>
            </div>
        </div>
    </div>
</div>
@endsection
