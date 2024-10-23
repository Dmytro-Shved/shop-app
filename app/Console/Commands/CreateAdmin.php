<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    // Command name
    protected $signature = 'create:admin';

    // Command description
    protected $description = 'creates a new admin';

    // Execute the console command
    public function handle()
    {
        // Get a data from console
        $name = $this->ask('Admins name');
        $email = $this->ask('Admins email');
        $password = $this->ask('Enter a password');
        $password_confirmation = $this->ask('Confirm the password');

        // Get a data, then get a rules of validation
        $validator = Validator::make
        ([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password_confirmation
        ],
        [
            'name' => ['required', 'max:255', 'unique:admins'],
            'email' => ['required', 'max:255', 'email', 'unique:admins'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        // Check if validation is successful (if not then show error message)
        if ($validator->fails()){
            $this->info('Validation failed:');
            // Show errors
            foreach ($validator->errors()->all() as $error){
                $this->error($error);
            }
            return;
        }

        // Create a new admin
        Admin::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        // Show success message
        $this->info('Admin was successfully created');
    }
}
