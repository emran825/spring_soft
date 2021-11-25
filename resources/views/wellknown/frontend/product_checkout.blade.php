@extends('wellknown.layouts.index')


@section("content")

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>
<!-- Page Title Section -->
<div class="container">
    {{-- <div class="row"> --}}

   <form accept-charset="UTF-8" action="{{ route('stripe.post') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IsMpzBKEgzbLhPreIcbvpOeBqK7Aw9rhvv5DAikDCJF8ClY5O1c4taoBWSUBAOle8BeYb3iN5ruGWsV8AHkjcTY00THJ9kqq3" id="payment-form" method="post">
                                    {{ csrf_field() }}

    <div class="card">
        <div class="card-header">
            <h4 class="box-title"><strong>Products Cart Table</strong></h4>
        </div>
        <div class="card-body">
            <!--main area-->
            <main id="main" class="main-site">




                <div class="container">



                    {{-- <div class=" main-content-area">
				<div class="wrap-address-billing"> --}}
                    <h3 class="box-title">Billing Address</h3>
                    {{-- <form action="#" method="get" name="frm-billing"> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" name="fname" value="" placeholder="Your name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">last name</label>
                            <input type="text" class="form-control" name="lname" value="" placeholder="Your last name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Email Addreess:</label>
                            <input type="email" class="form-control" name="email" value="" placeholder="Type your email">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone" value="" placeholder="10 digits format">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Country</label>
                            <input class="form-control" type="text" name="country" value="" placeholder="United States">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address:</label>
                            <input type="text" class="form-control" name="add" value="" placeholder="Street at apartment number">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Postcode / ZIP:</label>
                            <input class="form-control" type="text" name="zip_code" value="" placeholder="Your postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Town / City</label>
                            <input class="form-control" type="text" name="city" value="" placeholder="City name">
                        </div>
                    </div>
                </div>
            </main>
            <!--main area-->

        </div>
         <div class="row justify-content-md-center">
                     <div class="card">
                         <div class="card-body">
                             {{-- <form accept-charset="UTF-8" action="{{ route('stripe.post') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IsMpzBKEgzbLhPreIcbvpOeBqK7Aw9rhvv5DAikDCJF8ClY5O1c4taoBWSUBAOle8BeYb3iN5ruGWsV8AHkjcTY00THJ9kqq3" id="payment-form" method="post">
                                    {{ csrf_field() }} --}}


                                     <div class="form-group required">
                                         <label class='control-label'>Name on Card</label>
                                         <input type="text" class="form-control" name="payment_type"  placeholder="Name on Card">
                                     </div>



                                    {{-- <div class='form-row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input name="" class='form-control' size='4' type='text'>
                                        </div>
                                    </div> --}}


                                        <div class="form-group required">
                                         <label class='control-label'>Card Number</label>
                                         <input type="text" name="card_num" class="form-control"  placeholder="Card Number">
                                     </div>

                                    {{-- <div class='form-row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input name="card_num" autocomplete='off' class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div> --}}



                                    <div class='form-row'>
                                        <div class='col-xs-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off' name="cvc" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-4 form-group expiration required'>
                                            <label class='control-label'>Expiration</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="e_m">
                                        </div>
                                        <div class='col-xs-4 form-group expiration required'>
                                            <label class='control-label'>  Expiration</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="e_y">
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12'>
                                            <div class='form-control total btn btn-info'>
                                                Total: <span class='amount'>{{  Session::get('total') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12 form-group'>
                                        <input type ="text" name="g_t" value="{{  Session::get('total') }}">
                                          <input type ="text" name="g_t" value="{{  Session::get('qty') }}">
                                            <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;">Pay »</button>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'></div>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                         </div>
                     </div>
                 </div>

    </div>
    </form>












    {{-- </div> --}}

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(e.target).closest('form')
                , inputSelector = ['input[type=email]', 'input[type=password]'
                    , 'input[type=text]', 'input[type=file]'
                    , 'textarea'
                ].join(', ')
                , $inputs = $form.find('.required').find(inputSelector)
                , $errorMessage = $form.find('div.error')
                , valid = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault(); // cancel on first error
                }
            });
            $form.on('submit', function(e) {
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val()
                        , cvc: $('.card-cvc').val()
                        , exp_month: $('.card-expiry-month').val()
                        , exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                  
                    var token = response['id'];
                  
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    });

</script>







<!-- End Project Section -->
@endsection

