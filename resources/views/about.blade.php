<x-app-layout meta-title="The CodeHolic Blog - Sobre" meta-description="Blog de informação sobre tecnologia">
    <section class="w-full flex flex-col items-center px-3">

    <div class="container mx-auto flex flex-wrap py-6">
                <article class="flex flex-col shadow px-3 my-4 w-full">
                    <a href="#" class="hover:opacity-75">
                        <img src="/storage/{{$widget->image}}" class="w-full" alt="">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <h1 class="text-3xl font-bold hove:text-gray-700 pb-4">
                            {{ $widget->title }}
                        </h1>
                        <div>
                            {!! $widget->content !!}
                        </div>
                    </div>
                </article>
    </div>
    </section>
</x-app-layout>