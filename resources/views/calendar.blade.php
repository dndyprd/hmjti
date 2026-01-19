@extends('layout') 

@section('content')
{{-- HERO SECTION --}}
<section class="relative h-[55vh] flex items-center justify-center overflow-hidden">
    {{-- Background Image dengan Overlay --}}
    <div class="absolute inset-0 z-0">
        @if(isset($blogs[0]))
            <img src="{{ $blogs[2]->thumbnail }}" class="grayscale w-full h-full object-cover" alt="Blogs HMJ Teknologi Informasi PNB">
        @endif
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative text-center px-6 lg:px-28 z-20 mt-12">
        <span class="px-4 py-1 bg-blue-600 text-white text-xs md:text-md font-semibold rounded-xl uppercase tracking-wider">
            Kalender Kegiatan
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-white my-2 leading-tight max-w-4xl">
            HMJ Teknologi Informasi
        </h1> 
        <p class="text-white text-sm md:text-base lg:text-lg">Kalender kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.</p>
    </div>
</section>
 
<section id="calendar" class="relative pt-12 pb-6 lg:pt-16 lg:pb-10 px-4 md:px-8 lg:px-20 overflow-x-hidden"> 
    {{-- BACKGROUND VARIATION --}} 
    <div class="absolute top-0 -left-32 w-[520px] h-[520px] bg-blue-300/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -right-32 w-[420px] h-[420px] bg-sky-300/30 rounded-full blur-3xl"></div>

    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(59,130,246,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(59,130,246,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
 
    <div class="relative z-10 max-w-7xl mx-auto"> 
        <div class="bg-white rounded-3xl shadow-xl p-4 md:p-6 border border-gray-100">
            <div id="calendar"></div>
        </div>
    </div>
</section> 


@endsection 

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var events = @json($events);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek'
                },
                buttonText: {
                    today: 'Hari Ini',
                    month: 'Bulan',
                    week: 'Minggu', 
                },
                themeSystem: 'standard',
                events: events,
                height: 'auto',
                eventClick: function(info) { 
                },
                eventContent: function(arg) {
                    return {
                        html: `
                            <div class="fc-content overflow-hidden text-ellipsis whitespace-nowrap">
                                <span class="font-semibold">${arg.event.title}</span>
                            </div>
                        `
                    };
                }
            });

            calendar.render();
        });
    </script> 
@endpush