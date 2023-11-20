mueastra de lis
<!-- se crea la tabla de boostrad  -->
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>acciones</th>
        </tr>

    </thead>
    <tbody>
        @foreach ( $paciente as $pacientes)
 <!-- dentro del foreach traemos a paciente que esta en index creando una nueva varible            -->
        <tr>
            <td>{{$pacientes->id}}</td>
            <td>{{$pacientes->foto}}</td>
            <td>{{$pacientes->nombre}}</td>
            <td>{{$pacientes->apellido}}</td>
            <td>{{$pacientes->email}}</td>
            <td>Editar |
<!-- que nos envie atraves de este formulario el id que se desea eliminar                 -->
            <form action="{{url('/pacientes/'.$pacientes->id)}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
<!-- creamos un imput de tipo sumit con un  onclick donde le pregumte si realmente quiere borrar                 -->
                <input type="submit" onclick="return confirm('¿quieres realmente borrar?')" value="borrar">
            </form> 

            </td>
        </tr>
        @endforeach
    </tbody>
</table>