<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an admin user for the dashboard panel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = Hash::make($this->argument('password'));

        User::create([
            'name' =>$name,
            'email'=>$email,
            'password'=>$password,
            'email_verified_at'=>Carbon::today(),
            'role_id'=>1,
        ]);

        $this->info('User successfully created, login with Email: '.$email.", and password given");

    }
}
