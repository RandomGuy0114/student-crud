<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name', 'project name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div class="container p-5 m-5">


<form method="POST" action="{{ route('updatestudent') }}"> 
    @csrf
    {{-- ang @csrf ay kailangan kapag may method ka sa form like 'POST or GET at iba pa..' --}}.


    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>  
        {{-- yung $student dito ito yung 'student' pinasa ng StudentController na  may class tapos may method na edit.   --}}
        {{-- yung $student ay katumbas ng isang column sa table ng database --}}
        
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>

        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" required>

        <input type="hidden" name="id" value="{{ $student->id }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</body>