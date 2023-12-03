@extends('layouts._layout')
@section('content')

<style>
    .section {
        display: none;
        margin: 20px 0;
    }

    .section.active {
        display: block;
    }
</style>


<body>
    <form id="myForm" action="{{route('appointupdate')}}"
        style="height: 40%; width: 50%; margin: 10% 5% 10% 25%; padding:5%;">
        <input type="number" class="form-control" id="id" name="id" hidden value="{{$appointdata->id}}">
        <p class="text-center text-dark bg-warning p-2 my-5">Edit</p>
        <div>

            <!-- section 1 -->
            <div class="section active" id="section">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>What's your legal name?</h3>
                        <p>Enter your name as it appears on your legal ID.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="firstname">First Name</label>
                        <input type="text" value="{{old('firstname', $appointdata->firstname)}}" id="firstname"
                            name="firstname">

                        <label for="lastname">Last Name</label>
                        <input type="text" value="{{old('lastname', $appointdata->lastname)}}" id="lastname"
                            name="lastname">
                    </div>
                </div>

                <input type="button" style="margin-left: 43%" onclick="showNextSection(2)" id="next" value="Next">
            </div>

            <!-- section 2 -->
            <div class="section" id="section2">
                <input type="button" style="margin-left: 43%" onclick="showPreviousSection(1)" id="next" value="Back">
                <div class="row">
                    <div class="col-6  gy-5">
                        <h2>What's your date of birth and legal sex?</h2>
                        <p>These should match your legal ID.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="dateofbirth">Date Of Birth</label>
                        <input type="date" value="{{old('dateofbirth', $appointdata->dateofbirth)}}" id="dateofbirth"
                            name="dateofbirth">

                        <label for="gender" class="form-label"> Gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option value="Male" @if($appointdata && $appointdata->gender == 'Male') selected
                                @endif>Male</option>
                            <option value="Female" @if($appointdata && $appointdata->gender == 'Female') selected
                                @endif>Female</option>
                            <option value="Other" @if($appointdata && $appointdata->gender == 'Other') selected
                                @endif>Other</option>
                        </select>
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(3)" id="next" value="Next">
            </div>

            <!-- section 3 -->
            <div class="section" id="section3">
                <input type="button" style="margin-left: 43%" onclick="showPreviousSection(2)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>How can we contact you?</h3>
                        <p>This is how we'll follow up on your request.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="email">Email</label>
                        <input type="email" value="{{old('email', $appointdata->email)}}" id="email" name="email">
                        <p class="text-danger alert-warning"> {{$errors->first('email')}}</p>
                    <?php
                        if($erros){
                            echo "<script> alert('$errors') </script>";
                        }
                    ?>

                        <label for="phonenumber">Phone No</label>
                        <input type="number" value="{{old('phonenumber', $appointdata->phonenumber)}}" id="phonenumber"
                            name="phonenumber">
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(4)" id="next" value="Next">
            </div>


            <!-- section 4 -->
            <div class="section" id="section4">
                <input type="button" style="margin-left: 43%" onclick="showPreviousSection(3)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Finally, your home address.</h3>
                        <p>This is how we'll follow up on your request.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="streetaddress">Street Address</label>
                        <input type="text" value="{{old('streetaddress', $appointdata->streetaddress)}}"
                            id="streetaddress" name="streetaddress">

                        <label for="city">City</label>
                        <input type="text" value="{{old('city', $appointdata->city)}}" id="city" name="city">

                        <label for="state">State</label>
                        <input type="text" value="{{old('state', $appointdata->state)}}" id="state" name="state">

                        <label for="zipcode">ZipCode</label>
                        <input type="number" value="{{old('zipcode', $appointdata->zipcode)}}" id="zipcode"
                            name="zipcode">
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(5)" id="next" value="Next">
            </div>


            <!-- section 5 -->
            <div class="section" id="section5">
                <input type="button" style="margin-left: 43%" onclick="showPreviousSection(4)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Please tell us about your primary medical concern.</h3>
                        <p>If this is a medical emergency, call 911 </p>
                        <p>If this is a mental health emergency, call or text 988 to talk to a counselor.
                            If you are located outside of the United States, please visit findahelpline.com</p>
                    </div>

                    <div class="col-6  gy-5">
                        <input type="text" value="{{old('concern', $appointdata->concern)}}" id="concern"
                            name="concern" rows="10" cols="30"></input><br><br>
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(6)" id="next" value="Next">
            </div>


            <!-- section 6 -->
            <div class="section" id="section6">
                <input type="button" style="margin-left: 43%" onclick="showPreviousSection(5)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Do you have health insurance?</h3>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="deppartment" class="form-label">Department</label>
                        <select id="deppartment" name="deppartment" class="form-select">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->DepartmentName}}</option>
                            @endforeach
                        </select>
                        <label for="finddoctor">Find Doctor</label><br>
                        <select id="doctor" name="doctor" class="form-select"><br>
                            <option value="{{$appointdata->doctor}}">Select Doctor</option>
                        </select>
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(7)" id="next" value="Next">
            </div>

            <!-- section 7 DISPLAY ENTERED DATA -->
            <div class="section" id="section7">
                <button type="button" class="btn-style btn" onclick="showPreviousSection(6)" id="next"><i
                        class="fa-solid fa-angle-up"></i> </button>
                <div class="row ">
                    <div class="col-lg-8">
                        <h3 class="py-5 text-primary">Your Submitted Information</h3>

                        <table>
                            <tr>Review the information before submitting.</tr>
                            <tr>
                                <th>Name:</th>
                                <td id="submittedName"></td>
                             
                            </tr>
                            <tr>
                                <th>Date of Birth:</th>
                                <td id="submittedDateOfBirth"></td>
                            </tr>
                            <tr>
                                <th>Gender:</th>
                                <td id="submittedGender"></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td id="submittedEmail"></td>
                            </tr>
                            <tr>
                                <th>Phone No:</th>
                                <td id="submittedPhonenumber"></td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td id="submittedCity"></td>
                            </tr>
                            <tr>
                                <th>State:</th>
                                <td id="submittedState"></td>
                            </tr>
                        </table>
                    </div>

                    <a class="btn btn-outline-warning" href="{{url('appointedit/'.$appoint->id)}}">Edit</a>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit">
                
            </div>


        </div>
    </form>


<script>

    //fetch doctor breakdown from doctordata
    $(document).ready(function() {
        $.ajax({
            url: '/get-doctor-breakdown',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // Debugging: Log the response data to the console

                var doctorSelect = $('#doctor');
                data.forEach(function(doctor) {
                    doctorSelect.append('<option value="' + doctor.DoctorName + '">' +
                        doctor.DoctorName + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error); // Log any error that occurs during the AJAX request
            }
        });
    });
 
    function showNextSection(nextSectionNumber) {
        // Validate the current section before proceeding
        const currentSection = document.querySelector('.section.active');
        const inputFields = currentSection.querySelectorAll('input, select, textarea');
        let isSectionValid = true;

        inputFields.forEach(input => {
            if (!input.value.trim()) {
                isSectionValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isSectionValid) {
            return;
        }

        // Hide the current active section
        currentSection.classList.remove('active');

        // Show the next section
        const nextSection = document.getElementById('section' + nextSectionNumber);
        nextSection.classList.add('active');

        if (nextSectionNumber === 7) {
            displaySubmittedData(); // Display submitted data in section 7
        }
    }

    function showPreviousSection(previousSectionNumber) {
        // Hide the current active section
        const currentSection = document.querySelector('.section.active');
        currentSection.classList.remove('active');

        // Show the previous section
        const previousSection = document.getElementById('section' + previousSectionNumber);
        previousSection.classList.add('active');
    }

    
    //show data before submition

    function displaySubmittedData() {
        const submittedName = document.getElementById('firstname').value + ' ' + document.getElementById('lastname')
            .value;
        const submittedDateOfBirth = document.getElementById('dateofbirth').value;

        const submittedDepartment = document.getElementById('department').value;

        const submittedConcern = document.getElementById('concern').value;

        const submittedZipCode = document.getElementById('zipcode').value;
        const submittedStreetAdress = document.getElementById('streetaddress').value;
        const submittedState = document.getElementById('state').value;
        const submittedCity = document.getElementById('city').value;
        const submittedPhonenumber = document.getElementById('phonenumber').value;
        const submittedEmail = document.getElementById('email').value;
        const submittedGender = document.getElementById('gender').value;


        // Display the gathered data in section 7
        document.getElementById('submittedName').textContent = submittedName;
        document.getElementById('submittedDateOfBirth').textContent = submittedDateOfBirth;
        document.getElementById('submittedGender').textContent = submittedGender;
        document.getElementById('submittedEmail').textContent = submittedEmail;
        document.getElementById('submittedPhonenumber').textContent = submittedPhonenumber;
        document.getElementById('submittedCity').textContent = submittedCity;
        document.getElementById('submittedState').textContent = submittedState;
        document.getElementById('submittedStreetAdddress').textContent = submittedStreetAdddress;
        document.getElementById('submittedZipCode').textContent = submittedZipCode;
        document.getElementById('submittedConcern').textContent = submittedConcern;
        document.getElementById('submittedDepartment').textContent = submittedDepartment;
        document.getElementById('submittedConcern').textContent = submittedConcern;
    }
</script>

</body>

@endsection