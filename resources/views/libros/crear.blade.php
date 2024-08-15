<h2>Crear Libro</h2>
@if($errors->any())
<ul>
    <!--{{ implode('', $errors->all('<li>:message</li>')) }}-->
    {!! implode('', $errors->all('<li>:message</li>')) !!}
</ul>
@endif
<div>
    <form action="/libros/guardar" method="POST">
        @csrf
        
        <div>
            <input autofocus type="text" name="titulo" placeholder="Ingresa titulo">
        </div>
        
        <div>
            <input type="text" name="autor" placeholder="Ingresa autor">
        </div>
        
        <div>
            <textarea name="descripcion" placeholder="Ingresa una descripcion"></textarea>
        </div>

        <div>
            <a href="/libros">cancelar</a>
            <button type="submit">Guardar</button>
        </div>

    </form>
</div>
