@extends('plantilla')
@section('titulo')
: notas relacionadas
@stop
@section('cuerpo')

           <table class="table">
                <thead>
                    <th>#</th>
                    <th>Texto</th>
                    <th>Fecha</th>
                    <th>Completado</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                @foreach($dta as $item)

                    <tr>
                        <td>{{ $item->idNot }}</td>
                        <td>{{ $item->texto }}</td>
                        <td>@formateaFecha($item)</td>
                        <td>{{ $item->completado }}</td>
                        <td><a href="">ver</a></td>
                        <td><a href="">editar</a></td>
                        <td><a href="">borrar</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
@stop