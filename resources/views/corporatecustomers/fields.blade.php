<!-- Administratorid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('administratorid', 'Administratorid:') !!}
    {!! Form::number('administratorid', null, ['class' => 'form-control']) !!}
</div>

<!-- Firmname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firmname', 'Firmname:') !!}
    {!! Form::text('firmname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Numberofvehicles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numberofvehicles', 'Numberofvehicles:') !!}
    {!! Form::number('numberofvehicles', null, ['class' => 'form-control']) !!}
</div>