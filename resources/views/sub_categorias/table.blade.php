<div class="table-responsive-sm">
    <table class="table table-striped" id="subCategorias-table">
        <thead>
            <tr>
                <th>Nombre</th>
               <th>Categoria</th>
                <th colspan="3">Acccion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subCategorias as $subCategoria)
            <tr>
                <td>{{ $subCategoria->name }}</td>
            <td>{{ $subCategoria->category_name}}</td>
                <td>
                    {!! Form::open(['route' => ['subCategorias.destroy', $subCategoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subCategorias.show', [$subCategoria->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('subCategorias.edit', [$subCategoria->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>