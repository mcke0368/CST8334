@extends('layout')

@section('head')
    
    <script>
    </script>
@stop

@section('body')

<div id="contact_div" class="container-fluid">
    <h2 class="text-center" style="margin-bottom:6%;">Contact Us</h2>
    <div class="alert alert-success hideme">
        <strong>Success!</strong> You contacted us!
    </div>

    <form>
        <div class="form-group col-lg-8">
        <label for="usr">Your Name</label>
        <input type="text" class="form-control" id="usr">
        </div>
        
        <div class="form-group col-lg-4">
        <label for="sel1">You are a...</label>
        <select class="form-control" id="sel1">
        <option>Guide</option>
        <option>Company</option>
        <option>Other</option>
        </select>
        </div>
        
        <div class="form-group col-lg-12">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email">
        </div>
        
        <div class="form-group col-lg-12">
        <label for="sub">Subject</label>
        <input type="text" class="form-control" id="sub">
        </div>
        
        <div class="form-group col-lg-12" style="margin-bottom:5%;">
        <label for="comment">Your Message</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        
        <div class="text-center">
        <button id="submit-contact" type="submit" class="btn btn-danger">Send</button>
        </div>
        
        
    </form>
    
</div>

@stop