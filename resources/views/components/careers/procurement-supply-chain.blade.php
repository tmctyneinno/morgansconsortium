@extends('layouts.app')

@section('title', 'Risk & Assurance Intelligence | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Procurement & Supply Chain"
        subtitle="Every organisation buys. Few buy well. We bring institutional discipline to sourcing, negotiation and supply — across borders."
        brand-site="grcfincrimeawards.com"
        brand-url="https://grcfincrimeawards.com"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.procurement-supply-chain />

    <livewire:footer />
@endsection
