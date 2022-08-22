<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Property;
use Illuminate\Console\Command;

class DailyFeatureCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unfeature:property';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily check featured Properties and those that have exceeded their featured duration should be unfeatured.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $featuredProperties = Property::where('is_featured', true)->get();
        foreach($featuredProperties as $property){
            if (Carbon::now()->gt($property->feature_to)) {
                $property->is_featured = false;
                $property->save();
            }
        }
        return 0;
    }
}
