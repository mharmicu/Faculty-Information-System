<?php

use Illuminate\Support\Facades\Auth;

//$User = Auth::user();
//$usertype = $User->usertype;
?>

<x-slot name="header">
    <h2> Faculty Information </h2>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        h2 {
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 23px;
        }



        header {
            background-color: #8ED6EA;
        }

        input[type=search] {
            background-color: #8CD1E6;
            border-color: #C9EAF3;
            font-family: Serief;
        }

        td {
            color: #FFF2F2;
            
            font-size: 14px;
            color: #000000;
            text-align: Center;
            background-color: #DBEBFF;
            border-color: #BAD0EF;
        }
    
    </style>


</x-slot>

<div class=" py-12">
    <div class=" max-w-9xl mx-auto sm:px-6 lg:px-10">
        <div class="bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <input type="text" class="bg-white hover:bg-white text-blue-900 float-right py-2 rounded my-3" placeholder=" Search... " wire:model="searchTerm" />
            

            <div class="table-responsive py-4">
                <table class="w-full border table-fixed">
                    <thead>
                        <tr class="bg-blue-900 text-white">
                            <th class="px-4 py-2 w-14 border ">ID</th>
                            <th class="px-4 py-2 w-14 border ">NAME</th>
                            <th class="px-4 py-2 w-14 border ">EMAIL</th>                            
                            <th class="px-4 py-2 w-14 border " >CONTACT NUMBER</th>
                            <th class="px-4 py-2 w-14 border ">DEPARTMENT</th>
                            <th class="px-4 py-2 w-14 border ">SUBJECT</th>
                            <th class="px-4 py-2 w-14 border ">SECTION</th>
                            <th class="px-4 py-2 w-14 border ">SCHEDULE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($personal_infos as $info)
                        <tr class="">
                            <td class="border px-4 py-2  ">{{ $info->id}}</td>
                            <td class="border px-4 py-2  ">{{ $info->name }}</td>
                            <td class="border px-4 py-2  ">{{ $info->email }}</td>
                            
                            <td class="border px-4 py-2  " >{{ $info->contact_num}}</td>
                            <td class="border px-4 py-2  ">{{ $info->department}}</td>
                            <td class="border px-4 py-2  ">{{ $info->subject}}</td>
                            <td class="border px-4 py-2  ">{{ $info->section}}</td>
                            <td class="border px-4 py-2  ">{{ $info->schedule}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br>
            {{ $personal_infos->links()}}
        </div>
    </div>
</div>