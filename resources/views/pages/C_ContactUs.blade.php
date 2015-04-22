<!DOCTYPE html>
<html lang="en">
    <!-- Start Hesder -->
    <head>
	@include('include.head')
	
</head>
<body>
@include('include.header')
<!-- End header -->

<div class="container">
    <h1>Contact Us</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Phone Number') !!}
    {!! Form::text('number', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your phone number')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group btn btn-large btn-success" style="margin-bottom:2cm;">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-large btn-success')) !!}
</div>
{!! Form::close() !!}
     
     
</div>

<!-- End if 2nd section -->
    <!-- Start Footer -->
@include('include.footer')
    <!-- End Footer -->

@include('include.foot')
</body>

</html>