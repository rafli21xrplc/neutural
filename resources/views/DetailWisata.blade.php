@extends('TemplateNavbar')

@section('content')
    <main class="mt-10">

        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="{{ asset('storage/' . $datas->image) }}"
                class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                    class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $datas->category }}</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{ $datas->name }}
                </h2>
                <div class="flex mt-3">
                    <img src="https://randomuser.me/api/portraits/men/97.jpg"
                        class="h-10 w-10 rounded-full mr-2 object-cover" />
                    <div>
                        <p class="font-semibold text-gray-200 text-sm"> {{ $datas->writer }} </p>
                        <p class="font-semibold text-gray-400 text-xs"> {{ $datas->created_at }} </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <p class="pb-6">{{ $datas->body}}</p>

            <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
                expression
                unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should
                thirty whence.
                Steepest speaking up attended it as. Made neat an on be gave show snug tore.
            </div>

            <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Uneasy barton seeing remark happen his has
            </h2>

        </div>
    </main>
@endsection
