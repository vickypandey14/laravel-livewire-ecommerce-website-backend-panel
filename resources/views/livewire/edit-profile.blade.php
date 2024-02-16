<div>
    <div class="col-sm-4 mx-auto">
        <div class="container">
            <div class="row">
                <form wire:submit.prevent="update_profile" class="border m-5 p-5 rounded-2">
                    <h2 class="text-center">Edit Profile</h2>
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input 
                        class="form-control" 
                        wire:model="name" 
                        type="text" 
                        name="name" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <label for="age" class="form-label">Age</label>
                        <input class="form-control" wire:model="age"  type="age" name="age" placeholder="Enter Your Age">
                        @error('age')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="phone" class="form-label">Contact No</label>
                        <input class="form-control" wire:model="phone" type="phone" name="phone" placeholder="Contact No.">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>               
                    <div class="mb-2 text-center">
                        <input type="submit" class="btn btn-primary btn-block" value="Save changes">&nbsp
                        <a href="{{ route('dashboard')}}" class="btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
