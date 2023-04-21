<section class="mx-auto container">
  <div class="p-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-8 gap-5">
      <div class="lg:col-span-2">
        <div class="w-full shadow p-5 rounded-lg bg-white">
          <p>Cari Wisata</p>

          <div class="relative">
            <div class="absolute flex items-center ml-2 h-full">
              <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
              </svg>
            </div>
          
            <input type="text" wire:model="search" placeholder="Cari Wisata..." class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
          </div>
        
          <div class="flex items-center justify-between mt-4">
            <p class="font-medium">
            Filters
            </p>
        
            <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
            Reset Filter
            </button>
          </div>
        
          <div>
            <div class="grid grid-cols-1 mt-4">        
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Bathrooms</option>
                <option value="1">1 space</option>
                <option value="2">2 space</option>
                <option value="3">3 space</option>
              </select>
            </div>
          </div>
          </div>
      </div>

      <div class="md:col-span-6">
        <div class="mb-5 lg:mb-10">
          <h1 class="font-semibold text-lg">Showing Destinations in All Locations</h1>
          <p>Result {{ count($wisatas) }} Destination/s</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
          @if (count($wisatas) == 0)
            <div class="lg:col-span-4 text-center self-center justify-self-center">
              <p>No Data Record</p>
            </div>
          @else
            @foreach ($wisatas as $wisata)
            <a href="/wisata/{{ $wisata->id }}/detail">
              <div class="cursor-pointer rounded-xl bg-white p-3 shadow-lg hover:shadow-xl">
                <div class="relative flex items-end overflow-hidden rounded-xl">
                  <img src="https://thumbnails.production.thenounproject.com/gA9eZOvsBYSHrMumgrslmRGoBto=/fit-in/1000x1000/photos.production.thenounproject.com/photos/BCBA88B6-5B41-4B50-A786-E60CAA0ECDA3.jpg" alt="wallpaper" />
              
                  <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
              
                  <span class="ml-1 text-sm text-slate-400">4.9</span>
                  </div>
                </div>
              
                <div class="mt-1 p-2">
                  <h2 class="text-slate-700 font-normal">{{ $wisata->name_wisatas }}</h2>
              
                  <div class="mt-3 flex items-end justify-between">
                    <p>
                      <span class="text-lg font-bold text-orange-500">IDR {{ $wisata->harga }}</span>
                      <span class="text-sm text-slate-400">/ticket</span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            @endforeach
          @endif
        </div>

        <div class="mt-8 text-center">
          @if ($count < $total_wisatas)
          <button type="button" wire:click="loadmore" wire:loading.remove class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Load More</button>
          <button type="button" wire:click="loadmore" wire:loading class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Loading...</button>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>