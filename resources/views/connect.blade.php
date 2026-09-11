@extends('layouts.app')

@section('title', 'Connect | THE MORGANS')

@section('content')
    <livewire:banner
        leading="Connect With Us"
        title="Wherever you are, start here."
        subtitle="Tell us about your organisation and what you're trying to achieve. The right company or the right combination of companies — will come back to you."
    />

     <livewire:contact-us />

    <livewire:footer />
@endsection
