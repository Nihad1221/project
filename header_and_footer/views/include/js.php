<script>
    $(document).ready(function () {
        $('button').on('click', function (e) {
            e.preventDefault();
            var email = $('input[type="email"]').val();

            $.ajax({
                url: 'save_email.php',
                type: 'POST',
                data: {email: email},
                success: function (response) {
                    var result = JSON.parse(response);
                    if (result.status === 'success') {
                        toastr.success(result.message, 'Uğurlu!');
                        $('input[type="email"]').val('');
                    } else {
                        toastr.error(result.message, 'Xəta!');
                    }
                },
                error: function () {
                    toastr.error('Bir xəta baş verdi.', 'Xəta!');
                }
            });
        });
    });
</script>
