<?php

namespace App\Admin\Resources\CustomerResource\Pages;

use App\Admin\Resources\CustomerResource;
use Filament\Resources\Pages\Page;

class Yahoo extends Page
{
    protected static string $resource = CustomerResource::class;

    protected static string $view = 'admin.resources.customer-resource.pages.yahoo';
}
