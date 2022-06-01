@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Requests') }}</div>

                <div class="card-body" >
                    <div class="row pb-3 pt-2 ">
                        <div class="col">Departure</div>
                        <div class="col">Arrived</div>
                        <div class="col">Cost</div>
                        <div class="col">Vehicul Type</div>
                        <div class="col">Vehicul State</div>
                    </div>
                    <?php
                        //dd($requests)
                    ?>
                    @foreach($requests as $request)
                        <div class="row pb-1 border-top border-info">
                            <div class="col">{{$request->depart}}</div>
                            <div class="col">{{$request->arrive}}</div>
                            <div class="col">{{$request->prix}}</div>
                            <div class="col">{{$request->type_vehicule}}</div>
                            <div class="col">{{$request->status}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
