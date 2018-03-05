@extends('layout')

@section('head')
    <style>
        
        #contact_company_div {
            color: black;
            padding-top: 3%;
            padding-left: 15%;
            padding-right: 15%
        }

        .send-bottom{
            padding-bottom:3%;
        }

        .label-addon{
            min-width:115px;
            text-align:left;
        }

    </style>
    <script>
    </script>
@stop

@section('body')

<div id="contact_company_div" class="container-fluid backgroundSeaBlue send-bottom">
    <div  class="col-lg-12 bg-primary">
    <h1 class="text-center send-bottom">Company Account Inquiry</h1>
    
    <form>
        <div class="form-group col-lg-8">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Your name</span>
                </div>      
                <input id="usr" type="text" class="form-control" placeholder="Your name"> 
            </div>
        </div>
        
        <div class="form-group col-lg-4">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Position</span>
                </div>      
                <input id="pos" type="text" class="form-control" placeholder="Your position"> 
            </div>
        </div>
        
        <div class="form-group col-lg-8">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Your email</span>
                </div>      
                <input id="email" type="text" class="form-control" placeholder="Your email address"> 
            </div>
        </div>
        
        <div class="form-group col-lg-4">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Postal code</span>
                </div>      
                <input id="zip" type="text" class="form-control" placeholder=""> 
            </div>
        </div>
        
        <div class="form-group col-lg-8">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Company</span>
                </div>      
                <input id="com" type="text" class="form-control" placeholder="Your company name"> 
            </div>
        </div>
        
        <div class="form-group col-lg-4">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Members</span>
                </div>  
                <select class="form-control input-lg" id="mem">
                <option>1 - 10</option>
                <option>11 - 20</option>
                <option>21 - 50</option>
                <option>50+</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-lg-12 send-bottom">
        <textarea class="form-control" rows="5" id="mes" placeholder="Additional Message"></textarea>
        </div>
        
        <div class="text-center col-lg-4 col-lg-offset-4 send-bottom">
            <button id="submit-contact" type="submit" class="btn btn-danger btn-lg btn-block">Send</button>
        </div>
    </form>
    </div>
</div>
@stop