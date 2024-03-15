<div class="product-grid">
    <div class="product-image">
        <a href="{{route('detail',$allproduct->libelle_prdt)}}" class="image">
            <img class="img-fluid w-100" src="{{asset('front/img/produits/'.$allproduct->url_file)}}">
        </a>
        @if ($allproduct->qte_prdt > 0)
        <span class="product-discount-label">{{$allproduct->libelle_cat}}</span>
        @else
        <span class="product-discount-label-empty">En rupture de stock</span>
        @endif
        
        @if (isset($allproduct->id) && !empty($allproduct->id))  
        <ul class="product-links">
            <li>
                <a class="add-to-wishlist" href="javascript:void(0)" data-tip="Ajouter à la liste de souhaits" data-idproduct="{{$allproduct->id}}"><i class="fas fa-heart"></i></a>
            </li>
            <li><a href="{{url('/comparator', $allproduct->libelle_prdt)}}" data-tip="Comparer"><i class="fa fa-random"></i></a></li>
            <li><a href="{{route('detail',$allproduct->libelle_prdt)}}" data-tip="Aperçu rapide"><i class="fa fa-search"></i></a></li>
        </ul>
        @endif
    </div>
    <div class="product-content">
        <ul class="rating">
            <li class="fas fa-star"></li>
            <li class="fas fa-star"></li>
            <li class="fas fa-star"></li>
            <li class="far fa-star"></li>
            <li class="far fa-star"></li>
        </ul>
        <h3 class="title"><a href="{{route('detail',$allproduct->libelle_prdt)}}">{{$allproduct->libelle_prdt}}</a></h3>
        <div class="price"><i class="fa-solid fa-barcode"></i> {{$allproduct->prix_prdt}} XOF</div>
        {{-- @if (isset($allproduct->id_prdt) && !empty($allproduct->id_prdt))  
        <a class="add-to-cart" href="javascript:void(0)" data-product="{{$allproduct->id_prdt}}">
            Panier
        </a>
        @else --}}
        <a class="add-to-cart" href="{{route('detail',$allproduct->libelle_prdt)}}">
            Panier
        </a>
        {{-- @endif --}}
    </div>
</div>