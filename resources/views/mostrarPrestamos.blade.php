@extends('app')
@section('title', 'Mostrar Préstamos')
@section('content')
    @if ($prestamo->isEmpty())
        <p>No hay prestamos</p>
    @else

        <div class="relative overflow-x-auto  ml-4 mt-3">
            <table class=" text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id Usuario</th>
                        <th scope="col" class="px-6 py-3">Id Libro</th>
                        <th scope="col" class="px-6 py-3">Fecha de Préstamo</th>
                        <th scope="col" class="px-6 py-3">Fecha de Devolución</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>

                    </tr>
                </thead>
                @each('tablaPrestamo', $prestamo, 'item')
            </table>
        </div>
    @endif

@endsection
