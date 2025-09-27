@props(['user' => null])

<div>
    <ul>
        <li>Name: {{ $user?->name }}</li>
        <li>Email: {{ $user?->email }}</li>
    </ul>
</div>