<!DOCTYPE html>

<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>MS Form</title>
  <link rel="stylesheet" type="text/css" href="/style.css">
  <link rel="icon" type="image/x-icon" href="/logoms.svg">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>

  <main class="page-wrapper">
    <section class="grid-container">

      <section class="column-span-4 header-info-container">
        <img src="/logoms.svg" alt="MS" class="ms-logo">
        <h1>Pre Register</h1>
        <!-- <p>Become eligible to be selected as a privileged user</p> -->
      </section>
      <div class="column-span-4 joinus-wrapper">
        <h3>Join Us Now</h3>
        <!-- <p>Please fill out this form</p> -->
        <p style="font-size: 14px;">Become eligible to be selected as a privileged user!</p>
        <hr>
      </div>


      @if ($errors->any())
      <div class="column-span-4 alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form name="form" id="form" method="POST" action="{{ url('storeUserStand') }}" class="column-span-4 form-wrapper">
        @csrf
        <div class="column-span-2 flex-column">
          <label for=" first-name">
            First Name</label>
          <input type="text" id="name" name="name" id="placeholder-text" required>

        </div>
        <div class="column-span-2 flex-column">
          <label for="last-name">
            Last Name</label>
          <input type="text" id="last_name" name="last_name" id="placeholder-text" required>

        </div>

        <div class="column-span-4 flex-column">
          <label for=" email">
            Email </label>
          <input type="text" id="email" name="email" id="placeholder-text" required>

        </div>
        <div class="column-span-4 flex-column">
          <label for="Profession">
            Profession</label>
          <input type="text" id="profession" name="profession" id="placeholder-text">

        </div>

        <div class="column-span-4 flex-column">
          <label for="Company">
            Company</label>
          <input type="text" id="company" name="company" id="placeholder-text">

        </div>
        <div class="column-span-4 password-container">
          <label for="Password">
            Password </label>
          <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
          <input type="password" id="password" name="password" id="placeholder-text" required>
        </div>


        <section class="column-span-4 submit-container">
          <div class="flex-item">
            <input type="checkbox" id="checkbox" required>
            <label>
              You agree to our terms of <strong id="myButton">privacy policy</strong>.
            </label>
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <p>
                <h2>User Agreement Terms</h2>

                <p> “MS” refers to Management Solutions, a related entity of BIMMS, acting as a digital tool provider for the Architecture, Engineering, Construction and Operation sectors.</p>

                <p>We value your privacy and we are committed to protecting and processing your personal information responsibly.
                  This privacy statement describes how MS collects, uses and shares your information.
                  You agree and accept all these terms and conditions by enrolment in this pre-register of MS4AECO. This privacy user-agreement provides MS transition for MS4AECO register with your name, surname and email address. All settings of passwords, and other sensitive information, is encrypted and kept secure both ways under implementation of the OAuth protocol.
                </p><br>
                <p>BIMMS may require for certain services related to MS4AECO, and use in other MS developments or initiatives, to allocate your encrypted credentials (locally or externally – via cloud services). We may also store your details from business contact information that you provide us, or that we collect from your organization, Business Partners, or suppliers.
                  The parties agree and acknowledge that MS/BIMMS owns all rights, title and interest in and to MS4AECO Software, and the Licensee shall own all rights, title and interest in and to Derivative Works of MS, and its related entity BIMMS.
                  References to other brands, names or logos displayed in this platform serves only as identification and work progress of this owner. These terms don’t allow the brand, names or logos utilization rights for others.
                  This website retains general information and does not work with professional counseling to some disputes. You acknowledge full responsibility of any ill action or loss of information while using this website. No liability for the use of this website, including direct or indirect, special, incidental, consequential or punitive damages or of any other nature, whether arising out of contract, statute, tort (including without limitation, conduct by negligence), or any other may be related to MS and its related entity BIMMS.
                </p><br>
                <p> When you bring this website, implicitly accept the present terms of utilization, otherwise, you must abandon it immediately. These Terms of Use may be revised at any time, at our sole discretion, with the revised terms being posted on the Terms of Use link (i.e., on MS page) or elsewhere on this Website.
                  Such revisions will take effect from the moment they are posted on the page, unless otherwise stated. It is the user's sole responsibility to be aware of the revised Terms of Use by periodically checking this page. Continued use of this Website following changes to these Terms of Use implies acceptance of the revised Terms of Use. </p>
                </p>
              </div>

            </div>
          </div>
          <div class="flex-item">
            <button class="myBtn">Submit</button>
          </div>
      </form>
    </section>


    <section class="column-span-4 footer-wrapper">
      <div class="footer-item">
        <img src="/iconpage.svg" alt="">
        <p>UNIFIED</p>
      </div>
      <div class="footer-item">
        <img src="/iconpage.svg" alt="">
        <p>SIMPLIFIED</p>
      </div>
      <div class="footer-item">
        <img src="/iconpage.svg" alt="">
        <p>AMPLIFIED</p>
      </div>
    </section>



    </section>
  </main>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <script>
    var state = false;

    function toggle() {
      if (state) {
        document.getElementById("password").setAttribute("type", "password");
        state = false;
      } else {
        document.getElementById("password").setAttribute("type", "text");
        state = true;
      }
    }
  </script>

</body>



</html>