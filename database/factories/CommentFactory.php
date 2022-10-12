<?php

namespace Database\Factories;

use App\Models\Pivots\Comment;
use App\Models\WorkOrder;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pivots\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['body' => "string", 'commentable_id' => "mixed", 'commentable_type' => "\Closure"])] public function definition(): array
    {
        return [
            'body' => $this->faker->paragraph(),
            'commentable_id' => WorkOrder::factory(),
            'commentable_type' => function (array $attributes) {
                return WorkOrder::find($attributes['commentable_id'])->type;
            }
        ];
    }
}
