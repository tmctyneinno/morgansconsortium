@extends('layouts.app')

@section('title', 'Tyneside Innovation — Technology & Digital | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.03 INSTITUTIONAL"
        :entryTable="true"
        title="TMC Institute — Executive Education"
        subtitle="We build the professionals the profession needs next — through executive programmes, certification pathways and corporate academies delivered worldwide."
        brand-site="tmcinstitute.com"
        brand-url="https://tmcinstitute.com"
        category='Institutional'
        registerEntry='M.03'
    />

     <livewire:careers.tmc-institute />

    <livewire:footer />
@endsection
