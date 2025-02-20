{{-- <div style="border: 1px solid black; border-radius: 5px; padding:10px;">
    <h3>{{ $title }}</h3>
    <img src="{{ asset('img/laravel-icon.png') }}" alt="imagen" width="100">
    <p>{{ $content }}</p>
</div> --}}

<div class="card col-3 mx-auto" style="width: 18rem;">
    <img src="{{ asset('img/laravel-icon.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text">{{ $content }}</p>
    </div>
  </div>