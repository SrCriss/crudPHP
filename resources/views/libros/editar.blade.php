<h2>Actualizar "{{ $libro->titulo}}"</h2>
@if($errors->any())
<ul>
    <!--{{ implode('', $errors->all('<li>:message</li>')) }}-->
    {!! implode('', $errors->all('<li>:message</li>')) !!}
</ul>
@endif
<div>
    <form action="/libros/{{$libro->id}}/actualizar" method="POST">
        @csrf
        @method('put')

        <div>
            <input autofocus type="text" name="titulo" placeholder="Ingresa titulo" value="{{ $libro->titulo }}">
        </div>
        
        <div>
            <input type="text" name="autor" placeholder="Ingresa autor" value="{{ $libro->autor}}">
        </div>
        
        <div>
            <textarea name="descripcion" placeholder="Ingresa una descripcion">{{ $libro->descripcion}}</textarea>
        </div>

        <div>
            <a href="/libros">cancelar</a>
            <button type="submit">Actualizar</button>
        </div>

    </form>
</div>
