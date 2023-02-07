@extends('Layout.main')

@section('container')

<h1 class="text-center mb-3 mt-3">Order Example</h1>

<form class="d-flex flex-column" action="/order" method="post">
    @csrf

    {{-- Text Input --}}
    <div class="mb-5">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
    </div>

    <div class="mb-5">
        <label for="food" class="form-label">Food</label>
        <input type="text" name="food" class="form-control" id="food" placeholder="Your Ordered Food">
    </div>
    
    {{-- Radio Button --}}
    <div class="mb-5">
        <label for="extra" class="form-label">Extra</label>
        {{-- <div class="form-check">
            <input class="form-check-input" type="radio" name="extra" id="extra_1" value="50000">
            <label class="form-check-label" for="extra_1">
              Extra Sayur
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="extra" id="extra_2" value="20000">
            <label class="form-check-label" for="extra_2">
              Extra Daging
            </label>
        </div> --}}
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="extra[]" id="extra_1" value="50000">
            <label class="form-check-label" for="extra_1">
              Extra Sayur
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="extra[]" id="extra_2" value="20000">
            <label class="form-check-label" for="extra_2">
              Extra Daging
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Add Order</button>
</form>

@endsection
