<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Areas;
use App\Models\Teachers;
use App\Models\Courses;
use App\Models\Computers;
use App\Models\Apprentices;
use App\Models\training_centers;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // AREAS
    $area1 = Areas::create(['name' => 'Sistemas']);
    $area2 = Areas::create(['name' => 'Contabilidad']);

    // CENTROS
    $center1 = Training_centers::create([
    'name' => 'Centro Industrial',
    'location' => 'Bogotá'
]);

    $center2 = training_centers::create([
    'name' => 'Centro Tecnológico',
    'location' => 'Medellín'
]);

    // TEACHERS
    $teacher1 = Teachers::create([
        'name' => 'Juan Perez',
        'email' => 'juan@gmail.com',
        'area_id' => $area1->id,
        'training_center_id' => $center1->id
    ]);

    $teacher2 = Teachers::create([
        'name' => 'Maria Lopez',
        'email' => 'maria@gmail.com',
        'area_id' => $area2->id,
        'training_center_id' => $center2->id
    ]);

    // COURSES
    $course1 = Courses::create([
        'course_number' => '2556789',
        'day' => 'Lunes',
        'area_id' => $area1->id,
        'training_center_id' => $center1->id
    ]);

    $course2 = Courses::create([
        'course_number' => '9876543',
        'day' => 'Martes',
        'area_id' => $area2->id,
        'training_center_id' => $center2->id
    ]);

    // RELACIÓN MUCHOS A MUCHOS
    $course1->teachers()->attach($teacher1->id);
    $course2->teachers()->attach($teacher2->id);

    // COMPUTERS
    $computer1 = Computers::create([
        'number' => 'PC01',
        'brand' => 'HP'
    ]);

    $computer2 = Computers::create([
        'number' => 'PC02',
        'brand' => 'Dell'
    ]);

    // APPRENTICES
    Apprentices::create([
        'name' => 'Carlos Ruiz',
        'email' => 'carlos@gmail.com',
        'cell_number' => '123456789',
        'course_id' => $course1->id,
        'computer_id' => $computer1->id
    ]);

    Apprentices::create([
        'name' => 'Ana Torres',
        'email' => 'ana@gmail.com',
        'cell_number' => '987654321',
        'course_id' => $course2->id,
        'computer_id' => $computer2->id
    ]);
}
}
