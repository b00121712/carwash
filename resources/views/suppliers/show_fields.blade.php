<!-- Suppliername Field -->
<div class="col-sm-12">
    {!! Form::label('suppliername', 'Suppliername:') !!}
    <p>{{ $supplier->suppliername }}</p>
</div>

<!-- Product Field -->
<div class="col-sm-12">
    {!! Form::label('product', 'Product:') !!}
    <p>{{ $supplier->product }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $supplier->amount }}</p>
</div>

