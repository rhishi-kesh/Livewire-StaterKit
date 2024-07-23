<div class="pt-5">
    <form wire:submit="insert" class="bg-white dark:bg-slate-900 shadow-md rounded px-4 md:px-8 pt-6 pb-8 mb-4">
        <h2 class="mb-2 font-bold text-3xl dark:text-white text-blue-500">Add User</h2>
        <hr>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-3">
            <div class="mb-1">
                <label for="Name" class="my-label">Name</label>
                <input type="text" wire:model="name" placeholder="Name" id="Name" class="my-input focus:outline-none focus:shadow-outline">
                @if ($errors->has('name'))
                    <div class="text-red-500">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-1">
                <label for="email" class="my-label">Email</label>
                <input type="email" wire:model="email" placeholder="Email" id="email" class="my-input focus:outline-none focus:shadow-outline appearance-none">
                @if ($errors->has('email'))
                    <div class="text-red-500">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-1">
                <label for="password" class="my-label">Password</label>
                <input type="password" wire:model="password" placeholder="Password" id="password" class="my-input focus:outline-none focus:shadow-outline appearance-none">
                @if ($errors->has('password'))
                    <div class="text-red-500">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="mb-1">
                <label for="Cpassword" class="my-label">Confirm Password</label>
                <input type="password" wire:model="Cpassword" placeholder="Confirm Password" id="Cpassword" class="my-input focus:outline-none focus:shadow-outline appearance-none">
                @if ($errors->has('Cpassword'))
                    <div class="text-red-500">{{ $errors->first('Cpassword') }}</div>
                @endif
            </div>
        </div>
        <div class="flex justify-start items-center mt-4">
            <button type="submit" class="btn-submit btn mr-4" wire:loading.remove>Add</button>
            <button type="button" disabled class="btn-submit btn mr-4" wire:loading>Loading</button>
        </div>
    </form>
</div>
