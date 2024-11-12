<div class="table-responsive-sm">
    <table class="table table-striped" id="productReports-table">
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Total Precio</th>
        <th>Fecha creacion</th>
        <th>Fecha modificacion</th>
        <th>categoria</th>
        <th>SubCategoria</th>
        <th>Creado por</th>
        <th>Modificado por</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productReports as $productReport)
            <tr>
                <td>{{ $productReport->product_name }}</td>
            <td>{{ $productReport->product_code }}</td>
            <td>{{ $productReport->product_stock }}</td>
            <td>{{ $productReport->product_price }}</td>
            <td>{{ $productReport->total_price }}</td>
            <td>{{ $productReport->creation_date }}</td>
            <td>{{ $productReport->modification_date }}</td>
            <td>{{ $productReport->category_name }}</td>
            <td>{{ $productReport->subcategory_name }}</td>
            <td>{{ $productReport->created_by_user }}</td>
            <td>{{ $productReport->modified_by_user }}</td>   

            </tr>
        @endforeach
        </tbody>
    </table>
</div>