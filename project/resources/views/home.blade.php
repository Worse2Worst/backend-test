<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@extends('master')
@section('title', 'All Loans')
@section('content')
  <h1>All Loans<h1>
    <button type="button" class="btn btn-primary">Add New Loan</button>
    <table class="table table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Loan Amount</th>
              <th>Loan Term</th>
              <th>Interest Rate</th>
              <th>Created at</th>
              <th width="200">Action</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <td></td>
        </tr>
      </tbody>
  </table>
@endsection
