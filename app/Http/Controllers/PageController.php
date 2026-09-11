<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageController extends Controller
{
    public function show(string $page): View|RedirectResponse
    {
        $pages = [
            'home' => ['view' => 'welcome'],
            'about' => ['view' => 'about'],
            'group' => ['view' => 'group'],
            'oysterChecks' => ['method' => 'oysterChecks'],
            'institutions' => ['view' => 'institutions'],
            'careers' => ['view' => 'careers'],
            'connect' => ['view' => 'connect'],
            'advisory-assurance' => ['view' => 'careers.advisory-assurance'],
            'risk-assurance-intelligence' => ['view' => 'careers.risk-assurance-intelligence'],
            'tmc-institute' => ['method' => 'tmcInstitute'],
            'grc-fincrime-prevention-awards-summit' => ['method' => 'awardsSummit'],
            'wgrcfp' => ['method' => 'wgrcfp'],
            'portrec-resourcing' => ['method' => 'portrecResourcing'],
            'tyneside-innovation' => ['method' => 'tynesideInnovation'],
            'procurement-supply-chain' => ['method' => 'procurementSupplyChain'],
            'real-estate-property-development' => ['method' => 'realEstatePropertyDevelopment'],
            'facilities-infrastructure-management' => ['method' => 'facilitiesInfrastructureManagement'],
            'tyneprints' => ['method' => 'tyneprints'],
        ];

        abort_unless(isset($pages[$page]), 404);

        $destination = $pages[$page];

        if (isset($destination['view'])) {
            return view($destination['view']);
        }

        if (isset($destination['method'])) {
            return $this->{$destination['method']}();
        }

        if (isset($destination['route'])) {
            return redirect()->route($destination['route']);
        }

        abort(404);
    }

    public function tmcInstitute(): View
    {
        return view('careers.tmc-institute');
    }

    public function oysterChecks(): View
    {
        return view('careers.oysterChecks');
    }

    public function awardsSummit(): View
    {
        return view('institutions');
    }

    public function wgrcfp(): View
    {
        return view('careers.wgrcfp');
    }

    public function portrecResourcing(): View
    {
        return view('careers.portrecResourcing');
    }

    public function tynesideInnovation(): View
    {
        return view('careers.tyneside-innovation');
    }

    public function procurementSupplyChain(): View
    {
        return view('careers.procurement-supply-chain');
    }

    public function realEstatePropertyDevelopment(): View
    {
        return view('careers.real-estate-property-development');
    }

    public function facilitiesInfrastructureManagement(): View
    {
        return view('careers.facilities-infrastructure-management');
    }

    public function tyneprints(): View
    {
        return view('careers.tyneprints-print-brand-production');
    }
}