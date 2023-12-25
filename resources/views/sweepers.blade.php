<style>
    .lab5 {
        background-image: url(./images/sweeper9.jpeg);
        min-height: 300px;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card-body {
        display: flex;

    }

    .card-body img {
        max-height: 200px;
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .card .c1 {
        animation: slideInLeft 1s ease-in-out forwards;
    }

    /* Define the animation */
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }


    .card .c2 {
        animation: slideInRight 1s ease-in-out forwards;
    }
</style>

@extends('layouts._layout')
@section('content')
<!--body-->
<section class="container-fluids lab">
    <div class="lab5">
        <div class="h3 text-center pt-5 text-danger">OUR SWEEPERS IN HOSPITAL</div>
        <div class="container fs-5">
            <p>Hospital sweepers are essential members of the hospital's support staff. They are responsible for
                maintaining the cleanliness and orderliness of various areas within the hospital, including patient
                rooms, corridors, waiting areas, restrooms, and common spaces. Their primary goal is to ensure a
                sanitized and inviting environment that contributes to the overall well-being of patients and staff.</p>
        </div>
    </div>
    <br><br><br>

    <!-- Nurses -->
    <div class="text-center h5 text-danger">MEET OUR SWEEPERS MEMBERS IN HOSPITAL</div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 animated">
                <div class="card">
                    <div class="row no-gutters c1">
                        <div class="col-md-4">
                            <img src="{{ secure_asset('./images/lab2.jpg')}}" alt="Small Picture" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                <p class="" style="font-size: 17px;">Sweepers, often referred to as janitors or
                                    custodial
                                    staff, play a vital role in maintaining the cleanliness and hygiene of hospitals
                                    and
                                    healthcare facilities. Their responsibilities extend beyond simply sweeping
                                    floors; they
                                    contribute to creating a safe, comfortable, and sanitized environment for
                                    patients,
                                    healthcare professionals, and visitors. Sweepers are responsible for sweeping,
                                    mopping,
                                    and vacuuming floors to remove dust, debris, and potentially harmful pathogens.
                                    They
                                    sanitize surfaces, including counters, handrails, and doorknobs, to prevent the
                                    spread
                                    of infections.
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!---///////////////////second row///////////////////////-->
        <div class="row">
            <div class="col-lg-12 animated">
                <div class="card">
                    <div class="row no-gutters c2">
                        <div class="col-md-4">
                            <img src="{{ secure_asset('./images/lab4.jpg')}}" alt="Small Picture" class="card-img" height="250px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                <p class="" style="font-size: 17px;">They collect and dispose of waste, including
                                    medical waste, in accordance with hospital protocols and regulations. Proper
                                    disposal helps prevent contamination and maintain a safe environment.Sweepers are
                                    trained in infection control measures and follow strict guidelines to prevent the
                                    spread of infections.
                                    hospital sweepers are integral members of the healthcare team who work diligently to
                                    create and maintain a clean, safe, and sanitized environment for patients, visitors,
                                    and healthcare professionals.
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!--------------///////////////////////////////////////////////-->
        <div class="row">
            <div class="col-lg-12 animated">
                <div class="card">
                    <div class="row no-gutters c1">
                        <div class="col-md-4">
                            <img src="{{ secure_asset('./images/sweeper2.jpg')}}" alt="Small Picture" class="card-img" height="260px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                <p class="" style="font-size: 17px;">They ensure that essential supplies such as hand
                                    sanitizers, soap, paper towels, and toilet paper are adequately stocked in restrooms
                                    and other areas to promote good hygiene practices.Apart from sweeping, sweepers may
                                    be responsible for tasks such as floor waxing, buffing, and polishing to maintain
                                    the appearance and safety of the hospital's flooring.
                                    healthcare professionals, and visitors. Sweepers are responsible for sweeping,
                                    mopping,
                                    and vacuuming floors to remove dust, debris, and potentially harmful pathogens.
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!---/////////////////////third row///////////////////////////////////////-->
        <div class="row">
            <div class="col-lg-12 animated">
                <div class="card">
                    <div class="row no-gutters c2">
                        <div class="col-md-4">
                            <img src="{{ secure_asset('./images/sweepers3.jpg')}}" alt="Small Picture" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                <p class="" style="font-size: 17px;">Sweepers often work closely with other hospital
                                    staff to coordinate cleaning efforts, especially in patient rooms and operating
                                    rooms, to maintain a high standard of cleanliness.

                                    Environmental Aesthetics: Their work contributes to the overall aesthetic appeal of
                                    the hospital, creating a welcoming atmosphere for patients, their families, and
                                    visitors.
                                    healthcare professionals, and visitors. Sweepers are responsible for sweeping,
                                    mopping,
                                    and vacuuming floors to remove dust, debris, and potentially harmful pathogens.
                                    They
                                    sanitize surfaces, including counters, handrails, and doorknobs, to prevent the
                                    spread
                                    of infections.
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>
<!---/////////////////////////section 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<section class="container">
    <div class="text-center h1 text-danger">Facilities and Real Estate Information</div>
    <div>
        <p class="">Clinic has a diverse inventory of facilities and real estate. The inventory includes clinics,
            hospitals, research facilities, educational facilities, administrative, power plants, parking ramps, healthy
            living, senior housing and warehousing. These facilities are managed locally within coordinated Mayo Clinic
            expectations.
            Local management is focused on hub locations that include the following:
        <ul>
            <li>Is necessary to perform services at Mayo Clinic</li>
            <li>Ensures appropriate 1099 reporting</li>
            <li>Ensures appropriate tracking and use of minority suppliers</li>
            <li>Limits access to your competitors that do not comply with requirements</li>

        </ul>
        <br>Facilities-related procurement recognizes the benefits of local suppliers and professionals for most
        facilities work. Specialized projects will generate the review of national resources. Ultimate selection and
        accountability lies with the project team or local leadership. <br>Clinic has developed design, construction,
        and service contract forms and agreements. The majority of routine work is accomplished through contract
        amendments to master agreements with established designers and contractors. Limited new relationships are
        pursued, due to the investment Mayo Clinic makes in developing external "team members" to its specific
        environment.
        <br>Sweepers play a crucial role in maintaining the overall hygiene and safety of a hospital. Their efforts
        contribute to preventing the spread of infections, ensuring a comfortable environment for patients, and
        supporting the hospital's mission to provide high-quality healthcare services.</p>
    </div>
</section>

@endSection