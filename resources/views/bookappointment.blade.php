@extends('header')

@section('content')

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputname">Name</label>
            <input type="text" class="form-control" id="inputname" placeholder="eg:rahul">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Phone</label>
            <input type="tel" class="form-control" id="inputphone" placeholder="9876543210">
          </div>
    </div>
    <div class="form-group ">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="eg:xyz@gmail.com">
      </div>
        <div class="form-group">
            <label for="datepicker">Appointment Date</label>
            <input class="form-control" id="datepicker" width="276" min="{{ date("Y-m-d H:i:s") }}" />
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Phone</label>
            <input type="tel" class="form-control" id="inputphone" placeholder="9876543210">
        </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

  
@endsection

    