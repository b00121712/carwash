<!-- Branchid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branchid', 'Branchid:') !!}
    {!! Form::number('branchid', null, ['class' => 'form-control']) !!}
</div>

<!-- Plate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plate', 'Plate:') !!}
    {!! Form::text('plate', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Equipment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment', 'Equipment:') !!}
    {!! Form::text('equipment', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>