## Introduction
The application is setup with <a href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze">Laravel Breeze</a>, <a href="https://inertiajs.com/">Inertia</a> and <a href="https://vuejs.org/">Vue3</a> to have a base login, auth already in place for the future.

Start Laravel API :
`php artisan serve`

Start Frontend UI :
`npm run dev`

## Database
This application uses SQLite for a quick setup. Moving to a different type of DB for the future would be an option if the application goes further.
Replace the DB part in .env.example with `DB_CONNECTION=sqlite` and it should work.

Make migration :
`php artisan migrate`

## Routing
The routing is handled by Inertia.

## Navigating through the app
When logged to the Laravel application, follow the link to "Food" to see the food list. The list is not directly on the Dashboard to avoid polluting the homepage.

## Styling
The application is created with <a href="https://tailwindcss.com/">Tailwind</a> but some custom css can be added to have a more semantic approach.

## Populating the database
Since there is no form yet to add new items to the db. The better approach is to use tinker to add new elements.

Seed the database :
`php artisan db:seed --class=FoodSeeder`

## Tinker commands to add new item
<code>
$food = new App\Models\Food;
$food->name = 'Pineapple';
$food->calories = 36;
$food->proteines = 1.8;
$food->glucides = 22.1;
$food->lipides = 0.1;
$food->diet = ['vegan', 'gluten_free'];
$food->image = "https://loremflickr.com/240/240/fruit?lock=1";
$food->description = "This is a nice fruit!";
$food->save();
</code>

## Clear db records in Tinker
``App\Models\Food::truncate();``

## Changelog
- Added image and description to FoodModel
- Improved seeder with better fruits data
- Changed styling to a full tailwind solution for more homogenization
- Improved pagination UI
- Added a 'clear' button on search bar
- Added food statistiques unit
- Added delete method for a better use
- Improved searching with more fields
