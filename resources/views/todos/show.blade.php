
@extends('layouts.app')

@section('title')
    {{$todo->name}}
@endsection

@section('content')
    <h1 class="text-center my-5">
        {{$todo->name}}
    </h1>

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card card-default">
                <div class="card-header">

                    Details

                </div>

                <div class="card-body">
                    {{$todo->description}}

                </div>


            </div>


        </div>


    </div>
@endsection
