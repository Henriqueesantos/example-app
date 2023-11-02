<x-layout title='Listar as maquinas'>


<a href="{{ route('machines.create')}}">Cadastrar pedido de entrega<a>

<h1> Listar os pedidos </h1>



@include('components/flas-message')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>

        </tr>
        </thead>


        <tbody>
            <tr>
@foreach ($machines as $machine)

Usuário:<tr>{{$machine->name}}</tr><br>Origem:
<tr>{{$machine->endorigem}}</tr><br>Destino:
<tr>{{$machine->enddestino}}</tr><br>Valor:
<tr>{{$machine->valor}}</tr><br><br>
@endforeach
</tbody>


</table>
</x-layout>