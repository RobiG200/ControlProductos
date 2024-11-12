
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Codigo:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Precio:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control', 'placeholder' => 'Selecciona una categoría...', 'id' => 'category']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('id_subcategories', 'Subcategoría') !!}
    {!! Form::select('id_subcategories', [], null, ['class' => 'form-control', 'placeholder' => 'Selecciona una subcategoría...', 'id' => 'subcategory']) !!}
</div>


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancel</a>
</div>

<script>
    $(document).ready(function() {
        $('#category').on('change', function() {
            var categoryId = $(this).val();
            if (categoryId) {
                $.ajax({
                    url: '/productos/subcategories/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#subcategory').empty();
                        $('#subcategory').append('<option value="">Selecciona una subcategoría...</option>');
                        $.each(data, function(key, value) {
                            $('#subcategory').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            } else {
                $('#subcategory').empty();
                $('#subcategory').append('<option value="">Selecciona una subcategoría...</option>');
            }
        });
    });
</script>