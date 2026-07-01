            
            
            {{-- resources/views/pages/product.blade.php --}}
            @extends('layouts.MainLayout')

            @section('title', 'ផលិតផល')

            @section('content')
                <h1>ផលិតផលរបស់យើង</h1>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ផលិតផល A</h5>
                                <p class="card-text">តម្លៃ 20$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ផលិតផល B</h5>
                                <p class="card-text">តម្លៃ 35$</p>
                            </div>
                        </div>
                    </div>
                    <!-- បន្ថែមផលិតផលផ្សេងទៀតតាមចិត្ត -->
                </div>
            @endsection