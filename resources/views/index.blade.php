@extends('layouts.app')

@section('sidebar')

@include('includes.sidebar')

@endsection

@section('aside')

@include('includes.aside')

@endsection

@section('headercontent')

@include('includes.headercontent')

@endsection

@section('about')

@include('includes.about')

@endsection

@section('resume')

@include('includes.resume')

@endsection

@section('services')

@include('includes.services')

@endsection

@section('skills')

@include('includes.skills')

@endsection

@section('works')

@include('includes.works')

@endsection

@section('contact')

@include('includes.contact')

@endsection

@section('empty')

    @include('includes.empty')

@endsection
@section('jquery')
<script>
$(function(){
  $('#form').submit(function(event){
    var verified = grecaptcha.getResponse();

    if (verified.length === 0){

      event.preventDefault();
    }

  });

});



</script>
@endsection
