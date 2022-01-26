<?php
    use Illuminate\Support\Facades\Crypt;
?>

<x-slot name="header">
    <h2>
        Faculty Salary Information
    </h2>
    <style>
        

        

        td {
            color: #FFF2F2;
            
            font-size: 14px;
            color: #000000;
            text-align: Center;
            background-color: #DBEBFF;
            border-color: #BAD0EF;
        }

        header {
            background-color: #8ED6EA;
        }

        input[type=search] {
            background-color: #8CD1E6;
            border-color: #C9EAF3;
            font-family: Serief;
        }
    </style>
</x-slot>
<div class="bg-green-100 py-12">
    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            
            
           
            
            <input type="text" class="bg-green-50 hover:bg-white text-green-900  float-right py-2 rounded my-3" placeholder=" Search... " wire:model="searchTerm" />
            @if($isOpen)
            @include('livewire.salary.salary-create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-900 text-white">
                        <th class="px-4 py-2 w-20">EMPLOYEE ID</th>
                        <th class="px-4 py-2">NAME</th>
                        <th class="px-4 py-2">CONTACT NUMBER</th>
                        <th class="px-4 py-2">SSS</th>
                        <th class="px-4 py-2">DEDUCTIONS</th>
                        <th class="px-4 py-2">SALARY</th>
                        <th class="px-4 py-2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($salaries as $salary)
                    <tr>
                        <td class="border px-4 py-2">{{ $salary->personal_info_id }}</td>
                        <td class="border px-4 py-2">{{ $salary->name }}</td>
                        <td class="border px-4 py-2">{{ $salary->contact_num}}</td>
                        <td class="border px-4 py-2">{{ Crypt::decrypt($salary->sss) }}</td>
                        <td class="border px-4 py-2">{{ Crypt::decrypt($salary->deductions)}}</td>
                        <td class="border px-4 py-2">{{ Crypt::decrypt($salary->salary)}}</td>
                        <td class="border px-1 py-2 whitespace-no-wrap">
                            <button wire:click="edit({{ $salary->id }})" class="bg-blue-500 hover:bg-blue-700  py-2 px-4 rounded">Edit</button>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table><br>
            {{ $salaries->links()}}
        </div>
    </div>
</div>