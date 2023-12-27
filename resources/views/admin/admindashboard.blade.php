<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <h1 style="color:brown;">Hospital Management System</h1>
    <div class="row g-5" >

        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{secure_asset('/images/doctors.jpg')}}" alt="doctors">
                <div class="card-body">
                    <h5 class="card-title">Doctors</h5>
                    <a href="{{route('doctorcrud')}}" class="btn btn-outline-info">Check List</a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{secure_asset('/images/appointment.jpg')}}" alt="doctors">
                <div class="card-body">
                    <h5 class="card-title">Appointments</h5>
                    <a href="{{route('appoint.index')}}" class="btn btn-outline-info">Check List</a>
                </div>
            </div>
        </div>

        <div class="col-6 gy-2" >
            <div class="card" style="width: 18rem;">
                <img class="card-img-top"  src="{{secure_asset('/images/users.png')}}" alt="doctors">
                <div class="card-body">
                    <h5 class="card-title">Roles/Users</h5>
                    <a href="{{route('users')}}" class="btn btn-outline-info">Check List</a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{secure_asset('/images/team5.jpg')}}" alt="doctors">
                <div class="card-body">
                    <h5 class="card-title">Staff</h5>
                    <a href="{{route('staff.index')}}" class="btn btn-outline-info">Check List</a>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>