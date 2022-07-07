@extends('layouts.admin')

@section('content')
    <div class="container">

        <table class="table">
            <thead>

              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($pizzas as $pizza)
              <tr>
                <th scope="row">{{$pizza->id}}</th>
                <td>{{$pizza->nome}}</td>
                <td>{{$pizza->prezzo}} &euro;</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.pizzas.show', $pizza)}}">SHOW</a>
                    <a class="btn btn-warnig" href="{{route('admin.pizzas.edit', $pizza)}}">EDIT</a>


                    DELETE
                </td>

            </tr>
            @endforeach
            </tbody>
          </table>


    </div>
@endsection
