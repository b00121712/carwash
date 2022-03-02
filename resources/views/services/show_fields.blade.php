<!-- Customerid Field -->
<div class="col-sm-12">
    {!! Form::label('customerid', 'Customerid:') !!}
    <p>{{ $service->customerid }}</p>
</div>

<!-- Corporatecustomerid Field -->
<div class="col-sm-12">
    {!! Form::label('corporatecustomerid', 'Corporatecustomerid:') !!}
    <p>{{ $service->corporatecustomerid }}</p>
</div>

<!-- Servicetypeid Field -->
<div class="col-sm-12">
    {!! Form::label('servicetypeid', 'Servicetypeid:') !!}
    <p>{{ $service->servicetypeid }}</p>
</div>

<!-- Servicedate Field -->
<div class="col-sm-12">
    {!! Form::label('servicedate', 'Servicedate:') !!}
    <p>{{ $service->servicedate }}</p>
</div>

<!-- Servicetime Field -->
<div class="col-sm-12">
    {!! Form::label('servicetime', 'Servicetime:') !!}
    <p>{{ $service->servicetime }}</p>
</div>

<!-- Fee Field -->
<div class="col-sm-12">
    {!! Form::label('fee', 'Fee:') !!}
    <p>{{ $service->fee }}</p>
</div>

