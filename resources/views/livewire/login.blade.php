<div>
<div class="col-sm-4 mx-auto">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
            <form wire:submit.prevent="do_login" class="border m-5 p-5 rounded-2">
                @csrf
                <h2 class="text-center"><strong>Log In</strong></h2>
                <div class="mb-2">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" wire:model="email" type="email" name="email" placeholder="Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" wire:model="password" type="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <span class="text-danger">{{ $error_message }}</span>
                <div class="mt-4 text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="Log In" name="login">
                </div>
                <div class="mt-2">
                <a href="{{ route('register')}}" class="text-decoration-none">Doesn't have an account? SignUp here.</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
