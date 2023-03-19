# Simple Task 2

An application where the admin can create a task(title, description,

assigned_to_id, assigned_by_id) and assign it to any non-admin user. The Statistics

table holds the number of tasks assigned to each user.




# Build & Run

1. Make sure you have Docker and Docker Compose installed on your  system.
2. Navigate to the root directory of your Laravel project.
3. Copy the .env.example file and rename it to .env.
4. Edit the .env file and update the database settings according to your environment.
5. Installing Composer Dependencies:

```

docker run --rm \

    -u "$(id -u):$(id -g)" \

    -v "$(pwd):/var/www/html" \

    -w /var/www/html \

    laravelsail/php82-composer:latest \

    composer install --ignore-platform-reqs

```

6. Run application docker compose file using this command:

```

./vendor/bin/sail up

```
7. Generating Application Key

```
./vendor/bin/sail artisan key:generate
```

8. Migrations & DB Seeds
```
./vendor/bin/sail artisan migrate
```
```
./vendor/bin/sail artisan db:seed
```



**optionally you may run tasks seeder to seed 10,000,000 tasks into DB**

for this you need to uncomment seeder call Database\Seeders\DatabaseSeeder Class:

```
        $this->call(AdminsSeeder::class);
        $this->call(UsersSeeder::class);

        // $this->call(TasksSeeder::class);
```