@extends('layouts.app') 
@section('content')
<h1>home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, explicabo, dolores quis suscipit quo qui ipsum ratione quaerat at asperiores cupiditate quisquam quam itaque eius cumque id dicta! Rem, sapiente!</p>
@endsection
 
@section('sidebar') @parent
<p>This is append to the sidebar</p>
@endsection