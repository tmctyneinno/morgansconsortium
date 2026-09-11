@extends('layouts.app')

@section('title', 'Tyneside Innovation — Technology & Digital | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="Tyneside Innovation — Technology & Digital"
        subtitle="Digital solutions for digital needs — Tyneside Innovation is the engineering and creative-technology engine behind the group and its clients."
        brand-site="tynesideinnovation.com"
        brand-url="https://tynesideinnovation.com"
        category='Institutional'
        registerEntry='M.04'
    />

     <livewire:careers.tyneside-innovation />

    <livewire:footer />
@endsection
