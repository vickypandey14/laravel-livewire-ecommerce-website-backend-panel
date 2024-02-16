<div>
<div class="col-sm-4 mx-auto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="mx-auto">
            <form wire:submit.prevent="save" class="border m-5 p-5 rounded-2">
                <h2 class="text-center">Create an account.</h2>

                @if(! is_null($message))
                    <div class="alert alert-success">
                    {{ $message }}
                    </div>
                @endif

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
                <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" wire:model="email"  type="email" name="email" placeholder="Email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                    <input class="form-control" wire:model="password"  type="password" name="password" placeholder="Password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                <label for="cpassword" class="form-label">Confirm Password</label>
                    <input class="form-control" wire:model="cpassword"  type="password" name="cpassword" placeholder="Confirm Password">
                    @error('cpassword')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="Register" name="register">
                    
                </div>
                <a href="{{ route('login')}}" class="text-decoration-none">Already have an account? Login here.</a>
                
            </form>
            </div>
        </div>
    </div>
</div>
</div>
