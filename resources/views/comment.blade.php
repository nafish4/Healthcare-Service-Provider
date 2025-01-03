<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-4">Welcome to the Comment Section</h1>
        <!-- <p class="text-lg mb-4">This is the general comment section where you can question to the doctors.</p> -->
        <a href="{{ url('home') }}" class="text-blue-600 hover:underline font-semibold">Click here to go to your dashboard</a>
    </div>

    @foreach($post as $posts)

        <h1>{{$posts->title}}</h1>
        <h3>{{$posts->description}}</h3>
    @endforeach

    <livewire:comments :model="$posts"/>

</x-app-layout>