@extends('layouts.app')

@section('title', 'Facilities & Infrastructure Management | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Facilities & Infrastructure Management"
        subtitle="The best facilities management is invisible: buildings that simply work, everywhere you operate."
        brand-site="grcfincrimeawards.com"
        brand-url="https://grcfincrimeawards.com"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.facilities-infrastructure-management />

    <livewire:footer />
@endsection
