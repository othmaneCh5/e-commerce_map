@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="c">
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="{{ route('products.edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="input-box">
            <input name="name" type="text" placeholder="Enter name"  value="{{$product->name}}" required>
          </div>
          <div class="input-box">
            <input name="price" type="price" placeholder="Enter  price"  value="{{$product->price}}" required>
          </div>
          <div class="input-box">
            <textarea name="description" placeholder="Description"  required>{{$product->description}}</textarea>
        </div>
        <div class="input-box">
            <input name="image" type="file"  value="{{$product->image}}" required>
          </div>
          <input type="hidden" name="id" value="{{$id}}">
          <div class="input-box button">
            <input type="Submit" value="add">
          </div>
          
        </form>
      </div>
</div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    line-height: 1.5;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: both; 
}

textarea:focus {
    border-color: #007bff; /* Border color when focused */
    outline: 0; /* Remove default focus outline */
}
.c{
    display: flex;
    align-items: center;
    justify-content: center;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
</style>
@endsection