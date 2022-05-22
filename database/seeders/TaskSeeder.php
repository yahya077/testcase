<?php

namespace Database\Seeders;

use Custom\Models\FirstProvider;
use Custom\Models\SecondProvider;
use Custom\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($provider = 'first')
    {
        switch ($provider)
        {
            case 'second';
                $provider = new SecondProvider();
                break;
            default:
                $provider = new FirstProvider();
                break;
        }
        $response = $provider->response();
        foreach ($response as $task)
        {
            Task::create($task);
        }
    }
}
