@extends('layouts.app')

@section('title', 'About | THE MORGANS')

@section('content')
     <livewire:banner 
          leading="ABOUT THE GROUP"
          title="Built like an institution. Run like eleven businesses."
          subtitle="THE MORGANS is a diversified global group of independent companies. This page sets out what we believe, how we work, where we came from — and who holds us to it."
     />
     <livewire:our-story />
     <livewire:milestones />
     <livewire:milestones />
     <livewire:mission /> 
     <livewire:first-principle /> 
     <livewire:strength-values /> 
     <livewire:footer />
@endsection 
