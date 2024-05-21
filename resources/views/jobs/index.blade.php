<x-layouts>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per Year.
                </div>
            </a>
        @endforeach
        <div class="">
            {{  $jobs->links() }}
        </div>
    </div>
</x-layouts>
