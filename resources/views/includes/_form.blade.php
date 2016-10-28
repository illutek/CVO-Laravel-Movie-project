{{--errors printing--}}
@include('shared.errors')

{{--form fields--}}
<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Director') !!}
    {!! Form::text('director', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('actors') !!}
    {!! Form::text('actors', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('runtime') !!}
    {!! Form::text('runtime', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genre') !!}
    {!! Form::select('genre', ['action' => 'Action', 'thriller' => 'Thriller', 'romance' => 'Romance', 'crime' => 'Crime'], null, ['class' => 'form-control', 'placeholder' => 'Select a genre...']) !!}
</div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('KNT') !!} KNT?
    </label>
</div>
<div class="form-group">
    {!! Form::submit($btnText, ['class'=>'btn btn-primary']) !!}
</div>