@extends('adminmodule::layouts.master')
@section('header')
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-12 my-3">
                <div class="card shadow">
                    <div class="card-header white">
                        <div class="card-body">
                            <h5 class="card-title">Early Days</h5>
                            <hr>
                            <form action="/admin/early" method="post">
                                {{-- {{dd($early)}} --}}
                                @csrf
                                @isset($early)
                                    <input type="hidden" name="id" value="{{$early->Id}}">
                                @endisset
                                <textarea name="editor_earlydays" id="" cols="100" rows="100">
                                    @isset($early)
                                        {!!$early->isi!!}
                                    @endisset
                                </textarea>
                                <button type="submit" class="btn btn-primary btn-sm mt-2" value="">Save</button>
                            </form>
                        </div>
                    </div>
             </div>
</div>
<script>
        CKEDITOR.replace( 'editor_earlydays' );
</script>       
</body>
</html>
@endsection