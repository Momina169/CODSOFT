@extends('layouts._layout')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
.section {
    display: none;
    margin: 20px 0;
}

.section.active {
    display: block;
}

.is-invalid {
    border-color: red;

}

.btn-style {
    margin-left: 43%;
    margin-top: 12%;
    background-color: skyblue;
    padding: 5px 15px 5px 15px;
    border-radius: 5px;
}

.activeSection3 {
    display: block;
}
</style>



<div class="container px-5">
    <form id="myForm" method="get" action="{{ url(route('appoint.store')) }}">
        @csrf

        <!-- section 1 -->
        <div class="section active" id="section1">
            <div style="margin-top:12%"></div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 gy-5 ">
                    <h3>What's your legal name?</h3>
                    <p>Enter your name as it appears on your legal ID.</p>
                </div>
                <div class="col-lg-6  col-sm-12 gy-5">
                    <label for="firstname">First Name</label><br>
                    <input type="text" value="{{old('firstname')}}" id="firstname" name="firstname"><br>
                    <label for="lastname">Last Name</label><br>
                    <input type="text" value="{{old('lastname')}}" id="lastname" name="lastname"><br>
                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(2)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>


        <!-- section 2 -->
        <div class="section" id="section2">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(1)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row">
                <div class="col-6  gy-5">
                    <h2>What's your date of birth and legal sex?</h2>
                    <p>These should match your legal ID.</p>
                </div>
                <div class="col-6  gy-5">
                    <label for="dateofbirth">Date Of Birth</label><br>
                    <input type="date" value="{{old('dateofbirth')}}" required id="dateofbirth" name="dateofbirth"><br>
                    <label for="gender" class="form-label"> Gender</label><br>
                    <select id="gender" value="{{old('gender')}}" name="gender" class="form-select"><br>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(3)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>

        <!-- section 3 -->
        <div class="section" id="section3">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(2)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3>How can we contact you?</h3>
                    <p>This is how we'll follow up on your request.</p>
                </div>
                <div class="col-6  gy-5">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <p id="emailError" class="error text-danger mb-2"></p>
                    <p class="text-danger"> {{$errors->first('email')}}</p>




                    <label for="phonenumber">Phone No</label><br>
                    <input type="number" value="{{old('phonenumber')}}" id="phonenumber" name="phonenumber"
                        required><br>
                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(4)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>


        <!-- section 4 -->
        <div class="section" id="section4">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(3)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3>Finally, your home address.</h3>
                    <p>This is how we'll follow up on your request.</p>
                </div>
                <div class="col-6  gy-5">
                    <label for="streetaddress">Street Address</label><br>
                    <input type="text" value="{{old('streetaddress')}}" id="streetaddress" name="streetaddress"
                        required><br>

                    <label for="city">City</label><br>
                    <input type="text" value="{{old('city')}}" id="city" name="city" required><br>

                    <label for="state">State</label><br>
                    <input type="text" value="{{old('state')}}" id="state" name="state" required><br>

                    <label for="zipcode">ZipCode</label><br>
                    <input type="number" value="{{old('zipcode')}}" id="zipcode" name="zipcode" required><br>
                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(5)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>


        <!-- section 5 -->
        <div class="section" id="section5">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(4)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3>Please tell us about your primary medical concern.</h3>
                    <p>If this is a medical emergency, call 911 </p>
                    <p>If this is a mental health emergency, call or text 988 to talk to a counselor.
                        If you are located outside of the United States, please visit findahelpline.com</p>
                </div>
                <div class="col-6  gy-5">
                    <textarea type="text" value="{{old('concern')}}" id="concern" name="concern" rows="10"
                        cols="30"></textarea><br>
                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(6)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>


        <!-- Sectin 6 -->
        <div class="section" id="section6">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(5)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3>Do you have health insurance?</h3>
                </div>

                <div class="col-6  gy-5">
                    <label for="department" class="form-label">Department</label>
                    <select id="department" name="department" class="form-select">
                        @foreach($deppartmentBreakdown as $dep)
                        <option value="{{$dep->id}}" id="department">{{$dep->DepartmentName}}</option>
                        @endforeach
                    </select>

                    <label for="doctor">Select Doctor</label><br>
                    <select id="doctor" name="doctor" class="form-select"><br>
                        @foreach( $doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->DoctorName }}</option>
                    </select>

                </div>
            </div>
            <button type="button" class="btn-style btn" onclick="showNextSection(7)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>

        <!-- Section 7 DISPLAY ENTERED DATA -->
        <div class="section" id="section7">
            <button type="button" class="btn-style btn" onclick="showPreviousSection(6)" id="next"><i
                    class="fa-solid fa-angle-up"></i> </button>
            <div class="row ">
                <div class="col-lg-8">
                    <h3 class="py-5 text-primary">Your Information</h3>

                    <table>
                        <tr>Review the information before submitting.</tr>
                        <tr>
                            <th>Name:</th>
                            <td id="submittedName"></td>
                            <!-- <button type="button" onclick="editField('name')">Edit</button> -->
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
            </div>
            <input type="submit" name="submit" id="submit" value="Submit">
            <button type="button" class="btn-style btn" onclick="showNextSection(7)" id="next"><i
                    class="fa-solid fa-angle-down"></i></button>
        </div>


    </form>
</div>


    <?php
    if ($errors->first('email')) { ?>
        echo "<script> alert('" . $errors->first('email') . "') </script>";
        ?>
        <script>
        $(document).ready(function() {
            document.getElementById('email').focus();
        });
        </script>
    <?php } ?>

<script>

//fetch deppartment breakdown from staff
$(document).ready(function() {
    $.ajax({
        url: '/get-deppartment-breakdown-staff',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data); 

            var departmentSelect = $('#department');
            data.forEach(function(department) {
                departmentSelect.append('<option value="' + department.deppartment + '">' +
                    department.deppartment + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error(error); 
        }
    });
});
//fetch doctor breakdown from doctordata
$(document).ready(function() {
    $.ajax({
        url: '/get-doctor-breakdown',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data); 

            var doctorSelect = $('#doctor');
            data.forEach(function(doctor) {
                doctorSelect.append('<option value="' + doctor.DoctorName + '">' + doctor
                    .DoctorName + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error(error); 
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

// Show Previous Section
function showPreviousSection(previousSectionNumber) {
    // Hide the current active section
    const currentSection = document.querySelector('.section.active');
    currentSection.classList.remove('active');

    // Show the previous section
    const previousSection = document.getElementById('section' + previousSectionNumber);
    previousSection.classList.add('active');
}

//edit form data
function editField(fieldName) {

    const submittedField = document.getElementById('submitted' + fieldName);
    const fieldValue = submittedField.textContent;

    submittedField.innerHTML =
        `<input type="text" id="edit${fieldName}" value="${fieldValue}"> <button type="button" onclick="saveEdit('${fieldName}')">Save Changes</button>`;
    return false;
}

function saveEdit(fieldName) {
    const editedValue = document.getElementById('edit' + fieldName).value;
    const submittedField = document.getElementById('submitted' + fieldName);
    submittedField.textContent = editedValue;
    return false;
}
//show data before submition

function displaySubmittedData() {
    const submittedName = document.getElementById('firstname').value + ' ' + document.getElementById('lastname').value;
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
    document.getElementById('submittedStreetAddress').textContent = submittedStreetAdddress;
    document.getElementById('submittedZipCode').textContent = submittedZipCode;
    document.getElementById('submittedConcern').textContent = submittedConcern;
    document.getElementById('submittedDepartment').textContent = submittedDepartment;

}
</script>
@endsection