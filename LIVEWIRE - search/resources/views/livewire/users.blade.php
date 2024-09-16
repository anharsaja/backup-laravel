<div class="container mt-4">

    <div class="input-group mb-3">
        <span class="input-group-text" id="search">search</span>
        <input wire:model="search" type="text" class="form-control" placeholder="search here ..." aria-label="search here ..." aria-describedby="basic-addon1">
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $loop -> iteration }}</th>
                <td>{{ $user -> name }}</td>
                <td>{{ $user -> email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>