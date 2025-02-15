@extends('front.layout.layout')
@section('head')
    <meta name='robots' content='index,follow, max-image-preview:large/' />
@endsection
@section('content')
    <style>
        body{
            font-family: system-ui;
            margin: 0;
        }
        .page-wrapper{
            width: 100%;
            /* height: 100vh; */
            background: aliceblue;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .thankyou-header{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .thankyou-header h1 {
            margin-bottom: 0;
            font-size: 35px;
        }
        .thankyou-header h4 {
            font-size: 20px;
            text-align: center;
            margin: 10px 0 30px 0;
        }
        .thankyou-header img{ 
            width: 55px;
        }
        .thankyou{
            padding: 40px;
            background: #fff;
            border-radius: 5px;
            /* width: 65%; */
            margin: 100px 0 30px;
            text-align: center;
        }
        .thankyou-body{
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .thankyou-body h4{
            color: #666;
            font-weight: 500;
            font-size: 18px;
            margin-top: 0;
        }
        .thankyou-body a{
            font-weight: 600;
            color: #1e92c7;
            text-decoration: none;
            font-size: 18px;
        }
        .thankyou-footer {
            display: flex;
            justify-content: space-around;
            padding: 30px 0;
        }
        .thankyou-footer a{
            display: flex;
            gap: 10px;
            align-items: baseline;
            text-decoration: none;
            color: #136482;
            font-weight: 500;
            font-size: 18px;
        }
        .table-div ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: left;
        }
        /* .table-div {
            box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;
        } */
        .table-div ul:first-child {
            width: 40%;
        }
        .table-div ul:last-child{
            width: 60%;
            border-left: 1px solid #cdcdcd;
        }
        .table-div{
            display: flex;
            border: 1px solid #cdcdcd;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        }
        .table-div li{
            padding: 20px;
        }
        .table-div li.table-head-li {
            color: #00447c;
            font-weight: 700;
            font-size: 20px;
        }
        .table-head-li {
            border-bottom: 1px solid #cdcdcd;
        }
        .thankyou-footer-bkbtn{
            background: #000;
            padding: 7px 20px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            border-radius: 0;
        }
        .thankyou-footer-bkbtn:hover{
            color: #fff;
            text-decoration: none;
        }
    </style>

    <div class="page-wrapper">
        <div class="container">
        <div class="thankyou">
            <div class="thankyou-header">
                <h1>Thanks for your Request!</h1>
                <h4>Thank you for reaching out. Our sales representative will be in touch with you shortly.</h4>
            </div>
            <div class="thankyou-footer">
                <a href="mailto:sales@wemarketresearch.com"><i class="fa fa-envelope"></i><span>sales@wemarketresearch.com</span></a>
                <a href="tel:+17246183925"><i class="fa fa-phone"></i><span>+17246183925</span></a>
                <!-- <a href="tel:+17246183925"><i class="fa fa-phone"></i><span>+17246183925</span></a> -->
            </div>
            <a href="{{ url('/') }}" class="thankyou-footer-bkbtn">Back to Home</a>
        </div>
        </div>
    </div>

@endsection