<div class="container mx-auto my-5 text-tri pt-3" style="font-family: Montserrat;">
    <div class="text-center my-5">
        <h2 class="feature-text">Paket Hosting Singapura yang Tepat</h2>
        <h3 style="font-weight: 300">Diskon 40% + Domain dan SSL Gratis untuk Anda</h2>
    </div>
    <div class="d-flex justify-content-center text-center text-middle mb-5">
        @for ($i = 0; $i < count($services); $i++)
            @if ($i == 2)
                <div class="border border-primary rounded" style="width: 17rem;">
                    <div class="border-bottom border-primary bg-primary">
                        <h3 class="feature-text text-light">{{$services[$i]->name}}</h3>
                    </div>
                    <div class="p-2 bg-primary text-light">
                        <h5 style="text-decoration: line-through;">Rp {{$services[$i]->before_price}}</h5>
                        <h2>Rp <strong>{{$services[$i]->after_price}}</strong> / bln</h2>
                    </div>
                    <div class="p-2 bg-primary text-light">
                        <h6 class="mb-0"><strong>{{$services[$i]->user_register}}</strong> pengguna terdaftar</h6>
                    </div>
                    <div class="pt-4">
                        <div>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                        </div>
                        <div class="mt-5 mb-4">
                            <button type="button" class="btn btn-primary feature-text px-3 rounded-pill offer-btn">Pilih Sekarang</button>
                        </div>
                    </div>
                </div>
            @else
                <div class="border rounded" style="width: 17rem;">
                    <div class="border-bottom">
                        <h3 class="feature-text">{{$services[$i]->name}}</h3>
                    </div>
                    <div class="border-bottom p-2">
                        <h5 style="text-decoration: line-through;">Rp {{$services[$i]->before_price}}</h5>
                        <h2>Rp <strong>{{$services[$i]->after_price}}</strong> / bln</h2>
                    </div>
                    <div class="border-bottom p-2">
                        <h6 class="mb-0"><strong>{{$services[$i]->user_register}}</strong> pengguna terdaftar</h6>
                    </div>
                    <div class="pt-4">
                        <div>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                            <h6>Lorem ipsum</h6>
                        </div>
                        <div class="mt-5 mb-4">
                            <button type="button" class="btn btn-outline-secondary feature-text px-3 rounded-pill offer-btn">Pilih Sekarang</button>
                        </div>
                    </div>
                </div>
            @endif          
        @endfor
        
    </div>
</div>