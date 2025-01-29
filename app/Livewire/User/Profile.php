<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Livewire\User\TopUserInfo;

class Profile extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab' => ['keep' => true]];

    public $fname, $lname, $fullname, $email, $username;


    public function selectTab($tab)
    {
        $this->tab = $tab;
    }
    public function mount()
    {
        $this->tab = Request('tab') ? Request('tab') : $this->tabname;

        $user = new UserResource(User::GetUserProfile());
        $this->fname = $user->first_name;
        $this->lname = $user->last_name;
        $this->fullname = $user->full_name;
        $this->email = $user->email;
        $this->username = $user->username;

    }

    public function updatePersonalDetails()
    {
        $user = User::GetUserProfile();

        // validate
        $this->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
        ]);

        $user->full_name = $this->fullname;
        $user->email = $this->email;
        $user->username = $this->username;

        $updated = $user->save();

        sleep(0.5);

        if ($updated) {
            $this->dispatch('showToastr', [
                'type' => 'success',
                'message' => 'Profile updated successfully!',
            ]);
            $this->dispatch('updateTopUserInfo')->to(TopUserInfo::class);
        } else {
            $this->dispatch('showToastr', [
                'type' => 'error',
                'message' => 'Failed to update profile!',
            ]);
        }


    }

    public function render()
    {
        return view('livewire.user.profile', [
            'user' => new UserResource(User::GetUserProfile()),
        ]);
    }
}
