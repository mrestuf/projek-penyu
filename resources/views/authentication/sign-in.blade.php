@extends('authentication.template')
@section('content')
<section class="h-screen" x-data="{open=false}">
  <div class="container mx-auto h-full px-6 py-24">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
      <!-- Left column container with background-->
      <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
        <img
          src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="w-full"
          alt="Phone image" />
      </div>

      <!-- Right column container with form -->
      <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
        @livewire('authentication.login')
        <p>
          Don't have an account?
          <a class="text-blue-500" href="register">Register</a>
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
