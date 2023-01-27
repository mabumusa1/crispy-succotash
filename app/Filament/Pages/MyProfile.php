<?php

namespace App\Filament\Pages;

use JeffGreco13\FilamentBreezy\Pages\MyProfile as BaseProfile;
use Filament\Forms;

class MyProfile extends BaseProfile
{

   protected function getUpdateProfileFormSchema(): array
    {
        return array_merge(parent::getUpdateProfileFormSchema(), [
            Forms\Components\TextInput::make("job_title"),
            Forms\Components\Checkbox::make("marketing_consent")->label(
                "I consent to receive email notifications....."
            ),
        ]);
    }
}
