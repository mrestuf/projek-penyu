@extends('layouts.base')

@section('content')

<section id="blog" class="text-gray-600 body-font overflow-hidden">
    <!-- Text Header -->
<header class="w-full container mx-auto">
<div class="flex flex-col items-center py-12 ">
    <a class="font-bold text-gray-800 uppercase text-5xl">
        Blog
    </a>
    <p class="text-lg text-gray-600">
      -
    </p>
</div>
</header>
<!-- main content !-->
@if (count($blogs) == 0)
<div class="lg:col-span-3 self-center">
<p class="text-center">No Data Record</p>
</div>
@else
@foreach ($blogs as $blog)
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Kategori</span>
          <span class="mt-1 text-gray-500 text-sm">DD MM YYYY</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Judul</h2>
          <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id mi hendrerit, lobortis nibh non, dictum quam. Nunc posuere urna.</p>
          <a href ="#" class="text-indigo-500 inline-flex items-center mt-4">Baca Artikel/Berita
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>



@endsection

@push('scripts')
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