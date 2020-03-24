@extends('plantilla')
@section('cuerpo')

        <table class="table">
            <thead>
                <th>#</th>
                <th>Nombre del tablero</th>
                <th>Fecha Carbon</th>
                <th>Fecha Directiva</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>

            <tbody>
                @foreach($tableros as $item)

                <tr>
                    <td>{{ $item->idTab }}</td>
                    <td>{{ $item->nombre }}</td>
                    <!-- Formatear fecha con Carbon: Llamamos la funcion parse y le aplicamos el formato que queremos-->
                    <td>{{ \Carbon\Carbon::parse($item->fecha)->format('d-m/Y') }}</td>

                    <!--  -->
                    <td>@formateaFecha($item)</td>
                    

                    <td><a href="{{ route('nota.ver',       ['id' => $item->idTab]) }}">ver</a></td>
                    <td><a href="{{ route('tablero.editar', ['id' => $item->idTab]) }}">editar</a></td>
                    <td><a href="{{ route('tablero.borrar', ['id' => $item->idTab]) }}">borrar</a></td>
                </tr>

                @endforeach

                
            </tbody>
        </table>
        @stop