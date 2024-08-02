<?php

namespace Database\Factories;
use App\Models\FlashSale;
use App\Models\Article;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FlashSale>
 */
class FlashSaleFactory extends Factory
{
    protected $model = FlashSale::class;

    public function definition()
    {
        $startTime = Carbon::now()->addDays($this->faker->numberBetween(1, 30));
        $endTime = (clone $startTime)->addHours($this->faker->numberBetween(1, 24));

        return [
            'article_id' => Article::factory(),
            'discount_price' => $this->faker->randomFloat(2, 1, 50),
            'start_time' => $startTime,
            'end_time' => $endTime,
        ];
    }
}
