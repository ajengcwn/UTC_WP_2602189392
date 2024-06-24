<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="{{asset('images/1.jpeg')}}" style="height: 3rem;" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('subject.home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                        $categories = App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $item)
                        <li><a class="dropdown-item"
                                href="{{route('subject.category', ['id'=>$item->id])}}">{{$item->category}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('subject.writer')}}" class="nav-link">Writer</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('subject.about')}}" class="nav-link">Abaout Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>