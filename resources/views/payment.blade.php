<!DOCTYPE html>
<html>
<head>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
        html, body {
            display: flex;
            justify-content: center;
            height: 100%;
        }
        body, div, h1, form, input, p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }
        h1 {
            padding: 10px 0;
            font-size: 32px;
            font-weight: 300;
            text-align: center;
        }
        p {
            font-size: 12px;
        }
        hr {
            color: #a9a9a9;
            opacity: 0.3;
        }
        .main-block {
            max-width: 340px;
            min-height: 460px;
            padding: 10px 0;
            margin: auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            background: #ebebeb;
        }
        form {
            margin: 0 30px;
        }
        .account-type, .gender {
            margin: 15px 0;
        }
        input[type=radio] {
            display: none;
        }
        label#icon {
            margin: 0;
            border-radius: 5px 0 0 5px;
        }


        input[type=radio]:checked + label:after {
            opacity: 1;
        }
        input[type=text], input[type=password] {
            width: calc(100% - 57px);
            height: 36px;
            margin: 13px 0 0 -5px;
            padding-left: 10px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0,0,0,.09);
            background: #fff;
        }
        input[type=password] {
            margin-bottom: 15px;
        }
        #icon {
            display: inline-block;
            padding: 9.3px 15px;
            box-shadow: 1px 2px 5px rgba(0,0,0,.09);
            background: #1c87c9;
            color: #fff;
            text-align: center;
        }
        .btn-block {
            margin-top: 10px;
            text-align: center;
        }
        button {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #1c87c9;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }
        button:hover {
            background: #26a9e0;
        }
        input[type=submit] {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #1c87c9;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="main-block">
    <h1>Pay with PayPal</h1>
    <form action="{{ url('charge') }}" method="post">
        <hr>
        <label id="icon" for="name"><i class="fab fa-paypal"></i></label>
        <input type="text" name="amount" class="form-control" placeholder="USD">
        {{ csrf_field() }}
        <hr>
        <div class="btn-block">
            <input type="submit" name="submit" value="PayPal">
        </div>
    </form>
</div>
</body>
</html>
