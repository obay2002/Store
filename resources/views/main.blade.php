  
<div class="row">
        
    @foreach ($category as $item)
    
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="product/{{$item->id}}">

                        <img style="max-height: 250px !important;min-height:250px !important" src="{{asset('storage/'.$item->ImagePath)}}" alt=""></a>

                </div>
                <h3>{{$item->name}}</h3>
                <h6>{{$item->description}}</h6>
            </div>
        </div>
    @endforeach

</div>