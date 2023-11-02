<x-layout title='Cadastrar as maquinas'>

<a href="{{ route('machines.index')}}">Listar pedidos</a>


<h1> Cadastrar pedido de entrega:</h1>
<form action="/machines" method="POST">
    @csrf
<label>Nome: </label>
<input type="text" name="name" id="name" placeholder=""><br>

<label>Endereço de origem: </label>
<input type="text" name="endorigem" id="endorigem"  placeholder=""><br>

<label>Endereço de entrega: </label>
<input type="text" name="enddestino" id="enddestino" placeholder=""><br><br>

<label>Valor: </label>
<input type="text" name="valor" id="valor" placeholder=""><br><br>


<button type="submit"> Cadastrar</button>

</x-layout>