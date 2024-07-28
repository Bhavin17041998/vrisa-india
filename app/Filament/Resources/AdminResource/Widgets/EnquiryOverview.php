<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use App\Models\Enquiry;
use App\Models\Product;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EnquiryOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Enquiry', Enquiry::query()->count()),
            Stat::make('Total Projects', Project::query()->count()),
            Stat::make('No of Products', Product::query()->count()),
        ];
    }
}
