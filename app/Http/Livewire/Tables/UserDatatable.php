<?php

namespace App\Http\Livewire\Tables;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatable extends LivewireDatatable
{
    public $name = 'UserDatatable';

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return User::query();
    }

    public function columns(): array
    {
        return [
            Column::name('name')
                ->label('Name')
                ->searchable(),

            Column::name('username')
                ->label('Username')
                ->searchable(),

            Column::name('email')
                ->label('Email'),

            Column::name('guid')
                ->label('GUID'),

            Column::name('domain')
                ->label('Domain'),
        ];
    }
}
