<?php

namespace Max\SecurityAuditBot;

use Illuminate\Support\ServiceProvider;

class SecurityAuditBotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'views');
    }
}
