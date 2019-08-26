<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(LocationTypesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
    }

    public static function setModelAttributes(Model $model, array $data, $save = falfe)
    {
        foreach ($data as $attribute => $value) {
            $model->{$attribute} = $value;
        }
        if ($save) {
            $model->save();
        }
        return $model;
    }
}
