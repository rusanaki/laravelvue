@extends('layout')
@section('content')
	<transition name="component-fade" mode="out-in">
  		<component v-bind:is="content"></component>
	</transition>
@endsection('content')