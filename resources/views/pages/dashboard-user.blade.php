@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Pet Shops</h5>
                    <!-- Content for Pet Shops filter card -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Hospitals</h5>
                    <!-- Content for Hospitals filter card -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Veterinarians</h5>
                    <!-- Content for Veterinarians filter card -->
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
        <div class="col-md-4 pb-4">
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
    console.log('hey there!')

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
</script>
@endpush

@include('layouts.footers.auth.footer')
@endsection