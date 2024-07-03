{{-- 
@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="butss">
                    <h4 class="card-title mb-1 mb-5">Products</h4>
                    <button type="button" class="button">
                        <span class="button__text">Add</span>
                        <span class="button__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg">
                                <line y2="19" y1="5" x2="12" x1="12"></line>
                                <line y2="12" y1="12" x2="19" x1="5"></line>
                            </svg>
                        </span>
                    </button>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $product->price }}</h2>
                                        </div>
                                        <p class="text-muted font-weight-normal">{{ $product->description }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="buts">
                                        <button class="edit-button">
                                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                            </svg>
                                        </button>
                                        <button class="delete-button">
                                            <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="butss">
                    <h4 class="card-title mb-1 mb-5">Products</h4>
                    <a href="/add_service">
                        <button type="button" class="button">
                        <span class="button__text">Add</span>
                        <span class="button__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg">
                                <line y2="19" y1="5" x2="12" x1="12"></line>
                                <line y2="12" y1="12" x2="19" x1="5"></line>
                            </svg>
                        </span>
                    </button>
                    </a>
                    
                </div>

                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $product->price }}</h2>
                                        </div>
                                        <p class="text-muted font-weight-normal description" data-full-text="{{ $product->description }}">
                                            {{ Str::limit($product->description, 70) }}
                                        </p>
                                        {{-- <a href="#" class="see-more" onclick="toggleDescription(event)">See more</a> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="buts">
                                        <a href="/open_edit_service?id={{$product->No_Produit}}">
                                            <button class="edit-button">
                                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                            </svg>
                                        </button>
                                        </a>
                                        
                                        <a href="/delete_service?id={{$product->No_Produit}}">
                                            <button class="delete-button">
                                            <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                            </svg>
                                            </button>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDescription(event) {
        event.preventDefault();
        const link = event.target;
        const description = link.previousElementSibling;
        const fullText = description.getAttribute('data-full-text');
        const isExpanded = description.classList.toggle('expanded');

        if (isExpanded) {
            description.textContent = fullText;
            link.textContent = 'See less';
        } else {
            description.textContent = fullText.slice(0, 50) + '...';
            link.textContent = 'See more';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const descriptions = document.querySelectorAll('.description');
        const minHeight = Math.min(...Array.from(descriptions).map(desc => desc.textContent.length));
        descriptions.forEach(desc => {
            if (desc.textContent.length > minHeight) {
                desc.textContent = desc.textContent.slice(0, minHeight) + '...';
                const link = document.createElement('a');
                link.href = '#';
                link.className = 'see-more';
                link.textContent = 'See more';
                link.onclick = toggleDescription;
                desc.parentElement.appendChild(link);
            }
        });
    });
</script>
@endsection

