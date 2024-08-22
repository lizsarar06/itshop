
@extends('layouts.myapp')
@section("content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h1>เกี่ยวกับร้าน IT Shop</h1>
                </div>
               <div class="card-body">
               <ul>
        <li>ที่อยู่: {{$address}}</li>
        <li>เบอร์โทร: {{$mobilephone}}</li>
        <li>ที่ตั้งร้าน: {{$location}}</li>
    </ul>
               </div>
                
               
            </div>
        </div>
    </div>
@endsection