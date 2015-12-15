@extends('main_layout')

@section('title')
    AMMS:Meter
@stop

@section('heading')
    AMMS: METER
@stop

@section('body_content')
    <div>
        <div class = 'meter'>
            <div class = 'balancer'> </div>
            <div class = 'display'> 100.00 </div>
            <div class = 'unit'> KM </div>
            <div> Odometer </div>
        </div>

        <div class = 'meter'>
            <div class = 'balancer'> </div>
            <div class = 'display'> 100.00 </div>
            <div class = 'unit'> Liter </div>
            <div> Fuel Meter </div>
        </div>

        <div class = 'meter'>
            <div class = 'balancer'> </div>
            <div class = 'display'> 100.00 </div>
            <div class = 'unit'> KM / Liter</div>
            <div> Mileage Meter </div>
        </div>
    </div>
@stop