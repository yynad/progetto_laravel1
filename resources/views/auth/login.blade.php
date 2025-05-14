<x-layout>
  <x-navbar></x-navbar>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-white">ACCEDI</h1>
            <form method="post" action="{{route('login')}}" class="p-4 border rounded shadow-sm bg-light">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
    <label class="form-check-label" for="exampleCheck1">RICORDATI</label>
  </div>
  <button type="submit" class="btn btn-custom">ACCEDI</button>
</form>
        </div>
    </div>
</div>

</x-layout>