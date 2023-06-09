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

## Tinker commands to add new item
<code>
$food = new App\Models\Food;
$food->name = 'Chocolat';
$food->calories = 36;
$food->proteines = 1.8;
$food->glucides = 22.1;
$food->lipides = 0.1;
$food->diet = ['Vegan','Keto'];
$food->save();
</code>

## Todo
- Add a seeder or a form to add new items
- Add image to FoodModel
- Add diet enum to FoodModel
- Add info longtext to FoodModel