 <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $producto->product_name }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Codigo:') !!}
    <p>{{ $producto->code }}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $producto->stock }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Precio:') !!}
    <p>{{ $producto->price }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Categoria:') !!}
    <p>{{ $producto->category_name }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    <img src="{{ asset('path/to/images/' . $producto->image) }}" alt="{{ $producto->product_name }}">
</div>

<!-- Dates and User Fields -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $producto->created_at }}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $producto->updated_at }}</p>
</div>