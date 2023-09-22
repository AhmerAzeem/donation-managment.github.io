@push('scripts')
    <script>
        $(document).ready(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });


            $.ajax({
                url: "{{ route('shopkeepers.index') }}",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $(".shopkeepersnum").html(response)
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });

            $.ajax({
                url: "{{ route('today.funds') }}",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // console.log(response)
                    $(".todayfunds").html(response)
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });

            $("#generatefund input[name='generate']").change(function() {
                const generatefee = $(this).val();

                if (generatefee == "forall") {
                    $("#generatefund #forsingle").attr("class", "hide");
                } else if (generatefee == "forsingle") {
                    $("#generatefund #forsingle").removeAttr("class", "hide");
                }
            });

            $('input[name="shopkeeperid"]').keyup(function() {
                const id = $(this).val()

                if (id != "") {
                    $.ajax({
                        url: "{{ route('get.shopkeeper') }}",
                        method: "GET",
                        data: {
                            id
                        },
                        success: function(response) {
                            var nameInput = $("input[name='shopkeepername']");
                            nameInput.val(response)
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText)
                        }
                    })
                }
            })

            $('.openrecievefund_modal').click(function() {
                var dataValue = $(this).data('id');


                $.ajax({
                    url: "{{ route('getfund.data') }}",
                    method: 'get',
                    data: {
                        id: dataValue
                    },
                    success: function(response) {
                        $("#fundtbody").html(response)

                        $("#overlay_div").addClass('d-none');

                        var TotalAmount = 0;
                        $(".totalamount").each(function() {
                            TotalAmount += parseInt($(this).val());
                            $("#TotalAmount").html(TotalAmount);
                        });

                        var DueAmount = 0;
                        $(".due_amount").each(function() {
                            DueAmount += parseInt($(this).val());
                            $("#TotalDue").html(DueAmount);
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText)
                    }
                })

            });

            $("#recievefund_table").on("input", ".txt-edit", function() {
                var calculated_total_sum = 0;

                $("#recievefund_table .txt-edit").each(function() {
                    var get_textbox_value = $(this).val();
                    if ($.isNumeric(get_textbox_value)) {
                        calculated_total_sum += parseFloat(get_textbox_value);
                    }
                });
                $("#TotalReceived").val(calculated_total_sum);
            });

            $("#recievefund_form").on('submit', function(event) {
                event.preventDefault();

                const TotalReceived = parseFloat($("#TotalReceived").val());

                if (TotalReceived !== 0) { // Check if TotalReceived is not zero

                    var formData = [];

                    $("#recievefund_table tbody tr").each(function(index) {
                        var row = $(this);
                        var receivedamount = parseFloat(row.find('input[name="recievedamount"]')
                            .val());

                        // Check if receivedamount is not zero
                        if (receivedamount !== 0) {
                            var id = row.find('input[name="id"]').val();
                            var shopkeeper_id = row.find('input[name="shopkeeper_id"]').val();
                            var name = row.find('input[name="name"]').val();
                            var month = row.find('input[name="month"]').val();
                            var year = row.find('input[name="year"]').val();
                            var amount = row.find('input[name="amount"]').val();
                            var due_amount = row.find('input[name="due_amount"]').val();
                            var date = $('#recievefund_form input[name="date"]').val();

                            if (receivedamount > due_amount) {
                                $(".alert_message").removeClass('d-none');
                                setTimeout(function() {
                                    $(".alert_message").addClass('d-none');
                                }, 3000);

                                $(".alert_message").html(
                                    'Amount should be less than or equal to due amount')
                            } else {
                                var rowData = {
                                    id: id,
                                    shopkeeper_id: shopkeeper_id,
                                    name: name,
                                    month: month,
                                    year: year,
                                    amount: amount,
                                    due_amount: due_amount,
                                    receivedamount: receivedamount,
                                    date: date
                                };

                                formData.push(rowData);

                                $.ajax({
                                    url: "{{ route('recieve.fund') }}",
                                    method: "get",
                                    data: {
                                        formData: formData
                                    },
                                    success: function(response) {
                                        // console.log(response)
                                        $(document).Toasts('create', {
                                            class: 'bg-success',
                                            title: 'Success',
                                            body: response
                                        })

                                        $('#modal-xl').removeClass('show')
                                        $('#modal-xl').removeAttr('style')
                                        $('#modal-xl').removeAttr('role')
                                        $('#modal-xl').removeAttr('aria-modal')
                                        $('.modal-backdrop').addClass('d-none')
                                    },
                                    error: function(xhr) {
                                        console.log(xhr.responseText)
                                    }
                                })
                            }
                        }
                    });



                } else {
                    $(".alert_message").removeClass('d-none');
                    $(".alert_message").html("Please write a non-zero amount in Total Received");
                }
            });


            $("#addaccount_form").on('submit', function(event) {
                event.preventDefault();

                const accountname = $("#addaccount_form input[name='accountname']").val();

                if (accountname == '') {
                    $(".alert_message").removeClass('d-none')
                    $(".alert_message").html("Please Write a Name")
                    setTimeout(function() {
                        $(".alert_message").addClass('d-none');
                    }, 2000);

                } else {

                    $.ajax({
                        url: "{{ route('add.account') }}",
                        method: 'get',
                        data: {
                            accountname: accountname
                        },
                        success: function(response) {
                            $(document).Toasts('create', {
                                class: 'bg-success',
                                title: 'Success',
                                body: response
                            })

                            $('#modal-lg').removeClass('show')
                            $('#modal-lg').removeAttr('style')
                            $('#modal-lg').removeAttr('role')
                            $('#modal-lg').removeAttr('aria-modal')
                            $('.modal-backdrop').addClass('d-none')
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText)
                        }
                    })
                }
            })
        })
    </script>
@endpush
