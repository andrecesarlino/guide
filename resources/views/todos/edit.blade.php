@extends('layouts.app')

@section('title')
    Edit Todo {{$todo->name}}}
@endsection

@section('content')

    <h1 class="text-center my-5">Atividades</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">

                    Criar Todo

                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <form action="/todos/{{$todo->id}}/updatetodo" method="POST">

                        @csrf

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$todo->name}}">

                        </div>

                        <div class="form-group">

                            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">{{$todo->description}}</textarea>

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-success">Update</button>

                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection