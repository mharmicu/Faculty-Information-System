<?php

use Illuminate\Support\Facades\Auth;

//$User = Auth::user();
//$usertype = $User->usertype;
?>

<x-slot name="header">
    <h2> Faculty Information </h2>

    <style>
        td {
            color: #FFF2F2;
            
            font-size: 14px;
            color: #000000;
            text-align: Center;
            background-color: #DBEBFF;
            border-color: #BAD0EF;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">






</x-slot>

<div class=" py-12">
    <div class=" max-w-9xl mx-auto sm:px-6 lg:px-10">
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

            <button wire:click="personalinfocreate()" class="bg-blue-900 hover:bg-blue-500 text-white py-2 px-4 rounded my-3 fa fa-plus"> Input Information</button>



            <input type="text" class="bg-white hover:bg-white text-blue-900 float-right py-2 rounded my-3" placeholder=" Search... " wire:model="searchTerm" />
            @if($isOpen)
            @include('livewire.admin.personal-infos-create')
            @endif

            <div class="table-responsive py-4">
                <table class="w-full border ">
                    <thead>
                        <tr class="bg-blue-900 text-white">
                            <th class="px-4 py-2 w-14 border ">EMPLOYEE ID</th>
                            <th class="px-4 py-2 w-14 border ">NAME</th>
                            <th class="px-4 py-2 w-14 border ">EMAIL</th>
                            <th class="px-4 py-2 w-14 border ">CONTACT NUMBER</th>
                            <th class="px-4 py-2 w-14 border ">DEPARTMENT</th>
                            <th class="px-4 py-2 w-14 border ">SUBJECT</th>
                            <th class="px-4 py-2 w-14 border ">SECTION</th>
                            <th class="px-4 py-2 w-14 border ">SCHEDULE</th>
                            <th class="px-4 py-2 w-14 border ">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($personal_infos as $info)
                        <tr class="">
                            <td class="border px-4 py-2  ">{{ $info->id}}</td>
                            <td class="border px-4 py-2  ">{{ $info->name }}</td>
                            <td class="border px-4 py-2  ">{{ $info->email }}</td>

                            <td class="border px-4 py-2  ">{{ $info->contact_num}}</td>
                            <td class="border px-4 py-2  ">{{ $info->department}}</td>
                            <td class="border px-4 py-2  ">{{ $info->subject}}</td>
                            <td class="border px-4 py-2  ">{{ $info->section}}</td>
                            <td class="border px-4 py-2  ">{{ $info->schedule}}</td>
                            <td class="border px-4 py-2  ">
                                
                                <button wire:click="edit({{ $info->id }})" class="bg-blue-500 hover:bg-blue-700 text-black py-2 px-4 rounded"> Edit</button>
                                <button wire:click="addSalary({{ $info->id }})" class="bg-gray-500 hover:bg-gray-700 text-pink-500 py-2 px-4 rounded">Add</button>
                                <x-jet-confirms-password wire:then="delete({{ $info->id }})">
                                    <x-jet-button type="button" wire:loading.attr="disabled">
                                        {{_('Delete')}}
                                    </x-jet-button>
                                </x-jet-confirms-password>
                                


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br>
            {{ $personal_infos->links()}}
        </div>
    </div>
</div>