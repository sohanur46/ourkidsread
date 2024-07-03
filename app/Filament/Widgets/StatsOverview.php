<?php

namespace App\Filament\Widgets;

use App\Models\Availability;
use App\Models\Rbmatch;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalstudents = User::with('usertype')->whereHas('usertype', function($query){
            $query->where('item_type_id', 12)->where('item_id', 2);
        })->count();

        $totalreader = User::with('usertype')->whereHas('usertype', function($query){
            $query->where('item_type_id', 12)->where('item_id', '!=', 2);
        })->count();

        $totalmatches = 0;//Rbmatch::count();
        $totalavailabilities = 0; //Availability::count();
        
        return [
            Stat::make('Students', $totalstudents)
                ->description('Number of students')
                ->icon('heroicon-o-users')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->url('/admin/students')
                ->color('success'),

            Stat::make('Reading Buddies', $totalreader)
                ->description('Number of readers')
                ->icon('heroicon-m-square-3-stack-3d')
                ->chart([20, 18, 15, 10, 12, 11, 8])
                ->url('/admin/readers')
                ->color('success'),

            Stat::make('Availabilities', $totalavailabilities)
                ->description('Availabilities')
                ->icon('heroicon-m-archive-box-arrow-down')
                ->url('/admin/availabilities')
                ->color('success'),

            Stat::make('RB Matches', $totalmatches)
                ->description('RB Matches')
                ->icon('heroicon-m-arrows-pointing-in')
                ->url('/admin/rbmatches')
                ->color('success'),
        ];        
    }
}
