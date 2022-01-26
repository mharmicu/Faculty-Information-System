<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PersonalInfo;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\ConfirmsPasswords;
use Illuminate\Support\Facades\Crypt;

class PersonalInfos extends Component
{
    use ConfirmsPasswords;

    public $user_id, $name, $email, $contact_num, $department, $subject, $section, $schedule, $ids;
    public $isOpen = 0;
    use WithPagination;
    public $search = '', $searchTerm;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $personal_infos = PersonalInfo::where('user_id', 'LIKE', $searchTerm)
                ->orWhere('name', 'LIKE', $searchTerm)
                ->orWhere('email', 'LIKE', $searchTerm)
                ->orWhere('contact_num', 'LIKE', $searchTerm)
                ->orWhere('department', 'LIKE', $searchTerm)
                ->orWhere('subject', 'LIKE', $searchTerm)
                ->orWhere('section', 'LIKE', $searchTerm)
                ->orWhere('schedule', 'LIKE', $searchTerm)
                ->orWhere('user_id', 'LIKE', $searchTerm)
                ->orderBy('id', 'ASC')->paginate(8);

        return view('livewire.admin.personal-infos', ['personal_infos' => $personal_infos]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function personalinfocreate()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->contact_num = '';
        $this->department = '';
        $this->subject = '';
        $this->section = '';
        $this->schedule = '';
        $this->ids = '';
    }

    protected $rules = [
        
        'contact_num' => 'required',
        'department' => 'required',
        'subject' => 'required',
        'section' => 'required',
        'schedule' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            
            'contact_num' => 'required',
            'department' => 'required',
            'subject' => 'required',
            'section' => 'required',
            'schedule' => 'required',
        ]);

        PersonalInfo::updateOrCreate(['id' => $this->ids], [
            //'user_id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            
            'contact_num' => $this->contact_num,
            'department' => $this->department,
            'subject' => $this->subject,
            'section' => $this->section,
            'schedule' => $this->schedule,


        ]);

        session()->flash('message',$this->ids ? 'Personal Info Updated Successfully.' : 'Personal Info Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $PersonalInfo = PersonalInfo::findOrFail($id);
        $this->ids = $id;
        $this->name = $PersonalInfo->name;
        $this->email = $PersonalInfo->email;
        
        $this->contact_num = $PersonalInfo->contact_num;
        $this->department = $PersonalInfo->department;
        $this->subject = $PersonalInfo->subject;
        $this->section = $PersonalInfo->section;
        $this->schedule = $PersonalInfo->schedule;

        $this->openModal();
    }


    public function addSalary($id)
    {
        $PersonalInfo = PersonalInfo::findOrFail($id);
        $this->ids = $id;

        $Salary = new Salary();
        $Salary->name = $PersonalInfo->name;
        $Salary->contact_num = $PersonalInfo->contact_num;

        $Salary->sss = Crypt::encrypt('0');
        $Salary->deductions = Crypt::encrypt('0');
        $Salary->salary = Crypt::encrypt('0');

        $PersonalInfo->salary()->save($Salary);
        session()->flash('message', 'Faculty Added to Salary. Please check the Salary Information');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        $this->ensurePasswordIsConfirmed();
        PersonalInfo::find($id)->delete();
        session()->flash('message', 'Personal Info Deleted Successfully.');
    }
}
