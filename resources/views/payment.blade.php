{{--<div class="payment_item active">--}}
{{--    <div class=""radion_btn>--}}
{{--        <img src="{{ asset('') }}" alt="">--}}
{{--    </div>--}}
    <form action="{{ url('charge') }}" method="post">
        <input type="text" name="amount" class="form-control" >
        {{ csrf_field() }}
{{--        <br>--}}
{{--        <div class="text-center">--}}
{{--            <input type="submit" class="button button-login" name="submit" value="Pay via Paypal">--}}
{{--        </div>--}}
        <input type="submit" name="submit" value="Pay Now">
    </form>
</div>
{{--value="{{ Cart::total() }}--}}
