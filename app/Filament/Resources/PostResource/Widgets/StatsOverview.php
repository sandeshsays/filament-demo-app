<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Posts', Post::all()->count())->color('success'), 
            Card::make('Published', Post::where('is_published',true)->count()),
            Card::make('UnPublished', Post::where('is_published',false)->count()),
        ];
    }
}
