<?php

namespace App\Http\Livewire\Profile;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateProfileInformationForm extends Component
{

    public $state = [];

    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateProfileInformation(UpdateUserProfileInformation $updater)
    {
        $this->resetErrorBag();

        $updater->update(
            Auth::user(), $this->state
        );

        $this->emit('refresh-header');
    }

    public function render()
    {
        return view('profile.update-profile-information-form');
    }
}
