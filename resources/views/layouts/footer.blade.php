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

</body>
</html>