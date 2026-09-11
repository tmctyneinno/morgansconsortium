@extends('layouts.app')

@section('title', 'Careers | THE MORGANS')

@section('content')
     <livewire:banner
          leading="CAREER"
          title="Eleven businesses. One place to build a career."
          subtitle="Advisory, risk intelligence, technology, education, events, property, procurement, facilities, talent and brand production few groups anywhere offer this range of careers under one standard."
     /> 
     <livewire:careers.working-here />
     <livewire:careers.how-hiring-works />
     <livewire:footer />
@endsection 
