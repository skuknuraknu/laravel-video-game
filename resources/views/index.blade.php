@extends("layouts.app")
@section('title') Video Game | Index @endsection
@section("content")
	<div class="container mx-auto px-4">
		<h2 class="text-blue-400 tracking-wide font-semibold">Popular Games</h2>
		<livewire:popular-games>
		{{-- Recently viewed --}}
		<livewire:recently-viewed>
	</div> {{-- End container --}}
@endsection