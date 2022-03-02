<!-- Customerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customerid', 'Customerid:') !!}
    {!! Form::number('customerid', null, ['class' => 'form-control']) !!}
</div>

<!-- Corporatecustomerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('corporatecustomerid', 'Corporatecustomerid:') !!}
    {!! Form::number('corporatecustomerid', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicetypeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicetypeid', 'Servicetypeid:') !!}
    {!! Form::number('servicetypeid', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicedate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicedate', 'Servicedate:') !!}
    {!! Form::text('servicedate', null, ['class' => 'form-control','id'=>'servicedate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#servicedate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Servicetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicetime', 'Servicetime:') !!}
    {!! Form::text('servicetime', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>