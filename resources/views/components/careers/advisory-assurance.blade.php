@extends('layouts.app')

@section('title', 'Advisory & Assurance | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.O1 Advisory"
        title="Advisory & Assurance"
        subtitle="An international advisory and assurance practice serving banks, insurers, fintechs, asset managers and public institutions wherever they are regulated, and wherever risk finds them."
    />

    <livewire:careers.advisory-business />
    <livewire:footer />
@endsection
