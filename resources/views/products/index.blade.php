@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Productos
                  @can('products.create')
                  <a href="{{route('products.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
                  @endcan
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
                            @foreach($products as $p)
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>
                                        @can('products.show')
                                        <a href="{{route('products.show',$p->id)}}" class="btn btn-sm  btn-info">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('products.edit')
                                        <a href="{{route('products.edit',$p->id)}}" class="btn btn-sm  btn-warning">Editar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('products.destroy')
                                        {!! Form::open(['route'=>['products.destroy',$p->id],
                                        'method'=>'DELETE'])  !!}
                                          <button class="btn btn-sm btn-danger" >Eliminar</button>
                                        {!!Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
