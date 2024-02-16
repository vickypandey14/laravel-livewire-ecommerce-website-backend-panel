<div>

    <div wire:offline>
    <h1 class="text-danger">You are now offline.</h1>
</div>

    <!-- <button type="button" wire:offline.attr="disabled">Submit</button> -->

@if($editForm)
  
<div class="row">
            <div class="col-sm-4 mx-auto">
             <form wire:submit.prevent="update" class="border m-5 p-5 rounded-2">
                <h2 class="text-center">Edit account.</h2>
                 
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
                <br>               
                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="Save changes">&nbsp
                    <a href="{{ route('users')}}" class="btn btn-warning">Cancel</a>
                </div>
             </form>
            </div>
        </div>


@endif
    <div class="col-sm-12 mt-5 mx-auto">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                @if(! is_null($deletedmessage))
                    <div class="alert alert-danger">
                    {{ $deletedmessage }}
                    </div>
                @endif
                @if(! is_null($updatedmessage))
                    <div class="alert alert-success">
                    {{ $updatedmessage }}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                All Users
                                </div>
                            </h4>
                        </div>
                        <table class="table table-bordered table-dark table-striped" wire:poll.keep-alive>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Passwords</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>            
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user['id']}}</td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['password']}}</td>
                                <td>{{$user['user_type']}}</td>
                                <td>
                                    <button 
                                    type="button" 
                                    class="btn btn-danger"
                                    wire:click="delete_user( '{{$user['id']}}' )"
                                    >Delete</button>
                                    <button 
                                    wire:click="edit_user( '{{  $user['id'] }}' )"
                                    type="button" class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                        @endforeach

                        {{ $users->links() }}
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
