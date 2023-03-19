
# Simple Task 2
An application where the admin can create a task(title, description,
assigned_to_id, assigned_by_id) and assign it to any non-admin user. The Statistics
table holds the number of tasks assigned to each user.

# Build & Run

**Installing Composer Dependencies**\
You may install the application's dependencies by navigating to the application's directory and executing the following command. This command uses a small Docker container containing PHP and Composer to install the application's dependencies:

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Then you may run application docker compose file using this command:

```
./vendor/bin/sail up

```
**Migrations & DB Seeds**

Inside docker container you can run this command for migrations:

```
./vendor/bin/sail artisan migrate

```

You may run Admins & Users seeds using this command:

```
./vendor/bin/sail artisan db:migrate

```

#### optionally you may run tasks seeder to seed 10,000,000 tasks into DB
for this you need to uncomment seeder call Database\Seeders\DatabaseSeeder Class:
```
        $this->call(AdminsSeeder::class);
        $this->call(UsersSeeder::class);
        
        // $this->call(TasksSeeder::class);
```