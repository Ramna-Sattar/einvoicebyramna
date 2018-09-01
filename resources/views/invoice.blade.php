@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
       <div class="col-md-10  " >
            <div class="panel panel-default">
                <div class="panel-heading">Generate Invoice</div>
                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="">
                      
                        <div class="form-group" >
                          <div class="col-md-5">
                            <label for="select status" class="control-label">Select Lable</label>
                                <select  type="dropdown" class=" form-control" name="lable" required autofocus>
                                    <option></option>        
                                </select>  
                          </div>

                          <div class="col-md-5">
                            <label for="select status" class=" control-label">Select Customer</label>
                            
                                <select  type="dropdown" class=" form-control" name="selectcustomer" required autofocus>
                                    <option></option>        
                                </select>      
                         </div>
                      </div>


                      <div class="form-group">
                        <div class="col-md-5">
                            <label for="remarks" class=" control-label">Subject</label>                            
                                <input type="textarea" rows="4" class="form-control" name="Subject"  required autofocus>
                                </input>                                   
                        </div>

                        <div class="col-md-5">
                          <div>
                            <label for="invoice-date-input" class=" control-label">Invoice Date</label>                            
                            <input class="form-control" type="date"  id="invoice-date-input" required autofocus>   
                          </div>
                          <div>
                            <label for="due-date-input" class=" control-label">Due Date</label>  
                            <input class="form-control" type="date"  id="due-date-input" required autofocus>   
                          </div>
                        </div>
                      </div>

                      <div class="col-md-10">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                               <th>Sr.</th>
                               <th>Item</th>
                               <th>Quantity</th>
                               <th>Unit Price</th>
                               <th>Total</th>
                               <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="table">
                            <tr>
                              <td><input type="text" name="serial" id="serial"></td>
                              <td><input type="text" name="Item" id="Item"></td>
                              <td><input type="text" name="quantity" id="quantity" oninput="calculate();"></td>
                              <td><input type="text" name="unitprice" id="unitprice" oninput="calculate();"></td>
                              <td><input type="text" name="total" id="total"></td>
                              <td>
                                <button type="button" onclick="deleteRow(this)" class="btn btn-danger">
                                    Delete
                                </button></td>
                            </tr> 
                          </tbody>
                        </table>
                      </div>



                       <div class="form-group">
                        <div class="col-md-6">
                          <div>
                            <label for="terms&Condition" class=" control-label">Terms&Condition</label>                            
                                <textarea type="textarea" rows="4" class="form-control" name="terms&Condition"  required autofocus>
                                </textarea>
                          </div>


                            <section>
                                <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script><script>tinymce.
                                    init({selector:'textarea'}); </script>
                            </section>

                          <div>
                            <label for="status" class=" control-label">Status</label>  
                            <input class="form-control" type="text"  id="status" required autofocus>   
                          </div>
                        </div>

                        <div class="col-md-5">
                          <div>
                            <label for="total" class=" control-label">Total</label>                            
                            <input class="form-control" type="text"  id="total2" required autofocus>   
                          </div>
                          <div>
                            <label for="discount" class=" control-label">Discount</label>  
                            <input class="form-control" type="text"  id="discount" oninput="dis();" required autofocus>   
                          </div>
                          <div>
                            <label for="net-total" class=" control-label">Net total</label>  
                            <input class="form-control" type="text"  id="nettotal" required autofocus>   
                          </div>
                        </div>
                      </div>
                      <div class="col-md-10 " align="right">
                         <button type="button"  name="add"onclick="addRow()" class="btn btn-success">+</button>
                         <button type="button" class="btn btn-success"> Create </button>
                         <button type="button" class="btn btn-primary"> Cancel </button>
                      </div>


                  </form>  
            </div>
        </div>
    </div>
</div>
@endsection

<script>

    function addRow() {
    var table = document.getElementById("table");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    cell1.innerHTML = '<input type="number" name="serial" id="serial">' ;
    cell2.innerHTML = '<input type="number" name="serial" id="serial">'  ; 
    cell3.innerHTML = '<input type="number" name="serial" id="serial">' ;
    cell4.innerHTML =  '<input type="number" name="serial" id="serial">' ;
    cell5.innerHTML =  '<input type="number" name="serial" id="serial">' ;
    cell6.innerHTML =  ' <button type="button" onclick="deleteRow(this)" class="btn btn-danger "> Delete</button>' ;    
}

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    var l = i-1;
    document.getElementById("table").deleteRow(l);
}

 function calculate() {
        var myBox1 = document.getElementById('quantity').value; 
        var myBox2 = document.getElementById('unitprice').value;
        var result = document.getElementById('total'); 
        var myResult = myBox1 * myBox2;
          document.getElementById('total').value = myResult;
          document.getElementById('total2').value = myResult;
   }


 function dis() {
    var numVal1 = Number(document.getElementById("total2").value);
    var numVal2 = Number(document.getElementById("discount").value) / 100;
    var totalValue = numVal1 - (numVal1 * numVal2);
    document.getElementById("nettotal").value = totalValue.toFixed(2);
}
</script>


{{--@section('js')

        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
            <script>
             CKEDITOR.replace( 'summary-ckeditor' );
            </script>

@append
--}}


 