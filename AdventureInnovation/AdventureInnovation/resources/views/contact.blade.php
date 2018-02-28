@extends('layout')

@section('head')
    <style>
        
    #contact_div {
        color: black;
        padding-top: 3%; 
        padding-left: 15%;
        padding-right: 15% 
    }

    .label-addon{
        min-width:115px;
        text-align:left;
    }
    .alert{
        width:60%;
        margin-right: auto;
        margin-left: auto;
    } 
    .send-bottom{
        padding-bottom:3%;
    }

    </style>
    <script>
    </script>
@stop

@section('body')

<div id="contact_div" class="container-fluid backgroundSeaBlue send-bottom">
    <div  class="col-lg-12 bg-primary">
    <h1 class="text-center send-bottom">Contact Us</h1>
    <div class="alert alert-success text-center hideme">
        <strong>Success!</strong> You contacted us!
    </div>

    <form>
        <div class="form-group col-lg-8">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Your name</span>
                </div>      
                <input id="usr" type="text" class="form-control" placeholder="Your name"> 
            </div>
        <!-- <label for="usr">Your Name</label>
        <input type="text" class="form-control input-lg" id="usr"> -->
        </div>
        
        <div class="form-group col-lg-4">
        <!-- <label for="sel1">You are a...</label> -->
            <div class="input-group input-group-lg">
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Your are a</span>
                </div> 
                <select class="form-control input-lg" id="sel1">
                <option>Guide</option>
                <option>Company</option>
                <option>Other</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-lg-12">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Your email</span>
                </div>      
                <input id="email" type="text" class="form-control" placeholder="Your email address"> 
            </div>
        <!-- <label for="email">Email</label>
        <input type="email" class="form-control input-lg" id="email"> -->
        </div>
        
        <div class="form-group col-lg-12">
            <div class="input-group input-group-lg">  
                <div class="input-group-addon label-addon">
                    <span aria-hidden="true">Subject</span>
                </div>      
                <input id="sub" type="text" class="form-control" placeholder="Subject"> 
            </div>
        <!-- <label for="sub">Subject</label>
        <input type="text" class="form-control input-lg" id="sub"> -->
        </div>
        
        <div class="form-group col-lg-12 send-bottom">
        <!-- <label for="comment">Your Message</label> -->
        <textarea class="form-control" rows="5" id="comment" placeholder="Your message"></textarea>
        </div>
        
        <div class="text-center col-lg-4 col-lg-offset-4 send-bottom">
            <button id="submit-contact" type="submit" class="btn btn-danger btn-lg btn-block">Send</button>
        </div>        
    </form>
    </div>
</div>

@stop