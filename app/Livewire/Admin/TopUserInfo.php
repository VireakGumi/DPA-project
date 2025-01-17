<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class TopUserInfo extends Component
{

    protected $listeners = [
        'updateTopUserInfo' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.admin.top-user-info', [
            'user' => new UserResource(User::GetUserProfile()),
        ]);
    }
}
