<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Codigo</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $producto)
            <tr>
                <td>{{ $producto->product_name }}</td>
                <td>{{ $producto->code }}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->price }}</td>
                <td>{{ $producto->category_name }}</td>
                <td>{{ $producto->image }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('productos.edit', [$producto->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>