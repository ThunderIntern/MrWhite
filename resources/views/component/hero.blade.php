<section class="hero">
  <div class="hero-inner">
	@include('component.alert')
    <h1>Mr.White</h1>
    <img src="/image/logo1.png" class="image" style="margin-bottom: -3rem; ">
    <form action="{{ route('search') }}">
       <input class="input-inner" type="search" placeholder="Find Our Product Now..." name="search" id="search" value="{{ request()->input('search') }}" >
        <button class="btn btn-awsm" type="submit">Search</button>
    </form>
  </div>
</section>
