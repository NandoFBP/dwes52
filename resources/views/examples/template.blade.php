
<h1>Ejemplo de Uso de vistas</h1>
<p>
    @if(isset($user))
        Bienvenido {{ $user }}
    @else
        Bienvenido Anónimo
    @endif
</p>
