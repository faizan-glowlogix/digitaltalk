<?php

namespace Tests\Unit;

use DTApi\Repository\UserRepository;
use Tests\TestCase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRepositoryTest extends TestCase
{
    /**
     * This test will a functional test. To test the complete functionality of a user is created or updated.
     *
     * @return void
     */
    public function test_for_create_or_update()
    {
        //best practice will be to write factory for testing purposes but for the sake of this demonstration i will using faker.

        $data = [
            //all the data that is required for saving a user into the database.
        ];

        $userRepository = new UserRepository();
        $response = $userRepository->createOrUpdate(2, $data);
        $this->assertInstanceOf('User', $response);
    }

    /**
     * This is a unit. It is just adding data in users table in database.
     * @param Faker $faker
     */
    public function test_for_create_or_update_user(Faker $faker)
    {
        $data = [
            'name' => $faker->name,
            'email' => 'faizan.ahmed151995@gmail.com',
        ];

        $userRepository = new UserRepository();
        $response = $userRepository->CreateORUpdateUser(2, $data);
        $this->assertInstanceOf('User', $response);
    }

    /**
     * It is checking if our database has the user that we just created in our previous step.
     */
    public function check_if_database_has_user()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'faizan.ahmed151995@gmail.com'
        ]);
    }
}
