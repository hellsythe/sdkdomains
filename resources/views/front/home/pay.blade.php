@extends('front.layouts.app')

@section('custom_loads_start')
    <script type="text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript"
    src="https://js.openpay.mx/openpay.v1.min.js"></script>
    <script type='text/javascript'
    src="https://js.openpay.mx/openpay-data.v1.min.js"></script>
@endsection
@section('custom_scripts')

    <script type="text/javascript">
     $(document).ready(function() {
      OpenPay.setId('{{config('app.openpay.id')}}');
      OpenPay.setApiKey('{{config('app.openpay.public_key')}}');
      OpenPay.setSandboxMode({{config('app.openpay.sandbox')}});
      var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
      });
      $('#pay-button').on('click', function(event) {
          event.preventDefault();
          $("#pay-button").prop( "disabled", true);
          OpenPay.token.extractFormAndCreate('payment-form', success_callbak, error_callbak);
      });
      var success_callbak = function(response) {
          var token_id = response.data.id;
          $('#token_id').val(token_id);
          $('#payment-form').submit();
      };
      var error_callbak = function(response) {
          var desc = response.data.description != undefined ?
          response.data.description : response.message;
          alert("ERROR [" + response.status + "] " + desc);
          $("#pay-button").prop("disabled", false);
      };
    </script>
@endsection

@section('content')
    <section class="testimonail-wrap section-padding" id="faq">
        <div class="testimonial-bg" data-background="assets/img/bgshape.svg" style="background-image: url(&quot;assets/img/bgshape.svg&quot;);">
        </div>
    </section>
    <div class="table-responsive">
        <div class="payment-form">
            <div class="banner">
                <h2>Detalle de la compra</h2>
            </div>
        </div>
        @php
            $total = 0;
        @endphp
        <table class="table">
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th> <strong>Total</strong> </th>
            </tr>
        <tr>
            <td class="text-center" colspan="3">Total</td>
            <td>${{number_format($total, 2)}}</td>
        </tr>
        </table>
    </div>
    <br>
    <br>
    <form action="{{route('process-pay')}}" method="POST" id="payment-form">
        @csrf
        <input type="hidden" name="token_id" id="token_id">
        <input type="hidden" name="amount" value="{{$total}}">
        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
        <div class="pymnt-itm card active">
            <div class="banner">
                <h2>Tarjeta de crédito o débito</h2>
            </div>
            <div class="pymnt-cntnt">
                <div class="card-expl">
                    <div class="credit">
                        <h4>Tarjetas de crédito</h4>
                        <img src="{{asset('openpay/cards1.png')}}" alt="">
                    </div>
                    <div class="debit">
                        <h4>Tarjetas de débito</h4>
                        <img src="{{asset('openpay/cards2.png')}}" alt="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label>Nombre del titular</label><input class="form-control" type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                    </div>
                    <div class="col-md-6">
                        <label>Número de tarjeta</label><input class="form-control" type="text" autocomplete="off" data-openpay-card="card_number"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Fecha de expiración</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sctn-col half l"><input class="form-control" type="text" placeholder="Mes" data-openpay-card="expiration_month"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sctn-col half l"><input class="form-control" type="text" placeholder="Año" data-openpay-card="expiration_year"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"><label>Código de seguridad</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{asset('openpay/cvv.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="openpay">
                        <div class="logo">
                            Transacciones realizadas vía:
                            <div class="">
                                <img src="{{asset('openpay/openpay.png')}}" alt="">
                            </div>
                        </div>
                        <div class="shield"><img src="{{asset('openpay/security.png')}}" alt=""> Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                    </div>
                <div class="sctn-row">
                    <a style="color: white" class="btn btn-primary float-right" id="pay-button">Pagar</a>
                </div>
            </div>
        </div>
    </form>
@endsection

<style media="screen">
#payment-form, .payment-form{
    .banner{
        border-radius: 10px;
        padding: 10px;
        background-color: #2C303B;
        h2{
            color: #DCDCDC;
            font-weight: bold;
        }
    }
    .card-expl{
        padding: 10px;
        display: flex;
        flex-flow: wrap row;
        justify-content: space-between;
    }
    .openpay{
        padding: 5px;
        display: flex;
        flex-flow: wrap row;
        align-items: flex-end;
        justify-content: flex-end;
        .logo{
            margin-right: 30px;
        }
    }
}
</style>
