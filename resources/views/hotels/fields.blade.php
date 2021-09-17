<!-- Yourname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yourName', 'Yourname:') !!}
    {!! Form::text('yourName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Youraddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yourAddress', 'Youraddress:') !!}
    {!! Form::text('yourAddress', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Hotelname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotelName', 'Hotelname:') !!}
    {!! Form::text('hotelName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Hotelnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotelNumber', 'Hotelnumber:') !!}
    {!! Form::text('hotelNumber', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Hoteladdress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotelAddress', 'Hoteladdress:') !!}
    {!! Form::text('hotelAddress', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Dateattended Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateAttended', 'Dateattended:') !!}
    {!! Form::text('dateAttended', null, ['class' => 'form-control','id'=>'dateAttended']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateAttended').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush