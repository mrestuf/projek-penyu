@extends('dashboard.user.base')

@section('content')
  <div class="w-full">
    <h1 class="mb-5 text-2xl font-semibold">Purchases List</h1>
    @if(count($transactions) > 0)
      @foreach ($transactions as $ts)
        <div class="border border-grey-light lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal overflow-x-auto w-full">
          <div class="mb-8">
            <div class="flex justify-between mb-3 pb-1 border-b">
              <p class="text-sm text-grey-dark">
                Booking Number&nbsp;<span class="font-semibold">{{ $ts->transaction_id }}</span>
              </p>

              <p class="font-semibold">{{ App\Helpers\PriceFormat::price($ts->amount) }}</p>
            </div>

            <div>
              <p class="font-semibold lg:text-lg mb-2">{{ $ts->wisata->name_wisata }}</p>
              <p class="text-grey-darker text-base">{!! Str::limit($ts->wisata->description, 200)  !!}</p>
            </div>
          </div>
          <div class="flex justify-between mt-3 pt-3 border-t">
            <span class="{{ $ts->status == 'PENDING' ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' : 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' }} text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full flex items-center">{{ $ts->status }}</span>

            @if ($ts->status == 'PENDING')
            <a href="{{ $ts->link_payment }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Bayar</a>
            @else
            <button type="button" class="text-blue-500 underline">Review</button>
            @endif
          </div>
        </div>
      @endforeach
    @else
      Tidak ada transaksi
    @endif
  </div>
@endsection
