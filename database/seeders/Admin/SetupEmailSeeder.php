<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Seeder;

class SetupEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $env_modify_keys = [
            "MAIL_MAILER"       => "smtp",
            "MAIL_HOST"         => "smtppro.zoho.com",
            "MAIL_PORT"         => "465",
            "MAIL_USERNAME"     => "system@appdevs.net",
            "MAIL_PASSWORD"     => "iTwbwrWN4Da5",
            "MAIL_ENCRYPTION"   => "ssl",
            "MAIL_FROM_ADDRESS" => "system@appdevs.net",
            "MAIL_FROM_NAME"    => "StripCard",
            "APP_NAME"          => "StripCard",
        ];

        modifyEnv($env_modify_keys);
    }
}
