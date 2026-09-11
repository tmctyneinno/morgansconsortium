@extends('layouts.app')

@section('title', 'Portrec Resourcing — Talent & Workforce | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Portrec Resourcing — Talent & Workforce"
        subtitle="The scarcest asset in any market is proven people. Portrec finds them, vets them and where clients prefer employs and manages them too."
        brand-site="portrec.com"
        brand-url="https://portrec.ng"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.portrecResourcing />

    <livewire:footer />
@endsection
