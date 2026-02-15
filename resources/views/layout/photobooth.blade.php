<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordi Mapelar | UB</title>
    @vite(['resources/css/app.css', 'resources/js/photobooth.js'])
</head>


<body class="bg-neutral-50 w-full font-sans text-stone-700 ">

    <div class=" flex flex-col items-center justify-center py-14">

        <!-- Title -->
        <h1 class="text-5xl font-decorative mb-10 tracking-wide">
            Photo Booth
        </h1>

        <!-- Main Section -->
        <div class="flex gap-5 items-center max-lg:flex-col">

            <!-- Camera Preview -->
            <div class="relative max-md:w-full max-md:h-64   w-160 h-120 rounded-2xl overflow-hidden bg-black shadow-md">
                <video
                    autoplay
                    id="video"
                    class="absolute inset-0 w-full h-full scale-x-[-1]"
                ></video>

                <img
                    id="frame-preview"
                    src="{{ asset('/images/framephoto/frame1.png') }}"
                    class="absolute inset-0 w-full h-full pointer-events-none"
                >
            </div>

            <!-- Control Panel -->
            <div class="flex flex-col gap-10 justify-center items-center p-5 ">

                <!-- Frame Selector -->
                <div class="grid grid-cols-4 gap-3 justify-center py-5 px-5 rounded-2xl shadow-2xl max-h-39 overflow-y-auto ">
                    <img
                        src="{{ asset('/images/framephoto/frame1.png') }}"
                        class="frame-option active w-20 h-14 rounded-lg cursor-pointer border-2 border-transparent hover:border-stone-400 transition"
                    >
                    <img
                        src="{{ asset('/images/framephoto/frame2.png') }}"
                        class="frame-option w-20 h-14 rounded-lg cursor-pointer border-2 border-transparent hover:border-stone-400 transition"
                    >
                    <img
                        src="{{ asset('/images/framephoto/frame3.png') }}"
                        class="frame-option w-20 h-14 rounded-lg cursor-pointer border-2 border-transparent hover:border-stone-400 transition"
                    >
                    @foreach ($frames as $frame)
                    <img
                        src="{{ asset('storage/' . $frame->frame) }}"
                        class="frame-option w-20 h-14 rounded-lg cursor-pointer border-2 border-transparent hover:border-stone-400 transition"
                    >
                        
                    @endforeach

                
                </div>

                <!-- Controls -->
                <div class="flex items-center justify-center gap-3">
                    <input
                        type="number"
                        min="0"
                        placeholder="Timer"
                        id="timer"
                        class="px-3 py-2 w-24 rounded-lg border border-stone-300
                               focus:outline-none focus:ring-1 focus:ring-stone-400"
                    >

                    <button
                        id="capture-btn"
                        class="px-6 py-2 rounded-lg bg-stone-800 text-white
                               hover:bg-stone-700 active:scale-95 transition disabled:opacity-50"
                    >
                        Capture
                    </button>
                </div>

            </div>
        </div>

        

    </div>
<!-- Gallery -->
        <div
            id="photos"
            class="grid grid-cols-3 gap-6 px-10 my-16 max-md:grid-cols-1"
        ></div>
</body
</html>
