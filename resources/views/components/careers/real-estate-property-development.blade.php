@extends('layouts.app')

@section('title', 'Real Estate & Property Development | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Real Estate & Property Development"
        subtitle="Property is where the group's worlds meet: the growth of emerging markets, managed with institutional discipline."
        brand-site="grcfincrimeawards.com"
        brand-url="https://grcfincrimeawards.com"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.tyneprints-print-brand-production />

    <livewire:footer />
@endsection
