
    @extends('layouts._layout')
    @section('content')
    <div>
        <h1 class="text-center my-4 mission-heading fs-1" style="color: brown;">OUR MISSION</h1></div>
        <div class="container mt-5">
           
            <div class="row">
                <div class="col-lg-12 animated">
                    <div class="card">
                        <div class="row no-gutters c1">
                            <div class="col-md-4">
                                <img src="{{secure_asset('images/patient care.jpeg')}}" alt="Small Picture" class="card-img" height="260px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="mission-title"></h3>
                                    <p class="mission-description" > <h3 style="color: #ff9001;">Exceptional Patient Care</h3> 
                                        <p class="mission-description"> &nbsp; &nbsp; &nbsp;Our mission is to provide exceptional and compassionate patient care by prioritizing individual needs, offering personalized treatment plans, and maintaining the highest standards of medical excellence. </p>

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
                                <img src="{{secure_asset('images/advancement.jpeg')}}" alt="Small Picture" class="card-img" height="250px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="mission-title"></h3>
          <p class="mission-description"><h3 style="color: #ff9001;">Advancement Through Innovation</h3>
            <br> 
            <p class="mission-description">  &nbsp; &nbsp; &nbsp;At Medical Haven, we are dedicated to advancing medical science through continuous innovation. Our mission is to explore new treatment methods, techniques, and technologies to improve patient outcomes.We harness technology for seamless patient experiences, employing telemedicine, AI-driven diagnostics, and data analytics to provide personalized care. Research and education thrive within our institution, fostering a culture of learning and discovery.</p>

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
                                <img src="{{secure_asset('images/empowerment.jpeg')}}" alt="Small Picture" class="card-img" height="260px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="mission-title"></h3>
                                    <p class="mission-description"> <h3 style="color: #ff9001;">Empowerment Through Education</h3>
                                        <p class="mission-description">  &nbsp; &nbsp; &nbsp;Our Mission extends beyond healthcare to empower our patients and community through health education. We believe that informed individuals are better equipped to make positive health decisions.Our goal is to empower patients to actively participate in their health journeys, fostering a sense of agency and control. We prioritize health literacy, enabling patients to comprehend diagnoses, treatment options, and preventive measures. </p>

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
                                <img src="{{secure_asset('images/community.jpeg')}}" alt="Small Picture" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="mission-title"></h3>
          <p class="mission-description"><h3 style="color: #ff9001;">Community Well-Being</h3>
            <p class="mission-description">  &nbsp; &nbsp; &nbsp;Community well-being is at the heart of our mission. We are committed to actively engaging with our community, promoting preventive care, and contributing to the overall health and happiness of the people we serve. By organizing health fairs, awareness campaigns, and neighborhood events, we promote healthy lifestyles and encourage early intervention."
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endSection