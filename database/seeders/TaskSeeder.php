<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = Task::factory(100)->create();

        foreach($tasks as $task) {
            Image::create([
                'url' => 'images/task.jpg',
                'imageable_id' => $task->id,
                'imageable_type' => Task::class,
            ]);
        }
    }
}
