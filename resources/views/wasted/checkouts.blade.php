@extends('frontend.layouts.master')

@section('content')

    <div class="container margin-top-20">
        <div class="card card-body">
            <h2>Confirm Items</h2>
            <hr>
            <div class="row">
                <div class="col-md-7 border-right">
                    @foreach(App\Models\Cart::totalCarts() as $cart)
                        <p>
                            {{$cart->product->title}} -
                            <strong>{{$cart->product->price}} Taka</strong>
                            - {{$cart->product_quantity}} item(s)
                        </p>
                    @endforeach
                </div>
                <div class="col-md-5 ">
                    @php
                        $total_price = 0;
                    @endphp
                    @foreach(App\Models\Cart::totalCarts() as $cart)
                        @php
                        $total_price += $cart->product->price * $cart->product_quantity;
                        @endphp
                    @endforeach
                    <p>Total Price: <strong>{{$total_price}}</strong></p>
                    <p>Shipping Charge: <strong>{{App\Models\Setting::first()->shipping_cost}}</strong></p>
                    <p>(+)</p>
                    <hr>
                    <p>Total Price with Shipping Charge: <strong>{{$total_price + App\Models\Setting::first()->shipping_cost}}</strong></p>
                </div>
            </div>
            <p>
                <a href="{{route('carts')}}">Change Cart Items</a>
            </p>
        </div>

        <div class="card card-body mt-2">
            <h2>Shipping Address</h2>
            <form method="POST" action="{{ route('checkouts.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Receiver Name Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : ''}}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::check() ? Auth::user()->email : ''}}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                    <div class="col-md-6">
                        <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ Auth::check() ? Auth::user()->phone_no : ''}}" required autocomplete="phone_no">
                        @error('phone_no')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="message" class="col-md-4 col-form-label text-md-right">Additional Message (Optional)</label>
                    <div class="col-md-6">
                        <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="4"  autocomplete="message"></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping Address(*)</label>
                    <div class="col-md-6">
                        <textarea id="shipping_address" class="form-control @error('shipping_address') is-invalid @enderror" name="shipping_address" rows="4"  autocomplete="shipping_address">{{ Auth::check() ? Auth::user()->shipping_address : ''}}</textarea>
                        @error('shipping_address')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="payment_method" class="col-md-4 col-form-label text-md-right">Payment Method(*)</label>
                    <div class="col-md-6">
                        <select class="form-control" name="payment_method_id" required id="payments">
                            <option value="">Please Select a Payment method</option>
                            @foreach($payments as $payment)
                                <option value="{{$payment->short_name}}">{{$payment->name}}</option>
                                @endforeach
                        </select>

                        @foreach($payments as $payment)
                                @if($payment->short_name == "cash_in")
                                <div id="payment_{{$payment->short_name}}" class="alert alert-success mt-2 text-center hidden">
                                        <h3>Thankyou, for Shopping with us. Please click <strong>Order Now</strong> to finish the order.</h3>
                                        <br>
                                        <small>You'll get your product within two or three business days.</small>
                                    </div>
                                            @else
                                                <div id="payment_{{$payment->short_name}}" class="alert alert-success mt-2 text-center hidden">
                                                    <h3>{{$payment->name}} Payment</h3>
                                                    <p>
                                                        <strong>{{$payment->name}} No: {{$payment->no}}</strong>
                                                        <br>
                                                        <strong>Account Type: {{$payment->type}}</strong>
                                                    </p>
                                                    <div class="alert alert-success">
                                                        Please Make your payment to this {{$payment->name}} No. and write your <strong>Transaction Code</strong> below there.
                                                    </div>
                                                </div>
                                            @endif
                            @endforeach
                        <input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Please Enter Transaction Code here..">
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Order Now
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $("#payments").change(function () {
            $payment_method = $("#payments").val();
            if ($payment_method == "cash_in"){
                $("#payment_cash_in").removeClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
            }
            else if($payment_method == "bkash"){
                $("#payment_bkash").removeClass('hidden');
                $("#payment_cash_in").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
                $("#transaction_id").removeClass('hidden');

            }else if($payment_method == "rocket"){
                $("#payment_rocket").removeClass('hidden');
                $("#payment_cash_in").addClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#transaction_id").removeClass('hidden');
            }
        })
    </script>
    @endsection