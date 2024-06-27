<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p class="text-gray-700">Pays {{$job['salary']}} per year</p>
    <p class="mt-6 gap-2">
        <x-button href="/jobs">Back to all jobs</x-button>
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
</x-layout>
