@extends('master')
@section('content')
<div class="container">
   <div class="row">
    <table class="table">
  
        <tbody>
          <tr>
           
            <td>Amount</td>
            <td>$ {{$total}}</td>
            
          </tr>
          <tr>
            
            <td>Tax</td>
            <td>0</td>
          </tr>
          <tr>
          
            <td>Delivery</td>
            <td>0</td>
           
          </tr>
          <tr>
          
            <td>Total Amount</td>
            <td>$ {{$total + 10}}</td>
           
          </tr>
        </tbody>
      </table>
      <div>
        <form>
            <div class="form-group">
              <textarea type="email" class="form-control" placeholder="Enter Your address"></textarea>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
    <fieldset class="form-group">
    <div class="row">
      
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment"  value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
             Online Payment
          </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment"  value="option2" checked>
            <label class="form-check-label" for="gridRadios1">
              EMI Payment
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment"  value="option3" checked>
            <label class="form-check-label" for="gridRadios1">
              Payment on Delivery
            </label>
          </div>
   
      </div>
    </div>
  </fieldset>

          
            <button type="submit" class="btn btn-success">Order Now</button>
          </form>
      </div>
   </div>
</div>



@endsection

