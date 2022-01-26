<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-blue-100 rounded-lg text-left overflow-hidden -xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-blue-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2" >Name</label>
                            <input type="text"  class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input name" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Email</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input email" wire:model="email">
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Contact Number</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input contact number" wire:model="contact_num">
                            @error('contact_num') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Department</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input department" wire:model="department">
                            @error('department') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Subject</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input subject" wire:model="subject">
                            @error('subject') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Section</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input section" wire:model="section">
                            @error('section') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Schedule</label>
                            <input type="text" class="appearance-none border-blue-500 rounded w-full py-2 px-3 text-black-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input schedule" wire:model="schedule">
                            @error('schedule') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>


                    </div>
                </div>
                <div class="bg-blue-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md -sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border-green-200 border-transparent px-4 py-2 bg-green-200 text-base leading-6 font-medium text-black -sm hover:bg-green-700 focus:outline-none focus:border-green-200-green-700 focus:-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md -sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border-red-200  px-4 py-2 bg-red-200 text-base leading-6 font-medium text-black -sm hover:text-red-400 focus:outline-none focus:border-green-200 focus:-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5 hover:bg-red-700">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>