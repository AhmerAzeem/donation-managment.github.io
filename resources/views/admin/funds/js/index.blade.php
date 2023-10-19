@push('scripts')
    <script>
        $(document).ready(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
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
                        url: "{{ route('shopkeepers.index') }}",
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

                                        $('.modal-backdrop').addClass('d-none')

                                        setTimeout(function() {

                                            location.reload();
                                        }, 1000);
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
                            $('.modal-backdrop').addClass('d-none')

                            setTimeout(function() {

                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText)
                        }
                    })
                }
            })

            let rowNumber = 1;
            $("#saveexpenses_form").on('submit', function(event) {
                event.preventDefault();

                const accountid = $("#saveexpenses_form select[name='account']").val();
                const date = $("#saveexpenses_form input[name='date']").val();
                const amount = $("#saveexpenses_form input[name='amount']").val();
                const narration = $("#saveexpenses_form input[name='narration']").val();
                const billno = $("#saveexpenses_form input[name='billno']").val();

                if (accountid === '') {
                    $('.account_alert').removeClass('d-none')
                    $(".account_alert").html("Account field is required")
                } else if (date === '') {
                    $(".date_alert").removeClass('d-none')
                    $(".date_alert").html("Date is required.")
                } else if (amount === '') {
                    $(".amount_alert").removeClass('d-none')
                    $(".amount_alert").html("Amount is required.")

                } else if (narration === '') {
                    $(".narration_alert").removeClass('d-none')
                    $(".narration_alert").html("Narration is required.")
                } else {
                    var formData = {
                        accountid: accountid,
                        date: date,
                        amount: amount,
                        narration: narration,
                        billno: billno,
                        rowNumber: rowNumber
                    };


                    $.ajax({
                        url: "{{ route('addexpenses.data') }}",
                        method: "get",
                        data: {
                            formData
                        },
                        success: function(response) {
                            $("#expensesbody").append(response);
                            rowNumber++;
                            toggleSubmitButton();
                            $("#saveexpenses_form")[0].reset();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText)

                        }
                    })
                    // Proceed with form submission or other actions
                }



            })

            function toggleSubmitButton() {
                if ($('#expensesbody tr').length > 0) {
                    $('#addexpenseform_btn').removeClass('d-none');
                } else {
                    $('#addexpenseform_btn').addClass('d-none');
                }
            }


            $("#addexpense_form").on('submit', function(event) {
                event.preventDefault();

                var formData = [];

                $("#expenses_table tbody tr").each(function(index) {
                    var row = $(this);

                    var accountid = row.find('input[name="accountid"]').val();
                    var date = row.find('input[name="date"]').val();
                    var amount = row.find('input[name="amount"]').val();
                    var narration = row.find('input[name="narration"]').val();
                    var billno = row.find('input[name="billno"]').val();

                    var rowData = {
                        accountid: accountid,
                        date: date,
                        amount: amount,
                        narration: narration,
                        billno: billno,
                    };

                    formData.push(rowData);

                })

                $.ajax({
                    url: "{{ route('add.expenses') }}",
                    method: "get",
                    data: {
                        formData
                    },
                    success: function(response) {
                        $(document).Toasts('create', {
                            class: 'bg-success',
                            title: 'Success',
                            body: response
                        })
                        $("#expenses_table tbody tr").remove();

                        setTimeout(function() {

                            location.reload();
                        }, 1000);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                })


            })

            $("#expenses_table").on("click", ".editexpense_btn", function() {
                // Find the parent <tr> element and remove it
                $(this).closest("tr").remove();
                var accountid = $(this).data("account");
                var date = $(this).data("date");
                var amount = $(this).data("amount");
                var narration = $(this).data("narration");
                var billno = $(this).data("bill");

                $("#saveexpenses_form select[name='account']").val(accountid)
                $("#saveexpenses_form input[name='date']").val(date)
                $("#saveexpenses_form input[name='amount']").val(amount)
                $("#saveexpenses_form input[name='narration']").val(narration)
                $("#saveexpenses_form input[name='billno']").val(billno)

            });

            $("#searchledger_form").on('submit', function(event) {
                event.preventDefault();

                const account = $("#searchledger_form select[name='account']").val();
                const fromdate = $("#searchledger_form input[name='fromdate']").val();
                const todate = $("#searchledger_form input[name='todate']").val();

                if (account === '') {
                    $(".account_alert").removeClass('d-none')
                    $(".account_alert").html("Account is required")
                } else if (fromdate === '') {
                    $(".fromdate_alert").removeClass('d-none')
                    $(".fromdate_alert").html("From Date is required")
                } else if (todate === '') {
                    $(".todate_alert").removeClass('d-none')
                    $(".todate_alert").html("To Date is required")
                } else {
                    $.ajax({
                        url: "{{ route('search.ledger') }}", // Replace with the actual URL
                        method: "get",
                        data: {
                            account: account,
                            fromdate: fromdate,
                            todate: todate,
                            rowNumber: rowNumber
                        },
                        success: function(response) {
                            $("#ledger_table tbody tr").remove();
                            $("#ledgerbody").append(response);
                            rowNumber++;
                            $("#searchledger_form")[0].reset();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                            // Handle the error, e.g., display an error message to the user
                        }
                    });
                }
            });
        })
    </script>
@endpush
