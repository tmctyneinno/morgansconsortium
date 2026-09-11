@extends('layouts.app')

@section('title', 'Tyneside Innovation — Technology & Digital | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.02 INSTITUTIONAL"
        :entryTable="true"
        title="OysterChecks — Risk & Assurance Intelligence"
        subtitle="OysterChecks is not just a verification tool. It is a unified risk and assurance intelligence platform — built to help organisations prove trust, in real time.."
        brand-site="oysterchecks.com"
        brand-url="https://oysterchecks.com"
        category='Institutional'
        registerEntry='M.02'
    />

     <livewire:careers.oysterchecks />

    <livewire:footer />
@endsection
