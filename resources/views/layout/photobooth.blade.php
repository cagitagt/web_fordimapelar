<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordi Mapelar | UB</title>
    @vite(['resources/css/app.css', 'resources/js/photobooth.js'])
    <style>
        html, body {
            min-height: 100%;
        }

        body {
            background-color: #FAFAF9 !important;
            background-image:
                linear-gradient(to right, rgba(16, 12, 81, 0.15) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(16, 12, 81, 0.15) 1px, transparent 1px) !important;
            background-size: 44px 44px !important;
            background-position: 0 0 !important;
            background-repeat: repeat !important;
        }

        /* ===== Frame Selector (minimal) ===== */
        .frame-panel {
            background: #FFFFFF;
            border: 1px solid rgba(16, 12, 81, 0.08);
            border-radius: 1rem;
        }

        .frame-card {
            position: relative;
            border-radius: 0.75rem;
            padding: 0;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .frame-card img {
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 0.6rem;
            object-fit: cover;
            display: block;
            box-shadow: 0 0 0 1.5px rgba(16, 12, 81, 0.08);
            transition: box-shadow 0.2s ease, transform 0.2s ease;
        }
        .frame-card:hover img {
            box-shadow: 0 0 0 1.5px rgba(16, 12, 81, 0.2);
            transform: translateY(-2px);
        }
        .frame-card:has(.frame-option.active) img {
            box-shadow: 0 0 0 2.5px #100C51;
        }

        /* Custom thin scrollbar for the frame list */
        .frame-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .frame-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .frame-scroll::-webkit-scrollbar-thumb {
            background: rgba(16, 12, 81, 0.15);
            border-radius: 9999px;
        }

        /* ===== Gallery result cards (dibuat oleh JS, class "photo") ===== */
        #photos .photo {
            background: white;
            border-radius: 1.5rem;
            padding: 0.75rem;
            box-shadow: 0 10px 40px rgba(16, 12, 81, 0.10);
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #photos .photo:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 50px rgba(16, 12, 81, 0.16);
        }
        #photos .photo img {
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
        }
        #photos .photo button {
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            background: #100C51;
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        #photos .photo button:hover {
            opacity: 0.85;
        }
    </style>
</head>


<body class="w-full min-h-screen font-sans text-stone-700 relative overflow-x-hidden">

    <!-- Ambient accent blobs -->
    <div class="pointer-events-none fixed -top-32 -left-32 w-96 h-96 rounded-full bg-[#ECE80B]/20 blur-3xl"></div>
    <div class="pointer-events-none fixed top-40 -right-32 w-96 h-96 rounded-full bg-[#106AD2]/10 blur-3xl"></div>

    <div class="relative flex flex-col items-center justify-center py-14 px-6">

        <!-- Title -->
        <span class="uppercase tracking-[0.3em] text-xs font-semibold text-[#100C51]/50 mb-3">Studio</span>
        <h1 class="text-4xl md:text-5xl font-decorative mb-10 tracking-wide text-[#100C51] text-center">
            Photo Booth
        </h1>

        <!-- Main Section -->
        <div class="flex gap-8 items-center max-lg:flex-col">

            <!-- Camera Preview -->
            <div class="relative max-md:w-full max-md:h-64 w-160 h-120 rounded-3xl overflow-hidden bg-black shadow-2xl ring-1 ring-[#100C51]/10">
                <video
                    autoplay
                    id="video"
                    class="absolute inset-0 w-full h-full scale-x-[-1] object-cover"
                ></video>

                <img
                    id="frame-preview"
                    src="{{ asset('/images/framephoto/frame1.png') }}"
                    class="absolute inset-0 w-full h-full pointer-events-none"
                >
            </div>

            <!-- Control Panel -->
            <div class="flex flex-col gap-6 justify-center items-center p-5 w-full max-w-xs max-md:max-w-full max-md:px-0">

                <!-- Frame Selector -->
                <div class="frame-panel w-full p-5 ">
                    <p class="text-xs font-medium text-center uppercase tracking-widest  text-[#100C51] mb-3">
                        - Frame -
                    </p>
                    <div class="frame-scroll grid grid-cols-3 gap-3 max-h-52 overflow-y-auto p-2 rounded-2xl ">
                        <div class="frame-card">
                            <img
                                src="{{ asset('/images/framephoto/frame1.png') }}"
                                class="frame-option active"
                            >
                        </div>
                        <div class="frame-card">
                            <img
                                src="{{ asset('/images/framephoto/frame2.png') }}"
                                class="frame-option"
                            >
                        </div>
                        @foreach ($frames as $frame)
                        <div class="frame-card">
                            <img
                                src="{{ asset('storage/' . $frame->frame) }}"
                                class="frame-option"
                            >
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex items-center justify-center gap-3 w-full">
                    <input
                        type="number"
                        min="0"
                        placeholder="Timer"
                        id="timer"
                        class="px-4 py-2.5 w-24 rounded-full border border-stone-200 bg-white/80  text-sm
                               focus:outline-none focus:ring-2 focus:ring-[#100C51]/30 focus:border-[#100C51]"
                    >

                    <button
                        id="capture-btn"
                        class="px-8 py-2.5 rounded-full bg-[#100C51] text-white font-semibold text-sm shadow-lg shadow-[#100C51]/20
                               hover:bg-[#100C51]/90 active:scale-95 transition disabled:cursor-not-allowed disabled:hover:bg-[#100C51]"
                    >
                        Capture
                    </button>
                </div>

            </div>
        </div>

        <!-- Gallery -->
        <div
            id="photos"
            class="relative grid grid-cols-3 gap-6 mt-16 max-md:grid-cols-1 w-full max-w-4xl"
        ></div>

    </div>
</body>
</html>