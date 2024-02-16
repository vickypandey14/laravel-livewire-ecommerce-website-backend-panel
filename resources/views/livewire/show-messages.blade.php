<div>
    <div class="col-sm-12 mt-5 mx-auto">
        <div class="container">
            <div class="row">
                @if(! is_null($messagepage))
                    <div class="alert alert-warning">
                        {{ $messagepage }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header d-flex justify-content-between align-items-center">
                            <div>
                            All Messages
                            </div>
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-dark table-striped" wire:poll.keep-alive>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact['id']}}</td>
                                        <td>{{ $contact['name']}}</td>
                                        <td>{{ $contact['email']}}</td>
                                        <td>{{ $contact['subject']}}</td>
                                        <td>{{ $contact['textmessage']}}</td>
                                        <td><button type="button"
                                        class="btn btn-danger"
                                        wire:click="delete_message( '{{$contact['id']}}' )"
                                        >Delete</button>
                                        </td>
                                    </tr>
                                @endforeach

                                {{ $contacts->links() }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
