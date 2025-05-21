@extends('Dashboard.Dashboard')

@section('main')
    <main>
        <div class="row">
            @forelse ($articles as $d)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; box-shadow: 2px 2px #242427;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $d->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Article</h6>
                            <p class="card-text">{{ $d->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No articles found.</p>
                </div>
            @endforelse
        </div>
    </main>
@endsection
