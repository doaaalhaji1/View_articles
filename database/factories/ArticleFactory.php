<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->name,
            // هذا انشاء فئة ويعيد الرقم المعرف لها قمت بانشاء هذا حتى لا يحدث خطا لانه يوجد ارتباط بين الجدولين
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_published' => $this->faker->boolean(75),
        ];
    }
}
