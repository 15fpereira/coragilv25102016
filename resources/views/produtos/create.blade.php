<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></head>
<br />
<div class="container">
    <div class="row">
        Formulário
    </div>
    <div class="row">
        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="post" action="{{route('produtos.store')}}">
                {{csrf_field()}}
                <!-- Left Inputs -->
                <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s">
                    <!-- Categoria -->
                    <select name="categoria_id" id="categoria_id" required="required" class="form" placeholder="Categoria" >
                        <option value="0">Selecione</option>
                        @foreach(App\Models\Categoria::all() as $key)
                            <option value="{{$key->id}}">{{$key->nome}}</option>
                            @endforeach

                    <!-- nome -->
                    <input type="text" name="nome" id="nome" required="required" class="form" placeholder="Nome" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                    <!-- Message -->
                    <textarea name="descricao" id="descricao" class="form textarea"  placeholder="Descrição"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="col-xs-3">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn semibold">Salvar</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>
    </div>


        <!-- Your Mail Message -->
        <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
                <strong>Thank You !</strong> Your email has been delivered.
            </div>
        </div>

    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->
<style>
 #contact{
     padding:10px 0 10px;
 }

        .contact-text{
            margin:45px auto;
        }

        .mail-message-area{
            width:100%;
            padding:0 15px;
        }

        .mail-message{
            width: 100%;
            background:rgba(255,255,255, 0.8) !important;
            -webkit-transition: all 0.7s;
            -moz-transition: all 0.7s;
            transition: all 0.7s;
            margin:0 auto;
            border-radius: 0;
        }

        .not-visible-message{
            height:0px;
            opacity: 0;
        }


        /* Input Styles */

        .form{
            width: 100%;
            padding: 15px;
            background:#f8f8f8;
            border:1px solid rgba(0, 0, 0, 0.075);
            margin-bottom:25px;
            color:#727272 !important;
            font-size:13px;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .form:hover{
            border:1px solid #8BC3A3;
        }

        .form:focus{
            color: white;
            outline: none;
            border:1px solid #8BC3A3;
        }

        .textarea{
            height: 200px;
            max-height: 125px;
            max-width: 100%;
        }

        /* Generic Button Styles */

        .button{
            padding:8px 12px;
            background:#0A5175;
            display: block;
            width:120px;
            margin:10px 0 0px 0;
            border-radius:3px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            text-align:center;
            font-size:0.8em;
            box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
            -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
            -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
        }

        .button:hover{
            background:#8BC3A3;
            color:white;
        }

        /* Send Button Styles */

        .form-btn{
            width:180px;
            display: block;
            height: auto;
            padding:15px;
            color:#fff;
            background:#8BC3A3;
            border:none;
            border-radius:3px;
            outline: none;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            margin:auto;
            box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
            -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
            -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
        }

        .form-btn:hover{
            background:#111;
            color: white;
            border:none;
        }

        .form-btn:active{
            opacity: 0.9;
        }
        center{
            margin-top:330px;
        }
        input {
            position: relative;
            z-index: 9999;
        }
        </style>

<center> Visit Developer's Website <a href="http://shuvohabib.com" target="blank">Shuvo Habib </a> </center>