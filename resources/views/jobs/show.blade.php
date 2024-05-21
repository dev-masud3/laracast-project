<x-layouts>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>{{ $job['title'] }}</h1>
    <p>{{ $job['salary'] }}</p>

    <div class="mt-6">
        <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Jobs</x-button>
    </div>
</x-layouts>