<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Translate extends Component
{
    public $indonesia, $en;
    public function rules()
    {
        return [
            'indonesia' => 'required'
        ];
    }
    public function translate()
    {
        $this->validate();
        $this->en = GoogleTranslate::trans($this->indonesia, 'en');;

    }
    public function render()
    {
        return view('livewire.translate');
    }
}
