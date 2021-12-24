<footer class="border-top mt-4" style="background-color: #52784F; width: 100%; padding: 2rem 0; flex-shrink: 0;">
    <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center my-2 py-2">
            <p style="color: #ffffff; text-align: center;">
                <script>
                    document.write(new Date().getFullYear());
                </script> Copyright Perpuskita. All Right Reserved
            </p>
        </div>
    </div>
</footer>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</body>

</html>