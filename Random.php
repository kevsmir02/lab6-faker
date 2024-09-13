<?php

require 'vendor/autoload.php'; 

use Faker\Factory;

class Random {
    public static function generatePeople($count = 300) {
        $faker = Factory::create('en_PH');
        $people = [];

        $people[] = ['UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate', 'Email Address', 'Password'];

        for ($i = 0; $i < $count; $i++) {
            $people[] = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->secondaryAddress, 
                $faker->city, 
                $faker->state, 
                $faker->country,
                $faker->phoneNumber,
                $faker->mobileNumber,
                $faker->company,
                $faker->domainName,
                $faker->jobTitle,
                $faker->colorName,
                $faker->date('Y-m-d'),
                $faker->email,
                $faker->password
            ];
        }

        return $people;
    }
}
