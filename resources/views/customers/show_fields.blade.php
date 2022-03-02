<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $customer->firstname }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $customer->lastname }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Street Field -->
<div class="col-sm-12">
    {!! Form::label('street', 'Street:') !!}
    <p>{{ $customer->street }}</p>
</div>

<!-- Housenumber Field -->
<div class="col-sm-12">
    {!! Form::label('housenumber', 'Housenumber:') !!}
    <p>{{ $customer->housenumber }}</p>
</div>

