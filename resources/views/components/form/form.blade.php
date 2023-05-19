{{-- <div class="column-span-4 joinus-wrapper">
    <h3>Join Us Now</h3>
    <!-- <p>Please fill out this form</p> -->
    <p style="font-size: 14px;">Become eligible to be selected as a privileged user!</p>
    <hr>
</div> --}}

@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex justify-center">
    <form name="form" id="form" method="POST" action="{{ url('store') }}" class="w-800 h-full bg-white rounded-b-2xl">
        @csrf
        <div class="flex justify-center mt-5">
            <div>
                <h3 class="flex justify-center font-bold text-xl">Join Us Now!</h3>
                <p class="mt-2">Become eligible to be selected as a privileged user!</p>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 mb-5 mt-5">
                <label>First name:</label>
                <input type="text" class="border-2 border-black">
                <label>Last name:</label>
                <input type="text">
                <label>Email:</label>
                <input type="email">
                <label>Profession:</label>
                <input type="text">
                <label>Company:</label>
                <input type="text">
                <div class="flex flex-col items-start justify-center relative gap-1">
                    <label for="Password">
                        Password </label>
                        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                        <input type="password" id="password" name="password" id="placeholder-text" required>
                </div>
            </div>
        </div>
    </form>
</div>


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