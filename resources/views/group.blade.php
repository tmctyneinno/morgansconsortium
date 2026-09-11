@extends('layouts.app')

@section('title', 'The Group | THE MORGANS')

@section('content')
    <livewire:banner
        leading="The group"
        title="Eleven lines of business, one register."
        subtitle="Each entry below is an operating company or division of the group. Select an entry to read its remit, or visit the brand directly."
    />
    <livewire:home.group-register />
    <livewire:footer />
@endsection
