@extends('layouts.base')

@section('content')
<section class="mx-auto container">
    <div class="p-4">
        <ol
            class="my-5 flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 dark:border-gray-400 rounded-full shrink-0">
                    1
                </span>
                <a href="/">Home</a>
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>
                <a href="/wisata">Wisata</a>
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    3
                </span>
                {{ $wisata->name_wisata }}
            </li>
        </ol>

        <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="grid grid-cols-2 w-full">
                @for ($i = 0; $i < count($wisata->images); $i++)
                    @if ($i == 0)
                    <div class="md:p-2 p-1">
                        <img alt="gallery" class="object-cover w-full h-full object-center block"
                            src="{{ asset('storage/' . $wisata->images[$i]) }}">
                    </div>
                    @endif
                    @if($i == 1)
                    <div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block"
                                src="{{ asset('storage/' . $wisata->images[$i]) }}">
                        </div>
                        <div class="flex">
                            @endif
                            @if($i > 1)
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block"
                                    src="{{ asset('storage/' . $wisata->images[$i]) }}">
                            </div>
                            @endif
                            @endfor
                        </div>
                    </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-6 gap-5">
            <div class="py-3 lg:py-10 lg:col-span-4">
                <div class="flex justify-between">
                    <h1 class="text-1xl md:text-4xl font-semibold">{{ $wisata->name_wisata }}</h1>
                    <h1 class="text-1xl md:text-3xl font-semibold">
                        {{ \App\Helpers\PriceFormat::price($wisata->price) }}/Tiket</h1>
                </div>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Rating star</title>
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                    <a href="#"
                        class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73
                        reviews</a>
                </div>
                <p class="mt-10 text-sm">{!! $wisata->description !!}</p>
            </div>

            <div class="lg:col-span-2">
                <div class="h-full">
                    <!-- Card -->
                    <div class="mx-auto">
                        <div class="bg-white shadow-lg rounded-lg mt-9">
                            <!-- Card header -->
                            <header class="text-center px-5 pb-5">
                                <!-- Card name -->
                                <h3 class="text-xl font-bold text-gray-900 mb-1">Booking Card</h3>
                                <p class="text-sm text-gray-500">Fill in your details and review your booking.</p>
                            </header>
                            <!-- Card body -->
                            <div class="bg-gray-100 px-5 py-6">
                                <h1 class="my-3 text-left text-lg font-semibold">Detail Transaction</h1>
                                @if (Auth::check())
                                <form action="/wisata/{{ $wisata->id }}/invoice" method="POST" class="space-y-3">
                                    @csrf

                                    <div class="mb-6">
                                        <label for="phone"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                            Ticket</label>
                                        <input type="number" id="phone" name="price"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="3" required>
                                    </div>

                                    <button type="submit"
                                        class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay
                                        Now</button>
                                </form>
                                @else
                                <form action="#" method="POST" class="space-y-3">
                                    @csrf

                                    <div class="mb-6">
                                        <label for="phone"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                            Ticket</label>
                                        <input type="number" id="phone" name="price"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="3" required>
                                    </div>

                                    <a href="/auth/login"
                                        class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay
                                        Now</a>
                                </form>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 my-10">
    <div class="px-4 py-16 sm:px-6 sm:py-24">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
            <div class="max-w-xl text-center sm:text-left">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                    Don't just take our word for it...
                    <br class="hidden sm:block lg:hidden" />
                    Read reviews from our customers
                </h2>

                <p class="mt-4 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                    veritatis illo placeat harum porro optio fugit a culpa sunt id!
                </p>

                <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                    <button
                        class="prev-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
                        <span class="sr-only">Previous Slide</span>
                        <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>

                    <button
                        class="next-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
                        <span class="sr-only">Next Slide</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="-mx-6 lg:col-span-2 lg:mx-0">
                <div class="swiper-container !overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5 text-green-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Stayin' Alive
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            No, Rose, they are not breathing. And they have no arms or
                                            legs … Where are they? You know what? If we come across
                                            somebody with no arms or legs, do we bother resuscitating
                                            them? I mean, what quality of life do we have there?
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    &mdash; Michael Scott
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5 text-green-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Stayin' Alive
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            No, Rose, they are not breathing. And they have no arms or
                                            legs … Where are they? You know what? If we come across
                                            somebody with no arms or legs, do we bother resuscitating
                                            them? I mean, what quality of life do we have there?
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    &mdash; Michael Scott
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5 text-green-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Stayin' Alive
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            No, Rose, they are not breathing. And they have no arms or
                                            legs … Where are they? You know what? If we come across
                                            somebody with no arms or legs, do we bother resuscitating
                                            them? I mean, what quality of life do we have there?
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    &mdash; Michael Scott
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center gap-4 lg:hidden">
            <button aria-label="Previous slide"
                class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>

            <button aria-label="Next slide"
                class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
            </button>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 32,
            autoplay: {
                delay: 8000,
            },
            breakpoints: {
                640: {
                    centeredSlides: true,
                    slidesPerView: 1.25,
                },
                1024: {
                    centeredSlides: false,
                    slidesPerView: 1.5,
                },
            },
            navigation: {
                nextEl: '.next-button',
                prevEl: '.prev-button',
            },
        })
    })

</script>
@endpush

@push('styles')
<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
@endpush
