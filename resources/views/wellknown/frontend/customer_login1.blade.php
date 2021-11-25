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

<div class="container">



 <div class="row">
    <div  class="col">
     
    </div>
    <div class="col">
        <div class="card">

            <div class="card-header">
                Please Login
            </div>

            <div class="card-body">
                <form accept-charset="UTF-8" action="{{ route('customer.login') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IsMpzBKEgzbLhPreIcbvpOeBqK7Aw9rhvv5DAikDCJF8ClY5O1c4taoBWSUBAOle8BeYb3iN5ruGWsV8AHkjcTY00THJ9kqq3" id="payment-form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group required">
                        <label class='control-label'>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please ente valid Email">
                         @error('email')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                    </div>

                    <div class="form-group required">
                        <label class='control-label'>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*******">
                          @error('password')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 form-group'>
                            <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;">Login</button>
                        </div>
                    </div>
                     <p class="card-text text-center"><small>Don't have an account ?<a href="{{ route('customer.register.form') }}"> <strong style="color:red"  onMouseOver="this.style.color='#0F0'"  onMouseOut="this.style.color='red'">Register</strong></a> </small></p>
                   

                </form>
            </div>


        </div>
    </div>
   

    

    <div  class="col">
    
    </div>

  </div>

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
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
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

