<div class="Footer_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="leftlogofooter_section">
                          <div class="ftLogo">
                            <img src="assets/images/footerlogo.png" alt="">
                          </div>

                          <div class="footer_left_widgets">
                             <h1>About Us</h1>

                             <p>Our company has developed into one of the leading Insurance companies in the Insurance industry Today.</p>
                             <ul class="ftsocial_media">
                                <li><a href="##"><iconify-icon icon="bxl:facebook"></iconify-icon></a></li>
                                <li><a href="##"><iconify-icon icon="jam:instagram"></iconify-icon></a></li>
                             </ul>
                         </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4">
                         <div class="footer_right_widgets">
                             <h1>Quick Links</h1>
                             <ul>
                                <li><a href="##">Home</a></li>
                                <li><a href="##">About Us</a></li>
                                <li><a href="##">Insurances</a></li>
                                <li><a href="##">Contact Us</a></li>
                             </ul>
                         </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="footer_right_widgets">
                             <h1>Insurances</h1>
                             <ul>
                                <li><a href="##">Multi-trip Insurances</a></li>
                                <li><a href="##">Single-trip Insurances</a></li>
                                <li><a href="##">International Travel Insurance</a></li>
                                <li><a href="##">Student Travel Insurance</a></li>
                             </ul>
                         </div>
                    </div>

                    <div class="col-lg-4">
                         <div class="footer_right_widgets">
                             <h1>Contact Us</h1>
                             <div class="footer_location">
                                <p><iconify-icon icon="akar-icons:location"></iconify-icon> Basrah - Minawi Pasha, Opposite to Basrah Tourist Hotel Nando’s Restaurant Building - 3rd floor</p>
                             </div>
                             <ul>
                                <li><a href="##"> <iconify-icon icon="ph:phone"></iconify-icon> +964 7700 1700 16</a></li>
                                <li><a href="##"><iconify-icon icon="humbleicons:mail"></iconify-icon> info@alhamraains.com</a></li>
                             </ul>
                         </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="CopyRights_footer">
            <div class="ftCopyright_left">
                <p>Copyright© 2023 Al Hamraa Insurance. All Right Reserved</p>
            </div>
            <div class="ftCopyright_right">
                <ul>
                    <li><a href="##">Privacy Policy</a></li>
                    <li><a href="##">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>










<!-- js all files -->
<script src="assets/js/jquery-3.7.1.js"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="assets/js/slick.js"></script>
<!-- iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- dropify cdn -->
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<!-- dropify end -->

<!-- select2 cdn -->
<link href="assets/css/select2.min.css" rel="stylesheet" />
<script src="assets/js/select2.min.js"></script>
<!-- select2 end -->


<!-- country code mobile field -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.6/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/js/intlTelInput.js"></script>
<!-- country code mobile field end-->


<!-- date picker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- date picker end -->

<script>
    flatpickr(".insuranceDate", {
        dateFormat: "Y-m-d", // Set your desired date format
        minDate: "today",    // Set the minimum date to today
        // Add more options as needed
    });
</script>
<script>
    flatpickr(".dobDate", {
        dateFormat: "Y-m-d", // Set your desired date format
        minDate: "1900-01-01", // Set a minimum date if required (e.g., 1900-01-01)
        maxDate: "today",      // Set the maximum date to today
        // Add more options as needed
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Initialize flatpickr for start date
    const flatpickrInstance = flatpickr(".insuranceDate", {
        dateFormat: "Y-m-d", // Set your desired date format
        minDate: "today",    // Set the minimum date to today
        onChange: function(selectedDates) {
            console.log("Selected Start Date:", selectedDates[0]);
            calculateEndDate(selectedDates[0]); // Calculate end date with the selected date
        }
    });

    // Function to calculate end date based on the selected start date and number of days
    function calculateEndDate(startDate) {
        const numberOfDays = parseInt(document.getElementById("numberOfDays").value); // Get number of days

        if (startDate && !isNaN(numberOfDays) && numberOfDays > 0) {
            const endDate = new Date(startDate); // Create a new date object based on the start date
            endDate.setDate(endDate.getDate() + numberOfDays); // Add number of days to the start date

            // Format end date to 'Y-m-d' format
            const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
            const formattedEndDate = endDate.toLocaleDateString('en-CA', options).replace(/(\d+)\/(\d+)\/(\d+)/, '$3-$1-$2');

            // Set the calculated end date in the input field
            document.getElementById("insuranceEndDate").value = formattedEndDate;
        } else {
            document.getElementById("insuranceEndDate").value = ''; // Clear if no valid input
        }
    }

    // Separate function to handle number of days change
    function handleNumberOfDaysChange() {
        const startDate = flatpickrInstance.selectedDates[0]; // Get selected start date from flatpickr instance
        if (startDate) {
            calculateEndDate(startDate); // Calculate end date based on selected start date
        } else {
            document.getElementById("insuranceEndDate").value = ''; // Clear if no start date selected
        }
    }

    // Event listener for number of days change
    const numberOfDaysDropdown = document.getElementById("numberOfDays");
    numberOfDaysDropdown.addEventListener("change", handleNumberOfDaysChange);
});

</script>

<!-- dropify call -->
<script>
    $('.dropify').dropify();
</script>

<!-- active navbar menu -->
<script>
  function setActiveLink(element) {
    // Remove 'active' class from all nav-links
    document.querySelectorAll('.nav-link').forEach(function(link) {
      link.classList.remove('active');
    });

    // Add 'active' class to the clicked nav-link
    element.classList.add('active');
  }

  // Set active link based on the current URL
  document.addEventListener('DOMContentLoaded', function () {
    var path = window.location.pathname;
    var page = path.split("/").pop();

    // Check if an active link is found based on the current URL
    var activeLinkFound = false;
    document.querySelectorAll('.nav-link').forEach(function(link) {
      if (link.getAttribute('href') === page) {
        link.classList.add('active');
        activeLinkFound = true;
      }
    });

    // If no active link is found, set the "Home" link as active
    if (!activeLinkFound) {
      document.querySelector('.nav-link[href="index.php"]').classList.add('active');
    }
  });
</script>


<!-- home insurance slick slider -->
<script>
  $('.insurance_items').slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  arrows: false,
  centerMode: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>

<script src="assets-form/js/popper.min.js"></script>
	<script src="assets-form/js/bootstrap.min.js"></script>
	<script src="assets-form/js/switch.js"></script>
	<script src="assets-form/js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>


<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        // Fetch list of countries and nationalities from restcountries API
        $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
                // Extract nationalities from the response
                var nationalities = data.map(function(country) {
                    return country.name.common;
                });
                // Dynamically populate options
                nationalities.forEach(function(nationality) {
                    var option = new Option(nationality, nationality);
                    $('#nationality').append(option);
                });
                // Trigger Select2 to refresh after dynamically adding options
                $('#nationality').trigger('change');
            },
            error: function() {
                console.error('Failed to fetch data from the restcountries API');
            }
        });
    });
</script>

<script>
    $(".TelPhoneinput").intlTelInput({
        initialCountry: "auto",
        separateDialCode: false,
        initialCountry: "gb",
        formatOnDisplay: true,
        nationalMode: false,
        // allowDropdown: false,
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        utilsScript: "../../build/js/utils.js?1562189064761",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/js/utils.js",
        preferredCountries: [],
    });

    function resetIntlTelInput() {
        if (typeof intlTelInputUtils !== 'undefined') { // utils are lazy loaded, so must check
            var currentText = telInput.intlTelInput("getNumber", intlTelInputUtils.numberFormat.E164);
            if (typeof currentText === 'string') { // sometimes the currentText is an object :)
                telInput.intlTelInput('setNumber', currentText); // will autoformat because of formatOnDisplay=true
            }
        }
    }
</script>


<script>
  // Use jQuery to dynamically generate numeric options
  $(document).ready(function() {
    // Reference to the select element
    var select = $('#numberOfDays');

    // Function to populate options dynamically
    function populateOptions(start, end) {
      for (var i = start; i <= end; i++) {
        var option = new Option(i + ' days', i);
        select.append(option);
      }
    }

    // Populate options from 1 to 30
    populateOptions(1, 730);

    // Initialize Select2
    select.select2();
  });
</script>
<script>
$(document).ready(function() {
    $('#updateForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Get input values
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let mobile_no = $('input[name="mobile_no"]').val();

        // Front-end validation
        let errors = {};
        
        // Check if name is empty
        if (!name) {
            errors.name = 'First name is required.';
        }
        
        // Check if email is empty
        if (!email) {
            errors.email = 'Email is required.';
        }

        // Check if mobile number is empty or not exactly 10 digits
        if (!mobile_no) {
            errors.mobile_no = 'Mobile number is required.';
        } else if (mobile_no.length !== 10) {
            errors.mobile_no = 'Mobile number must be exactly 10 digits.';
        }

        // If there are errors, display them and exit
        if (Object.keys(errors).length > 0) {
            let errorMessage = '<div class="alert alert-danger">';
            $.each(errors, function(key, value) {
                errorMessage += value + '<br>';
            });
            errorMessage += '</div>';
            $('#responseMessage').html(errorMessage);
            return; // Exit the function
        }

        // Laravel route() helper to inject the URL into the script
        let updateUrl = "{{ route('user.update') }}"; // Laravel route

        // CSRF token
        let token = $('input[name=_token]').val();

        // AJAX request
        $.ajax({
            url: updateUrl, // URL from Laravel route
            method: 'POST',
            data: $(this).serialize(), // Serialize form data
            headers: {
                'X-CSRF-TOKEN': token // CSRF token for Laravel
            },
            success: function(response) {
                $('#responseMessage').html('<div class="alert alert-success">' + response.success + '</div>');
                setTimeout(function() {
                    location.reload(); // Refresh the page
                }, 1000);
              },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '<div class="alert alert-danger">';
                    $.each(errors, function(key, value) {
                        errorMessage += value[0] + '<br>';
                    });
                    errorMessage += '</div>';
                    $('#responseMessage').html(errorMessage);
                }
            }
        });
    });
});


function cancelUpdate() {
    // Redirect or clear the form as needed
    $('#updateForm')[0].reset(); // Clear the form fields
}
$(document).ready(function() {
    $('#passwordUpdateForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Laravel route() helper to inject the URL into the script
        let updateUrl = "{{ route('password.update') }}"; // Laravel route

        // CSRF token
        let token = $('input[name=_token]').val();

        // AJAX request
        $.ajax({
            url: updateUrl, // URL from Laravel route
            method: 'POST',
            data: $(this).serialize(), // Serialize form data
            headers: {
                'X-CSRF-TOKEN': token // CSRF token for Laravel
            },
            success: function(response) {
                $('#responseMessage').html('<div class="alert alert-success">' + response.success + '</div>');
                
                // Page refresh after 1 second (optional)
                setTimeout(function() {
                    location.reload(); // Refresh the page
                }, 1000);
            },
            error: function(xhr) {
                let errorMessage = '<div class="alert alert-danger">';
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        errorMessage += value[0] + '<br>'; // Show each error
                    });
                } else {
                    errorMessage += 'An error occurred. Please try again.'; // General error message
                }
                errorMessage += '</div>';
                $('#responseMessage_pass').html(errorMessage); // Display the error message
            }
        });
    });
});


</script>
<script>
    function getBaseUrl() {
        const baseUrl = window.location.origin; // Get the current host and port
        return `${baseUrl}/storage/passports/`; // Append your storage path
    }

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#insurance_submitBtn').click(function(event) {
            event.preventDefault(); // Default action ko roken

            var formData = new FormData($('#wizard')[0]);

            // FormData se sabhi values prapt karne ka tareeqa
            var dataObject = {};
            formData.forEach(function(value, key) {
                dataObject[key] = value; // Key-value pair ko sahejain
            });

            console.log(dataObject);

            // Data ko HTML mein convert karein aur dikhayein
            const baseUrl = getBaseUrl();
            let htmlContent = '';

            // Loop through each person dynamically based on the number of persons
            let personIndex = 1; // Initialize person index
            while (dataObject[`persons[${personIndex}][first_name]`] !== undefined) {
                const passportFile = dataObject[`persons[${personIndex}][passport_file]`];
                let passportUrl;

                // Check if passportFile is a File object
                if (passportFile instanceof File) {
                    passportUrl = URL.createObjectURL(passportFile); // Create a URL for the file
                } else if (passportFile) {
                    passportUrl = baseUrl + passportFile.name; // Use the base URL if not a File object
                } else {
                    passportUrl = ''; // No image uploaded
                }

                htmlContent += `
                <div class="person_bx">
                    <h6 class="person_title">Person ${personIndex} Details</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="detail_box pe-4">
                                <ul>
                                    <li>
                                        <div class="detail_title"><h6>Full Name* (as per passport)</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][first_name]`]} ${dataObject[`persons[${personIndex}][last_name]`]}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Date of Birth</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][dob]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Marital Status</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][marital_status]`]}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Number</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][phone]`]}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Policy Start Date</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][insurance_start]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Nationality</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][nationality]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Price</h6></div>
                                        <div class="detail_ans"><h6 class="price_highlight">$${dataObject[`persons[${personIndex}][price]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Gender</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][gender]`]}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Destination</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][destination]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Passport ID number</h6></div>
                                        <div class="detail_ans"><h6>${dataObject[`persons[${personIndex}][passport_id]`] || 'N/A'}</h6></div>
                                    </li>
                                    <li>
                                        <div class="detail_title"><h6>Uploaded Passport</h6></div>
                                        <div class="detail_ans sign_img_bx">
                                        ${passportUrl ? `
                                        <a href="${passportUrl}" target="_blank" data-lightbox="gallery" data-title="Uploaded Passport">
                                            <img src="${passportUrl}" alt="Uploaded Passport" style="max-width: 100%; height: auto; border: 1px solid #ccc; border-radius: 5px;">
                                        </a>` : `
                                        <h6 style="color: red;">Not Passport Image Uploaded</h6>`}
                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>`;

                personIndex++; // Move to the next person
            }

            // Append the generated HTML to your target div
            $('#Form_startmain_data').html(htmlContent);
        });
    });
</script>









<!-- <script>
        function getBaseUrl() {
            // Get the current host and port
            const baseUrl = window.location.origin; // This will give you 'http://localhost:8000' or your live domain
            return `${baseUrl}/storage/passports/`; // Append your storage path
        }
    $(document).ready(function() {
        // CSRF token को AJAX सेटिंग में शामिल करें
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#insurance_submitBtn').click(function(event) {
            event.preventDefault(); // Default action को रोकें

            var formData = new FormData($('#wizard')[0]);

            // FormData से सभी वैल्यूज़ प्राप्त करने का तरीका
            var dataObject = {};
            formData.forEach(function(value, key) {
                if (!dataObject[key]) {
                    dataObject[key] = [];
                }
                dataObject[key].push(value); // Key-value pair को एक एरे में जोड़ें
            });

            console.log(dataObject);
          
            // AJAX request to save data
            $.ajax({
    url: "{{ route('purchase.insuranse') }}", 
    type: 'POST',
    data: formData,
    processData: false, // Don't process the data
    contentType: false, // Set the content type to false
    success: function(response) {
        console.log(response.data);
        alert(response.message);
        
        // Assuming response.data contains an array of persons
        const persons = response.data; 
        const baseUrl = getBaseUrl();
        let htmlContent = '';

        // Loop through each person in the response
        persons.forEach((person, index) => {
            const passportUrl = baseUrl + person.uploaded_passport.split('/').pop();
            htmlContent += `
            <div class="person_bx">
                <h6 class="person_title">Person ${index + 1}</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="detail_box pe-4">
                            <ul>
                                <li>
                                    <div class="detail_title">
                                        <h6>Full Name* (as per passport)</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.full_name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Date of Birth</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.date_of_birth}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Marital Status</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.marital_status}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Number</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.number}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Policy Start Date</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.policy_start_date}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Nationality</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.nationality}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Price</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6 class="price_highlight">$${person.price}</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail_box ps-4">
                            <ul>
                                <li>
                                    <div class="detail_title">
                                        <h6>Gender</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.gender}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Destination</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.destination}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Passport ID number</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.passport_id}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Date of Guarantee</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.date_of_guarantee}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Expire of Guarantee</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.expire_of_guarantee}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>No. of days</h6>
                                    </div>
                                    <div class="detail_ans">
                                        <h6>${person.no_of_days}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="detail_title">
                                        <h6>Uploaded Passport </h6>
                                    </div>
                                    <div class="detail_ans sign_img_bx">
                                        <a href="${passportUrl}" data-lightbox="gallery" data-title="Uploaded Passport">
                                            <img src="${passportUrl}" alt="Uploaded Passport">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>`;
        });

        // Total Price
        const totalPrice = persons.reduce((sum, person) => sum + parseFloat(person.price), 0);

        // Append the generated HTML to your target div
        $('#Form_startmain_data').html(htmlContent + `<div class="col-lg-12 text-end mb-3"><h4>Total Price : $${totalPrice}</h4></div>`);
    },
    error: function(xhr) {
        // Handle error
        console.error(xhr.responseText);
    }
});

        });
    });
</script> -->
<script>
   

    $(document).ready(function() {
        // CSRF token को AJAX सेटिंग में शामिल करें
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#purchase_insurance').click(function(event) {
            event.preventDefault(); // Default action को रोकें

            var formData = new FormData($('#wizard')[0]);

            // FormData से सभी वैल्यूज़ प्राप्त करने का तरीका
            var dataObject = {};
            formData.forEach(function(value, key) {
                if (!dataObject[key]) {
                    dataObject[key] = [];
                }
                dataObject[key].push(value); // Key-value pair को एक एरे में जोड़ें
            });

            console.log(dataObject);
          
            // AJAX request to save data
            $.ajax({
                url: "{{ route('purchase.insuranse') }}", 
                type: 'POST',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Set the content type to false
                success: function(response) {
                    console.log(response.data);
                    alert(response.message);
                    
                    $('#Form_startmain_data').empty();

                    // Redirect to profile page after 1 second
                    setTimeout(function() {
                        window.location.href = "{{ route('profile.show') }}";
                    }, 1000);

                },
                error: function(xhr) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>



<!-- <script>
    $(document).ready(function() {
        $('#insurance_submitBtn').click(function(event) {
            event.preventDefault(); // Default action को रोकें

            var formData = new FormData($('#wizard')[0]);

            // FormData से सभी वैल्यूज़ प्राप्त करने का तरीका
            var dataObject = {};
            formData.forEach(function(value, key) {
                dataObject[key] = value; // Key-value pair को एक ऑब्जेक्ट में जोड़ें
            });

            console.log(dataObject);
            console.log('lkljklh');

            // यहाँ पर HTML को dynamically generate करें
            var htmlContent = '<div class="Form_startmain">' +
                '<div class="row">' +
                '<div class="col-lg-12 px-0">' +
                '<div class="person_bx">' +
                '<h6 class="person_title">Person 1</h6>' +
                '<div class="row">' +
                '<div class="col-lg-6">' +
                '<div class="detail_box pe-4">' +
                '<ul>' +
                '<li><div class="detail_title"><h6>Full Name* (as per passport)</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.fullName + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Date of Birth</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.dateOfBirth + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Marital Status</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.maritalStatus + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Number</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.number + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Policy Start Date</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.policyStartDate + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Nationality</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.nationality + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Price</h6></div>' +
                '<div class="detail_ans"><h6 class="price_highlight">' + dataObject.price + '</h6></div></li>' +
                '</ul>' +
                '</div></div>' +
                '<div class="col-lg-6">' +
                '<div class="detail_box ps-4">' +
                '<ul>' +
                '<li><div class="detail_title"><h6>Gender</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.gender + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Destination</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.destination + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Passport ID number</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.passportId + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Date of Guarantee</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.dateOfGuarantee + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Expire of Guarantee</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.expireOfGuarantee + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>No. of days</h6></div>' +
                '<div class="detail_ans"><h6>' + dataObject.noOfDays + '</h6></div></li>' +
                '<li><div class="detail_title"><h6>Uploaded Passport </h6></div>' +
                '<div class="detail_ans sign_img_bx">' +
                '<a href="' + dataObject.uploadedPassport + '" data-lightbox="gallery" data-title="Image">' +
                '<img src="' + dataObject.uploadedPassport + '" alt="Image">' +
                '</a></div></li>' +
                '</ul>' +
                '</div></div></div></div></div>' +
                '<div class="col-lg-12 text-end mb-3">' +
                '<h4>Total Price : $' + dataObject.totalPrice + '</h4>' +
                '</div></div></div>';

            // नई HTML को दिखाएं
            $('.multisteps-form__panel').html(htmlContent); // 'someContainer' को अपने किसी भी कंटेनर के साथ बदलें जहाँ आप HTML डालना चाहते हैं
        });
    });
</script> -->


<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();

        const personsContainer = $('#personsContainer');
        const numberOfPersonsSelect = $('#numberOfPersons');

        // 'NEXT' button click handler
        $('#next_btn').on('click', function() {
            const numberOfPersons = parseInt(numberOfPersonsSelect.val());

            if (!isNaN(numberOfPersons)) {
                personsContainer.empty(); // Clear the container before appending new persons

                for (let i = 2; i <= numberOfPersons+1; i++) {
                    personsContainer.append(`
                        <div class="person_bx">
                            <h6 class="person_title">Person ${i}</h6>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="persons[${i}][first_name]" id="first_name_${i}" required>
                                        <label for="first_name_${i}">First Name <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="persons[${i}][last_name]" id="last_name_${i}" required>
                                        <label for="last_name_${i}">Last Name <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="date" class="insuranceDate" name="persons[${i}][dob]" id="dob_${i}" required>
                                        <label for="dob_${i}">Date of Birth <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" name="persons[${i}][email]" id="email_${i}" required>
                                        <label for="email_${i}">Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="tel" name="persons[${i}][phone]" id="phone_${i}" value="+16" required>
                                        <label for="phone_${i}">Number <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="date" class="insuranceDate" name="persons[${i}][insurance_start]" id="insurance_start_${i}" required>
                                        <label for="insurance_start_${i}">Insurance Start Date:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select name="persons[${i}][nationality]" class="select2" id="nationality_${i}" required>
                                            <option value="" selected disabled>Select Nationality</option>
                                            <option value="US">US</option>
                                            <option value="UK">UK</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <label for="nationality_${i}">Nationality <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select name="persons[${i}][marital_status]" class="select2" id="marital_status_${i}" required>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <label for="marital_status_${i}">Marital Status <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select name="persons[${i}][gender]" class="select2" id="gender_${i}" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <label for="gender_${i}">Gender <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="form-group">
                                        <select name="persons[${i}][numberOfDays]" class="select2" id="numberOfDays_${i}" required>
                                            <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <label for="numberOfDays_${i}">No of days <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="persons[${i}][destination]" id="destination_${i}" required>
                                        <label for="destination_${i}">Destination <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="persons[${i}][passport_id]" id="passport_id_${i}" required>
                                        <label for="passport_id_${i}">Passport/ID Number <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="persons[${i}][passport_file]" type="file" class="dropify" id="passport_file_${i}" required />
                                        <label for="passport_file_${i}">Upload Passport <span>*</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                }

                // Re-initialize Select2 for newly added selects
                $('.select2').select2();
            } else {
                alert("Please select a valid number of persons.");
            }
        });
    });
</script>




</body>
</html>