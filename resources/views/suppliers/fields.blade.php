<!-- Suppliername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suppliername', 'Suppliername:') !!}
    {!! Form::text('suppliername', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product', 'Product:') !!}
    {!! Form::text('product', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>