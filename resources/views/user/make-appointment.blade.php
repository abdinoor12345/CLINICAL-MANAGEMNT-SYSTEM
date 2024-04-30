@extends('layout.app')
@section('content')
<div>@livewire('nav')
<div class="page-section">
    <div class="container">
        <h1 class="text-yellow-400 p-4 text-3xl">Make an Appointment</h1>

        <form class="main-form" method="post" action="{{ url('appointment') }}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5">
                <div>
                    <input name="name" type="text" class="form-input" placeholder="Full name">
                </div>
                <div>
                    <input name="email" type="text" class="form-input" placeholder="Email address..">
                </div>
                <div>
                    <input name="date" type="date" class="form-input">
                </div>
                <div>
                    <select name="doctor" id="departement" class="form-select">
                        <option>....select doctors..</option>
                        @foreach($doctor as $doctor)
                            <option value="{{ $doctor->name }}"> {{ $doctor->name }} ...specialty....{{ $doctor->speciality }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <input name="number" type="text" class="form-input" placeholder="Number..">
                </div>
                <div>
                    <textarea name="message" id="message" class="form-textarea" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-2xl rounded-lg mt-3">Submit Request</button>
        </form>
    </div>
</div>

<!-- Add this to your layout file or directly to your view -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.main-form').addEventListener('submit', function (event) {
            event.preventDefault();
            
            // Submit the form using Ajax
            fetch(this.action, {
                method: this.method,
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Appointment submitted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    // Handle if submission fails
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            })
            .catch(error => {
                // Handle if submission fails
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            });
        });
    });
</script>

 </div>
@endsection
 