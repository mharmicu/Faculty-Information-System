<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use Livewire\Component;
use Livewire\WithPagination;
use Laravel\Jetstream\ConfirmsPasswords;
use Illuminate\Support\Facades\Crypt;

class SalaryLivewire extends Component
{
    use ConfirmsPasswords;
    public $name, $contact_num, $sss, $deductions, $salary, $ids;
    public $isOpen = 0;
    use WithPagination;
    public $search = '', $searchTerm;

    public function render()
    {
        
        $this->ensurePasswordIsConfirmed();
        $searchTerm = '%' . $this->searchTerm . '%';
        $salaries = Salary::where('name', 'LIKE', $searchTerm)
            ->orWhere('contact_num', 'LIKE', $searchTerm)
            ->orWhere('sss', 'LIKE', $searchTerm)
            ->orWhere('deductions', 'LIKE', $searchTerm)
            ->orWhere('salary', 'LIKE', $searchTerm)
            ->orderBy('id', 'ASC')->paginate(10);

        

        return view('livewire.salary.salary-livewire', ['salaries' => $salaries]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function salarycreate()
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
        $this->contact_num = '';
        $this->sss = '';
        $this->deductions = '';
        $this->salary = '';
        $this->ids = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'contact_num' => 'required',
            'sss' => 'required',
            'deductions' => 'required',
            'salary' => 'required',
        ]);

        

        Salary::updateOrCreate(['id' => $this->ids], [
            'name' => $this->name,
            'contact_num' => $this->contact_num,
            'sss' => Crypt::encrypt($this->sss),
            'deductions' => Crypt::encrypt($this->deductions),
            'salary' => Crypt::encrypt($this->salary)

        ]);

        

        session()->flash(
            'message',
            $this->ids ? 'Employee Salary Updated Successfully.' : 'Employee Salary Created Successfully.'
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
        $Salaries = Salary::findOrFail($id);
        $this->ids = $id;
        $this->name = $Salaries->name;
        $this->contact_num = $Salaries->contact_num;
        

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Salary::find($id)->delete();
        session()->flash('message', 'Employee Salary Deleted Successfully.');
    }
}
