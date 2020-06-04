<?php namespace AlbrightLabs\Twilio\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'albrightlabs_twilio_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
