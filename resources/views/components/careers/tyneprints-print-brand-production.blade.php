@extends('layouts.app')

@section('title', 'Risk & Assurance Intelligence | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Tyneprints — Print & Brand Production"
        subtitle="Institutions are judged by what they publish. Tyneprints makes sure everything that carries a client's name deserves to — and delivers it to the doorstep."
        brand-site="tyneprints.com"
        brand-url="https://tyneprints.com"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.tyneprints-print-brand-production />

    <livewire:footer />
@endsection
