<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
{{-- <div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div> --}}
@extends('parent')

@section('title', 'browse')



@section('content')

<div class="browse-content">
   {{-- <h3> </h3> --}}
    <div class="container-categorie">
        
            <ul>
                
                <div class="cate-name">
                    <h2>Categories</h2>
                        <li><a href="/cat1">Children</a></li>
                        <li><a href="/cat2">History</a></li>
                        <li><a href="/cat3">Fiction</a></li>
                        <li><a href="/cat4">Novels</a></li>
                        <li><a href="/cat5">Self development</a></li>
                        <li><a href="/cat6">Manga</a></li>
                
                </div>
            </ul>
       <div >
       <h3> @yield('categorie-name')</h3>
        @yield('contentB')
       </div>
    </div>

</div>

@endsection

