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

<form name="form" id="form" method="POST" action="{{ url('store') }}" class="column-span-4 form-wrapper">
    @csrf
    <div class="column-span-2 flex-column">
        <label for=" first-name">First Name</label>
        <input type="text" id="name" name="name" id="placeholder-text" required>
    </div>

    <div class="column-span-2 flex-column">
        <label for="last-name">Last Name</label>
        <input type="text" id="last_name" name="last_name" id="placeholder-text" required>
    </div>

    <div class="column-span-4 flex-column">
        <label for=" email">Email</label>
        <input type="text" id="email" name="email" id="placeholder-text" required>
    </div>

    <div class="column-span-4 flex-column">
        <label for="Profession">Profession</label>
        <input type="text" id="profession" name="profession" id="placeholder-text">
    </div>

    <div class="column-span-4 flex-column">
        <label for="Company">Company</label>
        <input type="text" id="company" name="company" id="placeholder-text">
    </div>

    <div class="column-span-4 password-container">
        <label for="Password">Password</label>
        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
        <input type="password" id="password" name="password" id="placeholder-text" required>
    </div>

    <section class="column-span-4 submit-container">
        <div class="flex-item">
            <input type="checkbox" id="checkbox" required>
            <label> You agree to our terms of <strong id="myButton">privacy policy </strong>.</label>
                        
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
                    </p>
                    <br>
                    <p>BIMMS may require for certain services related to MS4AECO, and use in other MS developments or initiatives, to allocate your encrypted credentials (locally or externally – via cloud services). We may also store your details from business contact information that you provide us, or that we collect from your organization, Business Partners, or suppliers.
                        The parties agree and acknowledge that MS/BIMMS owns all rights, title and interest in and to MS4AECO Software, and the Licensee shall own all rights, title and interest in and to Derivative Works of MS, and its related entity BIMMS.
                        References to other brands, names or logos displayed in this platform serves only as identification and work progress of this owner. These terms don’t allow the brand, names or logos utilization rights for others.
                        This website retains general information and does not work with professional counseling to some disputes. You acknowledge full responsibility of any ill action or loss of information while using this website. No liability for the use of this website, including direct or indirect, special, incidental, consequential or punitive damages or of any other nature, whether arising out of contract, statute, tort (including without limitation, conduct by negligence), or any other may be related to MS and its related entity BIMMS.
                    </p>
                    <br>
                    <p> When you bring this website, implicitly accept the present terms of utilization, otherwise, you must abandon it immediately. These Terms of Use may be revised at any time, at our sole discretion, with the revised terms being posted on the Terms of Use link (i.e., on MS page) or elsewhere on this Website.
                        Such revisions will take effect from the moment they are posted on the page, unless otherwise stated. It is the user's sole responsibility to be aware of the revised Terms of Use by periodically checking this page. Continued use of this Website following changes to these Terms of Use implies acceptance of the revised Terms of Use. </p>
                    </p>
                </div>

            </div>
        </div>

        <div class="flex-item">
            <button class="myBtn">Submit</button>
        </div>
    </section>
</form>