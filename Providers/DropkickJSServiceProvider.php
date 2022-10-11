<?php

namespace Modules\DropkickJS\Providers;
use Illuminate\Support\ServiceProvider;

class DropkickJSServiceProvider extends ServiceProvider
{
    private const MODULE_NAME = 'dropkickjs';

    public function boot()
    {
        \Eventy::addAction('javascript', function() {
            echo <<<JS
$('[title="New Conversation"]').attr("title", "New Conversation ⚠️ DO NOT USE THIS TO CONTACT PMT WORKERS ⚠️ instead please use NOTES attached to a spcification conversation");
$('[title="Reply"]').attr("title", "Reply ⚠️ DO NOT USE THIS TO CONTACT PMT WORKERS ⚠️ instead please use the NOTES button");
JS;
        }, -1, 3);
    }
}