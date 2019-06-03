<!doctype html>




<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = 'stylesheet' href = "{{asset('css/app.css')}}">
        <title>{{config('app.name','TimeSheet')}}</title>

        
    </head>
    <body>
        @include('inc.navbar')
        <div class = "container">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>
<ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/posts">History</a>
        </li>
      </ul>

      Schema:table('posts', funstion($table){
          $table->integer('user_id');
      });
      table->dropColumn('user_id');

      

      php artisan make:migration add_user_id_to_posts
      php artisan migrate