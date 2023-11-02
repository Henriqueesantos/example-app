@if(session('sucesso'))
<p style="color: green;">{{session('sucesso')}}</p>
@endif

@if(session('danger'))
<p style="color: red;">{{session('danger')}}</p>
@endif