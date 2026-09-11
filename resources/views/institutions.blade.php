@extends('layouts.app')

@section('title', 'Institutions | THE MORGANS')

@section('content')
     <livewire:banner
          leading="INSTITUTIONAL BODIES"
          title="Where the profession gathers, learns and is recognised."
          subtitle="Beyond its operating companies, THE MORGANS architects and stewards professional institutions bodies that set standards, educate practitioners and convene the global governance, risk, compliance and financial-crime prevention community."
     />
     <livewire:institutions.why-institutions />
     <livewire:institutions.the-bodies />
     <livewire:institutions.why-convenes />
     <livewire:institutions.get-involved />
     <livewire:footer />
@endsection 
