<html>
<body>

{!! Form::open(['url'=>'contact/submit']) !!}

<div class="row" style="margin-top: 15px;">
    <div class="form-group col-md-6">
        <label>First Name</label>
        {{Form::text('name','Enter name',['class'=>'form-control'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Email</label>
        {{Form::text('email','Enter email',['class'=>'form-control'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Message</label>
        {{Form::text('message','message',['class'=>'form-control'])}}
    </div>

    {{Form::submit('Submit')}}
</div>


{!! Form::close() !!}

</body>
</html>