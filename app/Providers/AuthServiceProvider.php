<?php

namespace App\Providers;


use \Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        \App\Question::class => \App\Policies\QuestionPolicy::class ,
        \App\Answer::class => \App\Policies\AnswerPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $func = function ($user, $question) {
            return $user->id == $question->user_id;
        };


        Gate::define( 'see_users', function ($user) {
            return $user->id == 1;
        } );


    }
}
