<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-blue-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-blue-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Name</label>
                            <input type="text" disabled class="appearance-none border-blue-200 rounded w-full py-2 px-3 text-blue-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input name" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Contact Number</label>
                            <input type="text" disabled class="appearance-none border-blue-200 rounded w-full py-2 px-3 text-blue-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input contact number" wire:model="contact_num">
                            @error('contact_num') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">SSS Number</label>
                            <input type="text" class="appearance-none border-blue-200 rounded w-full py-2 px-3 text-blue-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input SSS number" wire:model="sss">
                            @error('sss') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Deductions</label>
                            <input type="text" class="appearance-none border-blue-200 rounded w-full py-2 px-3 text-blue-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input deductions" wire:model="deductions">
                            @error('deductions') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-blue-500 text-sm font-bold mb-2">Salary</label>
                            <input type="text" class="appearance-none border-blue-200 rounded w-full py-2 px-3 text-blue-500 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Input salary" wire:model="salary">
                            @error('salary') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>


                    </div>
                </div>
                <div class="bg-blue-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border-green-200 border-transparent px-4 py-2 bg-green-200 text-base leading-6 font-medium text-green-500 shadow-sm hover:bg-green-300 focus:outline-none focus:border-green-200 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border-red-200 border-green-200 px-4 py-2 bg-red-200 text-base leading-6 font-medium text-red-400 shadow-sm hover:text-red-500 focus:outline-none focus:border-red-200 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5  hover:bg-red-300">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>