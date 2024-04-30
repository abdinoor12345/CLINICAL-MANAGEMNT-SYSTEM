<?php

namespace App\Livewire;
 use Livewire\Attributes\Rule;
 
use Livewire\Component;
use App\Models\Contact;
class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:contacts,email',
        'message' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function saveContact()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        session()->flash('message', 'submitted successfully will keep in touch you soon.');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
}
