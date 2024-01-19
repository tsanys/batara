<?php

namespace App\Charts;

use App\Models\MemberType;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MemberTypeCountChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $memberTypes = MemberType::pluck('name')->toArray();

        $memberTypeCounts = MemberType::with('members')->withCount('members')->get();

        $counts = [];
        foreach ($memberTypeCounts as $member) {
            $counts[] = $member->members_count;
        }

        return $this->chart->barChart()
            ->setTitle('Grafik Kelompok Pihak Anggota BATARA')
            ->addData('Jumlah Anggota Sesuai Kelompok', $counts)
            ->setFontColor('#00AF50')
            ->setColors(['#00743C'])
            ->setXAxis(array_map('ucwords', $memberTypes));
    }
}
