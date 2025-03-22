php artisan make:migration create_users_table --create=users --path=database/migrations
php artisan make:migration create_periksas_table --table=periksas --path=database/migrations
php artisan make:migration create_obats_table --table=obats --path=database/migrations
php artisan make:migration create_detail_periksas_table --table=detail_periksas --path=database/migrations

php artisan migrate:rollback
#generate table
php artisan migrate
#generate seeder
php artisan db:seed
php artisan migrate:refresh --seed

# MODEL ITU DI LARAVEL ITU SAMA KEK ENTITY
php artisan make:model User
php artisan make:model Periksa
php artisan make:model Obat
php artisan make:model DetailPeriksa

#test model
php artisan tinker
App\Models\User::all();
App\Models\Periksa::all();
App\Models\Obat::all();
App\Models\DetailPeriksa::all();

#php artisan make:factory UserFactory --model=User
php artisan make:seeder UsersTableSeeder
php artisan make:seeder PriksasTableSeeder
php artisan make:seeder ObatsTableSeeder
php artisan make:seeder DetailPeriksasTableSeeder

php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=PeriksaTableSeeder
php artisan db:seed --class=ObatTableSeeder
php artisan db:seed --class=DetailPeriksaTableSeeder

#MAKE CONTROLLER, itu gabungan repository service dan handler
php artisan make:controller AuthController
php artisan make:controller PeriksaController
php artisan make:controller ObatController
