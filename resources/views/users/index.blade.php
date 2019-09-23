@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Usuarios
                  
                </div>

                <div class="card-body">
                    <table>
                      <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $usuario)
                                <tr>
                                    <td>{{$usuario->id}}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>
                                        @can('users.show')
                                        <a href="{{route('users.show',$usuario->id)}}" class="btn btn-sm  btn-info">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.edit')
                                        <a href="{{route('users.edit',$usuario->id)}}" class="btn btn-sm  btn-warning">Editar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.destroy')
                                        {!! Form::open(['route'=>['users.destroy',$usuario->id],
                                        'method'=>'DELETE'])  !!}
                                          <button class="btn btn-sm btn-danger" >Eliminar</button>
                                        {!!Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
