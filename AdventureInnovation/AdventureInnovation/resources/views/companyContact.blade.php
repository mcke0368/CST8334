@extends('layout')

@section('head')
    <style>
        
        #contact_company_div {
            color: black;
            padding: 5%;
            padding-left: 15%;
            padding-right: 15%
        }

    </style>
    <script>
    </script>
@stop

@section('body')

<div id="contact_company_div" class="container-fluid">
    <h1 class="text-center" style="margin-bottom:6%;">Company Account Inquiry</h1>
    
    <form>
        <div class="form-group col-lg-7">
        <label for="usr">Your Name</label>
        <input type="text" class="form-control" id="usr">
        </div>
        
        <div class="form-group col-lg-5">
        <label for="pos">Your Position</label>
        <input type="text" class="form-control" id="pos">
        </div>
        
        <div class="form-group col-lg-8">
        <label for="email">Your Email Address</label>
        <input type="email" class="form-control" id="email">
        </div>
        
        <div class="form-group col-lg-4">
        <label for="zip">Postal Code</label>
        <input type="text" class="form-control" id="zip">
        </div>
        
        <div class="form-group col-lg-7">
        <label for="com">Company Name</label>
        <input type="text" class="form-control" id="com">
        </div>
        
        <div class="form-group col-lg-5">
        <label for="mem"># of Members</label>
        <select class="form-control" id="mem">
        <option>1 - 10</option>
        <option>11 - 20</option>
        <option>21 - 50</option>
        <option>50+</option>
        </select>
        </div>
        
        <div class="form-group col-lg-12" style="margin-bottom:5%;">
        <label for="mes">Additional Message</label>
        <textarea class="form-control" rows="5" id="mes"></textarea>
        </div>
        
        <div class="text-center">
        <button type="submit" class="btn btn-danger">Send</button>
        </div>
        
        
    </form>
    
</div>

@stop