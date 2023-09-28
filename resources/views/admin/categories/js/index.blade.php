@push('scripts')
    <script>
        $(document).ready(function() {
            $("#addcategory_form").on('submit', function(event) {
                event.preventDefault();
                const name = $("#addcategory_form input[name='categoryname']").val();

                if (name == '') {
                    console.log("Back");
                } else {
                    $.ajax({
                        url: "{{ route('add.category') }}",
                        method: 'get',
                        data: {
                            name: name
                        },
                        success: function(response) {
                            $(document).Toasts('create', {
                                class: 'bg-success',
                                title: 'Success',
                                body: response
                            })

                            $('#modal-lg').removeClass('show')
                            $('.modal-backdrop').addClass('d-none')
                            setTimeout(function() {

                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr) {
                            console.log(xhr.response);
                        }
                    })
                }
            })
        })
    </script>
@endpush
