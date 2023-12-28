{{-- <div>
    <!-- He who is contented is rich. - Laozi -->
</div> --}}

{{-- Here i show children books --}}


@extends('browse')

@section('categorie-name', 'Kids')
@section('contentB')

{{-- the container of all items --}}
    <div class="items-container">
        {{--  --}}
        
        @foreach ($tab as $book)
        {{-- item box --}}
            <div class="item">
            <img src="{{ asset('Imgs/'.$book['image']) }}" alt="image" >
            {{-- item info and price --}}
                <div class="item-info">

                    <div class="names">
                        <span class="book-name">
                            {{ $book['name'] }}
                        </span>
                        <span class="author-name">
                            {{ $book['author'] }}
                        </span>
                    </div>

                    <div class="item-price">
                        <span class="price">
                            {{ $book['price'] }} MAD
                        </span>
                       <button class="item-btn">
                        <a  href="">Add</a>
                        
                        </button> 
                    </div>

                </div>
            </div>
        @endforeach
        </div>
   

 @endsection


