<div class="card">
    <h5 class="card-header">Seller List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>No</th>
                    <th>Seller ID</th>
                    <th>Fullname</th>
                    <th>NPM</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($sellers as $seller)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $seller->user_id }}</td>
                        <td>{{ $seller->fullname }}</td>
                        <td>{{ $seller->npm }}</td>
                        <td>{{ $seller->phone_number }}</td>
                        <td>{{ $seller->email }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
