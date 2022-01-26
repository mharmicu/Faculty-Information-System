<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ViewOnlyTable;

class ViewOnlyTableLivewire extends Component
{
    use WithPagination;
    public $search = '', $searchTerm;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $personal_infos = ViewOnlyTable::where('user_id', 'LIKE', $searchTerm)
                ->orWhere('name', 'LIKE', $searchTerm)
                ->orWhere('email', 'LIKE', $searchTerm)
                ->orWhere('contact_num', 'LIKE', $searchTerm)
                ->orWhere('department', 'LIKE', $searchTerm)
                ->orWhere('subject', 'LIKE', $searchTerm)
                ->orWhere('section', 'LIKE', $searchTerm)
                ->orWhere('schedule', 'LIKE', $searchTerm)
                ->orWhere('user_id', 'LIKE', $searchTerm)
                ->orderBy('id', 'ASC')->paginate(8);

        return view('livewire.view-only-table-livewire', ['personal_infos' => $personal_infos]);
    }
}
