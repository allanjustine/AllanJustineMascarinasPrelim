<!-- Yourname Field -->
<div class="col-sm-12">
    {!! Form::label('yourName', 'Yourname:') !!}
    <p>{{ $hotels->yourName }}</p>
</div>

<!-- Youraddress Field -->
<div class="col-sm-12">
    {!! Form::label('yourAddress', 'Youraddress:') !!}
    <p>{{ $hotels->yourAddress }}</p>
</div>

<!-- Hotelname Field -->
<div class="col-sm-12">
    {!! Form::label('hotelName', 'Hotelname:') !!}
    <p>{{ $hotels->hotelName }}</p>
</div>

<!-- Hotelnumber Field -->
<div class="col-sm-12">
    {!! Form::label('hotelNumber', 'Hotelnumber:') !!}
    <p>{{ $hotels->hotelNumber }}</p>
</div>

<!-- Hoteladdress Field -->
<div class="col-sm-12">
    {!! Form::label('hotelAddress', 'Hoteladdress:') !!}
    <p>{{ $hotels->hotelAddress }}</p>
</div>

<!-- Dateattended Field -->
<div class="col-sm-12">
    {!! Form::label('dateAttended', 'Dateattended:') !!}
    <p>{{ $hotels->dateAttended }}</p>
</div>

