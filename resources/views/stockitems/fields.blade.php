<!-- Administratorid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('administratorid', 'Administratorid:') !!}
    {!! Form::number('administratorid', null, ['class' => 'form-control']) !!}
</div>

<!-- Branchid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branchid', 'Branchid:') !!}
    {!! Form::number('branchid', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product', 'Product:') !!}
    {!! Form::text('product', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Stocklevel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stocklevel', 'Stocklevel:') !!}
    {!! Form::number('stocklevel', null, ['class' => 'form-control']) !!}
</div>