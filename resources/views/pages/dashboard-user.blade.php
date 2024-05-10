@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-md-4" style="cursor: pointer" onclick="filterServices('Pet Shop')">
            <div class="card mb-4">
                <div class="card-body" style="display:flex; align-items: center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="max-width:40px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M153.7 144.8c6.9 16.3 20.6 31.2 38.3 31.2H384c17.7 0 31.4-14.9 38.3-31.2C434.4 116.1 462.9 96 496 96c44.2 0 80 35.8 80 80c0 30.4-17 56.9-42 70.4c-3.6 1.9-6 5.5-6 9.6s2.4 7.7 6 9.6c25 13.5 42 40 42 70.4c0 44.2-35.8 80-80 80c-33.1 0-61.6-20.1-73.7-48.8C415.4 350.9 401.7 336 384 336H192c-17.7 0-31.4 14.9-38.3 31.2C141.6 395.9 113.1 416 80 416c-44.2 0-80-35.8-80-80c0-30.4 17-56.9 42-70.4c3.6-1.9 6-5.5 6-9.6s-2.4-7.7-6-9.6C17 232.9 0 206.4 0 176c0-44.2 35.8-80 80-80c33.1 0 61.6 20.1 73.7 48.8z" />
                    </svg>
                    <h5 class="card-title" style="margin-left:20px; margin-bottom: 0">Pet Shops</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="cursor: pointer" onclick="filterServices('Hospital')">
            <div class="card mb-4">
                <div class="card-body" style="display:flex; align-items: center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="max-width:40px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M232 0c-39.8 0-72 32.2-72 72v8H72C32.2 80 0 112.2 0 152V440c0 39.8 32.2 72 72 72h.2 .2 .2 .2 .2H73h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H75h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H77h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H79h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H82h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H85h.2 .2 .2 .2H86h.2 .2 .2 .2H87h.2 .2 .2 .2H88h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H98h.2 .2 .2 .2H99h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2v0H456h8v0H568c39.8 0 72-32.2 72-72V152c0-39.8-32.2-72-72-72H480V72c0-39.8-32.2-72-72-72H232zM480 128h88c13.3 0 24 10.7 24 24v40H536c-13.3 0-24 10.7-24 24s10.7 24 24 24h56v48H536c-13.3 0-24 10.7-24 24s10.7 24 24 24h56V440c0 13.3-10.7 24-24 24H480V336 128zM72 128h88V464h-.1-.2-.2-.2H159h-.2-.2-.2H158h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H154h-.2-.2-.2H153h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H150h-.2-.2-.2H149h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H146h-.2-.2-.2H145h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H142h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H139h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H136h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H133h-.2-.2-.2-.2-.2-.2-.2-.2H131h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H128h-.2-.2-.2-.2-.2-.2-.2-.2H126h-.2-.2-.2-.2-.2-.2-.2-.2H124h-.2-.2-.2-.2-.2-.2-.2-.2H122h-.2-.2-.2-.2-.2-.2-.2-.2H120h-.2-.2-.2-.2-.2-.2-.2-.2H118h-.2-.2-.2-.2-.2-.2-.2-.2H116h-.2-.2-.2-.2-.2-.2-.2-.2H114h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H111h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H108h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H105h-.2-.2-.2-.2H104h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H100h-.2-.2-.2-.2H99h-.2-.2-.2-.2H98h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H88h-.2-.2-.2-.2H87h-.2-.2-.2-.2H86h-.2-.2-.2-.2H85h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H82h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H79h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H77h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H75h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H73h-.2-.2-.2-.2-.2H72c-13.2 0-24-10.7-24-24V336h56c13.3 0 24-10.7 24-24s-10.7-24-24-24H48V240h56c13.3 0 24-10.7 24-24s-10.7-24-24-24H48V152c0-13.3 10.7-24 24-24zM208 72c0-13.3 10.7-24 24-24H408c13.3 0 24 10.7 24 24V336 464H368V400c0-26.5-21.5-48-48-48s-48 21.5-48 48v64H208V72zm88 24v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V168h24c8.8 0 16-7.2 16-16V136c0-8.8-7.2-16-16-16H344V96c0-8.8-7.2-16-16-16H312c-8.8 0-16 7.2-16 16z" />
                    </svg>
                    <h5 class="card-title" style="margin-left:20px; margin-bottom: 0">Hospitals</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="cursor: pointer" onclick="filterServices('Veterinarian')">
            <div class="card mb-4">
                <div class="card-body" style="display:flex; align-items: center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="max-width:40px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1V192c0 53 43 96 96 96s96-43 96-96V71.1l-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1V192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112V265.3c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V336c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192V71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                    </svg>
                    <h5 class="card-title" style="margin-left:20px; margin-bottom: 0">Veterinarians</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:800px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content will be dynamically populated here -->
                    <div id="modalContent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <h2 class="display-5 mt-6 mb-4"> <strong> Top Rated Services </strong></h2>

        @foreach($topRatedServices as $key => $service)
        <div class="col-md-4 pb-4 service-card {{ $service['category'] }}">
            <div class="card card-profile" onclick="openModal(this, <?php echo htmlspecialchars(json_encode($service), ENT_QUOTES, 'UTF-8'); ?>)">
                <div class="d-flex justify-content-center align-items-center card-img-top" style="height: 200px; overflow:hidden">
                    <img src="{{ $service['image'] }}" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="{{ $service['avatar'] }}" class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="d-grid text-center mx-4">
                                    <span class="text-lg font-weight-bolder">{{ $service['reviews'] }}</span>
                                    <span class="text-sm opacity-8">Reviews</span>
                                </div>
                                <!-- Star icon for rating -->
                                <div class="d-grid text-center">
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="text-sm opacity-8">{{ $service['rating'] }}</span>
                                </div>
                                <!-- End star icon for rating -->
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <h5>{{ $service['name'] }}</h5>
                        <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $service['location'] }}
                        </div>
                        <label class="badge badge-pill badge-md bg-gradient-warning">
                            {{ $service['category'] }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@push('js')
<script>
    function openModal(card, serviceData) {
        var modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = `
        <div class="d-flex justify-content-center align-items-center card-img-top" style="height: 200px; overflow:hidden">
                    <img src=${ serviceData.image } alt="Image placeholder" class="img-fluid">
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src=${ serviceData.avatar } class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="d-grid text-center mx-4">
                                    <span class="text-lg font-weight-bolder">${serviceData.reviews }</span>
                                    <span class="text-sm opacity-8">Reviews</span>
                                </div>
                                <!-- Star icon for rating -->
                                <div class="d-grid text-center">
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="text-sm opacity-8">${ serviceData.rating }</span>
                                </div>
                                <!-- End star icon for rating -->
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <h5>${ serviceData.name }</h5>
                        <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i>${ serviceData.location }
                        </div>
                        <label class="badge badge-pill badge-md bg-gradient-warning">
                            ${serviceData.category}
                        </label>
                    </div>
                </div>
                <h5>Reviews:</h5>
            <div>
                ${serviceData.comments.map(review => `
                    <div class="alert alert-light" role="alert">
                        <strong>${review.user}: </strong>${review.text}
                    </div>`
                ).join('')}
            </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Review" aria-describedby="button-addon4">
                <button type="button" class="btn bg-gradient-warning" style="margin: 0">Submit your Review</button>
            </div>
        `;
        var modal = new bootstrap.Modal(document.getElementById('serviceModal'));
        modal.show();
    }

    function filterServices(category) {
        document.querySelectorAll('.service-card').forEach(card => {
            card.style.display = 'none';
        });

        document.querySelectorAll('.service-card').forEach(card => {
            if (card.querySelector('.badge.bg-gradient-warning').innerText.trim() === category) {
                card.style.display = 'block';
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('searchInput');

        searchInput.addEventListener('input', function() {
            var searchText = searchInput.value.trim().toLowerCase();
            var cards = document.querySelectorAll('.service-card'); // Change '.existing-card' to the actual class or identifier of your cards

            cards.forEach(function(card) {
                var cardName = card.textContent ? card.textContent.trim().toLowerCase() : ''; // Check if textContent exists

                if (cardName.includes(searchText)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush

@include('layouts.footers.auth.footer')
@endsection