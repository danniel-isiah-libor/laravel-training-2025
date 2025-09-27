<div class="border rounded-sm p-5">
    <h3>User Data {{ $id ?? 'No ID' }}</h3>
    <p>Name: {{ $user['name'] ?? 'No Name' }}</p>
    <p>Email: {{ $user['email'] ?? 'No Email' }}</p>
</div>
