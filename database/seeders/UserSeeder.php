<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();

        $user->name="Sebastián Alejandro";
        $user->email=" sebastianalejandro.castroramirez23@gmail.com";
        $user->password="seba2000";

        $user->save();
        $user1 = new User();
$user1->name = "Sebastián Alejandro";
$user1->email = "sebastianalejandro.castroramirez23@gmail.com";
$user1->password = "seba2000";
$user1->save();

$user2 = new User();
$user2->name = "Valentina García";
$user2->email = "valentinagarcia@example.com";
$user2->password = "valentina123";
$user2->save();

$user3 = new User();
$user3->name = "Martín López";
$user3->email = "martinlopez@example.com";
$user3->password = "martin456";
$user3->save();

$user4 = new User();
$user4->name = "Ana Rodríguez";
$user4->email = "anarodriguez@example.com";
$user4->password = "ana789";
$user4->save();

$user5 = new User();
$user5->name = "Diego Martínez";
$user5->email = "diegomartinez@example.com";
$user5->password = "diego000";
$user5->save();

$user6 = new User();
$user6->name = "Laura Pérez";
$user6->email = "lauraperez@example.com";
$user6->password = "laura123";
$user6->save();

$user7 = new User();
$user7->name = "Andrés Gómez";
$user7->email = "andresgomez@example.com";
$user7->password = "andres456";
$user7->save();

$user8 = new User();
$user8->name = "María Torres";
$user8->email = "mariatorres@example.com";
$user8->password = "maria789";
$user8->save();

$user9 = new User();
$user9->name = "Sofía Hernández";
$user9->email = "sofiahernandez@example.com";
$user9->password = "sofia000";
$user9->save();

$user10 = new User();
$user10->name = "Javier Ruiz";
$user10->email = "javierruiz@example.com";
$user10->password = "javier123";
$user10->save();
    }
}
