<h2>Listado de libros</h2>
@if (\Session::has('success'))
    <div>
        {{ \Session::get('success') }}
    </div>
@endif
<div>
    <a href="/libros/crear">
        <button>Crear</button>
    </a>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Autor</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro )
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->descripcion}}</td>
                <td>{{$libro->autor}}</td>
                <td>
                    <a href="/libros/{{$libro->id}}/editar">Editar</a>
                    <form action="/libros/{{ $libro->id}}/eliminar" method="POST">
                        @csrf
                        @method('delete')
                        <button type"submit" onclick="return confirm('¿Estas seguro de eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
