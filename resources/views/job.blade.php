<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p class="text-gray-700">Pays {{$job['salary']}} per year</p>    
    <a href="/jobs" class="text-blue-500">Back to all jobs</a>
</x-layout>
